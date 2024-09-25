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
            'name' => 'Laptop',
            'price' => '2199.00',
            'quantity' => '5',
            'description' => 'This is a RTmaX30 laptop.This laptop is win 11 and Ryzen 5 7000 spec.',
        ]);
        Products::create([
            'name' => 'EarPhone',
            'price' => '899.00',
            'quantity' => '8',
            'description' => 'This earphone have -52db nosiy mode and have 8 mic phone.',
        ]);
        Products::create([
            'name' => 'Gaming Mouse ',
            'price' => '299.00',
            'quantity' => '28',
            'description' => 'The Mouse is new stock of Logitank.This mouse is very smooth and sensitif higher.',
        ]);
    }
}
