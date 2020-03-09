<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Администратор',
            'email' => 'admin@localhost',
            'role' => 1, // Администратор
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Примерен Потребител',
            'email' => 'user@example.com',
            'role' => 2, // Обикновен потребител
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
