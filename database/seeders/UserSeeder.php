<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        'name' => 'Administrator',
        'email' => 'admin@rpl.co.id',
        'password' => Hash::make('user123'),
        'is_active' => 1,
        'role' => 'Superadmin',
        ]);
    }
}
