<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        User::create([
            'name' => $faker->name,
            'role' => 'Super Admin',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'superadmin@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Admin Asstistant',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'superassistant@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'FSR',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'fsr@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Service Coordinator',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'servicecoordinator@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Marketing Manager',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'marketingmanager@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Sales Manager',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'salesmanager@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Pchem Manager',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'pchemmanager@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Pchem Analyst',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'pchemanalyst@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Micro Manager',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'micromanager@lims.com',
            'password' => Hash::make('12345'),
        ]);
        User::create([
            'name' => $faker->name,
            'role' => 'Micro Analyst',
            'status' => '1',
            'email_verified_at' => '2023-05-10 13:29:43',
            'email' => 'microanalyst@lims.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
