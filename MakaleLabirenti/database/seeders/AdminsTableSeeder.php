<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecords = [
            ['id' => 1, 'name' => 'Admin', 'type' => 'admin', 'mobile' => 5555055055, 'email' => 'ahmetfurkan@admin.com', 'password' => $password, 'image' => '', 'status' => 1],
            ['id' => 2, 'name' => 'Admin2', 'type' => 'admin', 'mobile' => 5555055055, 'email' => 'ahmetfurkan2@admin.com', 'password' => $password, 'image' => '', 'status' => 1],
        ];
        Admin::insert($adminRecords);
    }
}
