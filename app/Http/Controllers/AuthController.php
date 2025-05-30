<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
Use App\Models\User;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role === 'admin') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/prova');
            }
        }

        throw ValidationException::withMessages([
            'email' => ['As credenciais estão incorretas.']
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function create() {
        return view('admin.register');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'cpf'         => 'required|string|max:14|unique:users',
            'birth_date'  => 'required|date',
            'phone'       => 'nullable|string|max:20',
            'email'       => 'required|email|unique:users',
            'password'    => 'required|string|min:6',
            'role'        => 'required|string'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        
        return redirect()->route('admin.users.create')->with('success', 'Usuário criado com sucesso!');
    }

    public function getAll() {
        $data = User::all();

        return view('admin.all', ['users' => $data]);
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
                $user->delete();
                continue;
            }

            $user->name = $userData['name'] ?? $user->name;
            $user->email = $userData['email'] ?? $user->email;

            if (!empty($userData['password'])) {
                $user->password = bcrypt($userData['password']);
            }

            $user->phone = $userData['phone'] ?? $user->phone;
            $user->cpf = $userData['cpf'] ?? $user->cpf;
            $user->role = $userData['role'] ?? $user->role;
            
            $user->save();
        }

        return redirect()->back()->with('success', 'Alterações feitas com sucesso!');
    }
}
