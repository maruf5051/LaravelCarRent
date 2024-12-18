<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'sikder15-5051@diu.edu.bd',
            'password' => Hash::make('12345'), // Use Hash for password encryption
            'role' => 'admin',

        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'marufsikder5051@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'customer',

        ]);
    }
}
