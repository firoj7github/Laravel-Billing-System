<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Admin as Admin_Model;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin_Model::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'rate' =>3.2,
            'remember_token' =>bcrypt('admin'),
            'password' => bcrypt('admin123'),
        ]);
    }
}
