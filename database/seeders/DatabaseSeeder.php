<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Products::create([
            'img' => 'img/b.jpeg',
            'p_name' => 'Brocolli',
            'p_price' => '5.50',
            'p_mass' => '100',
        ]);
        Products::create([
            'img' => 'img/b.jpeg',
            'p_name' => 'tomato',
            'p_price' => '4.00',
            'p_mass' => '100',
        ]);
        Products::create([
            'img' => 'img/b.jpeg',
            'p_name' => 'Potato',
            'p_price' => '3.00',
            'p_mass' => '100',
        ]);
    }
}
