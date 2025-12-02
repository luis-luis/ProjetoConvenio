<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuários fixos (úteis para login durante testes)
        User::firstOrCreate(
            ['email' => 'vetclin@example.com'],
            ['name' => 'VetClin', 'password' => bcrypt('123456'), 'role' => 'credenciada']
        );

        User::firstOrCreate(
            ['email' => 'luis@example.com'],
            ['name' => 'Luis', 'password' => bcrypt('123456'), 'role' => 'tutor']
        );

        // Mais usuários aleatórios para testes
        User::factory(5)->create();
    }
}
