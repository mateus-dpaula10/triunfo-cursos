<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Fabrício Manfré',
            'password' => bcrypt('19021985'),
            'cpf' => '32642701883',
            'birth_date' => '1985-02-19',
            'phone' => '11937533715',
            'role' => 'admin',
            'description' => 'Usuário administrador do sistema'
        ]);
    }
}
