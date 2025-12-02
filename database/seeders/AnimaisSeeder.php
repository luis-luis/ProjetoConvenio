<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;
use App\Models\User;

class AnimaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            // fallback: caso não haja usuários, criar alguns (opcional)
            $users = User::factory(3)->create();
        }

        foreach ($users as $user) {
            Animal::factory(rand(1, 3))->create([
                'user_id' => $user->id,
            ]);
        }

        // Alternativa: criar apenas animais com usuários já existentes
        // Animal::factory(10)->create();
    }
}
