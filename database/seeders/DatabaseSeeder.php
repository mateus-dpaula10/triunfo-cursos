<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'        => 'Mateus De Paula',
            'password'    => bcrypt('password'),
            'cpf'         => '47119175866',
            'birth_date'  => '1999-09-04',
            'phone'       => '(11) 96254-4354',
            'role'        => 'admin',
            'description' => 'Usuário administrador principal',
            'course_id'   => null,
        ]);
    }
}
