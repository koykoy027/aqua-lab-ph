<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'            => 'LIMS Administrator',
            'role'            => 'Super Admin',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'admin@lims.com',
            'password'        => Hash::make('12345'),
        ]);
        User::create([
            'name'            => 'Joshua Villanueva',
            'role'            => 'Admin Asstistant',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'villanuevajoshua27@gmail.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Jack Flores',
            'role'            => 'Laboratory Asstistant',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'qarehydiko@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Nichole Peters',
            'role'            => 'Service Coordinator',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'caxev@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Valentine Macdonald',
            'role'            => 'Marketing Manager',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'fafa@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Branden Bernard',
            'role'            => 'Sales Manager',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'qegecili@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Travis Atkinson',
            'role'            => 'Pchem Manager',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'gyqehew@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Dillon Ortiz',
            'role'            => 'Pchem Analyst',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'noxuqewuki@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Georgia Mcfadden',
            'role'            => 'Micro Manager',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'terikuqari@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
        User::create([
            'name'            => 'Phelan Roman',
            'role'            => 'Micro Analyst',
            'status'            => '1',
            'email_verified_at'            => '2023-05-10 13:29:43',
            'email'            => 'mupunyl@mailinator.com',
            'password'        => Hash::make('Pa$$w0rd!'),
        ]);
    }
}