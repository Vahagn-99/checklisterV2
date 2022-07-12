<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)
            ->create()
            ->map(function ($user) {
                $user->assignRole('user');
            });
        //Create admin
        User::factory()
            ->create([
                'name' => 'Vahagn',
                'email' => 'admin@checklister.com',
                'password' => Hash::make('admin'),
            ])
            ->assignRole('admin');
    }
}
