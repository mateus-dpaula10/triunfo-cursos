<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use App\Models\User;

class AuthController extends Controller
{
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
}
