<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin Asstistant']);
        Role::create(['name' => 'Laboratory Asstistant']);
        Role::create(['name' => 'Service Coordinator']);
        Role::create(['name' => 'Marketing Manager']);
        Role::create(['name' => 'Sales Manager']);
        Role::create(['name' => 'Pchem Manager']);
        Role::create(['name' => 'Pchem Analyst']);
        Role::create(['name' => 'Micro Manager']);
        Role::create(['name' => 'Micro Analyst']);
    }
}