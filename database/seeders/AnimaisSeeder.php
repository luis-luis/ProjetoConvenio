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
        // Cria 5 animais associados a usuários existentes
        $users = User::factory(5)->create();

        foreach ($users as $user) {
            Animal::factory(rand(1, 3))->create([
                'user_id' => $user->id,
            ]);
        }

        // Alternativa: criar apenas animais com usuários já existentes
        // Animal::factory(10)->create();
    }
}
