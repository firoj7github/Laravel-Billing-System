<?php

namespace Database\Seeders;

use App\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        $users = Admin::insert([
        [
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("password"),
           'rate'=>"524"
        ],
        
    ]);
    }
}
