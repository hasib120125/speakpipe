<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@speakpipe.com',
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'password' => bcrypt('123456'),
            'status' => 1
        ]);
    }
}
