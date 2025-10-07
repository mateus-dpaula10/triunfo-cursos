<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
Use App\Models\User;
Use App\Models\Course;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'cpf' => ['required', 'regex:/^\d{11}$/'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/cursos');
        }

        throw ValidationException::withMessages([
            'password' => ['As credenciais estão incorretas.']
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function create() {
        $data = Course::all();

        return view('admin.register', ['courses' => $data]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'cpf'         => 'required|string|max:14|unique:users',
            'birth_date'  => 'required|date',
            'phone'       => 'nullable|string|max:20',
            'password'    => 'required|string|min:6',
            'role'        => 'required|string',
            'description' => 'nullable|string',
            'course_id'   => 'nullable|exists:courses,id'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        
        return redirect()->route('admin.users.create')->with('success', 'Usuário criado com sucesso!');
    }

    public function getAll(Request $request) {  
        $search = $request->input('search');

        $users = User::with([
            'course',
            'examAttempts.exam'
        ])
        ->when($search, function ($query, $search) {
            $searchNormalized = preg_replace('/[^0-9]/', '', $search);

            $query->where(function ($q) use ($search, $searchNormalized) {
                $q->where('cpf', 'like', "%{$searchNormalized}%")
                    ->orWhere('cpf', 'like', "%{$search}%");
            });
        })
        ->get();

        $courses = Course::all();

        return view('admin.all', compact('users', 'courses'));
    }

    public function update(Request $request) {
        $data = $request->input('users');

        foreach ($data as $userData) {
            if (!isset($userData['id'])) {
                continue;
            }

            $user = User::find($userData['id']);
            if (!$user) {
                continue;
            }

            if (isset($userData['delete']) && $userData['delete']) {
                $user->examAttempts()->delete();
                $user->delete();
                continue;
            }

            $user->name = $userData['name'] ?? $user->name;            

            if (!empty($userData['password'])) {
                $user->password = bcrypt($userData['password']);
            }

            $user->phone = $userData['phone'] ?? $user->phone;
            $user->cpf = $userData['cpf'] ?? $user->cpf;
            $user->role = $userData['role'] ?? $user->role;
            $user->description = $userData['description'] ?? $user->description;
            $user->course_id = $userData['course_id'] ?? $user->course_id;
            
            $user->save();
        }

        return redirect()->back()->with('success', 'Alterações feitas com sucesso!');
    }
}
