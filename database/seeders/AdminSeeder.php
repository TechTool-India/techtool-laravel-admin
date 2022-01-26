<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // Create Admin User
        $user = User::create([
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'email'         =>  'admin@admin.com',
            'mobile_number' =>  '9028187696',
            'password'      =>  Hash::make('Admin@123#'),
            'role_id'       => 1
        ]);
    }
}
