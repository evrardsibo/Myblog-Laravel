<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'sibo10@hotmail.com',
            'password' => Hash::make('Evr1082van/'),
            'role' => User::ADMIN_ROLE
        ]);
        
    }
}
