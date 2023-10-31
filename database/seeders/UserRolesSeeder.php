<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_roles;

class UserRolesSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user_roles::create([
            'user_id' => '1',
            'role_id' => '1',
            ]);
    }      
}
