<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'alamat' => 'Purwokerto',
            'role' => 'admin',
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan panitia
        DB::table('users')->insert([
            'name' => 'Panitia',
            'email' => 'panitia@example.com',
            'password' => Hash::make('password'),
            'alamat' => 'Purwokerto',
            'role' => 'panitia',
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan pemilih
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'name' => "Pemilih $i",
                'email' => "pemilih$i@example.com",
                'password' => Hash::make('password'),
                'alamat' => "Alamat Pemilih $i",
                'role' => 'pemilih',
                'status' => rand(0, 1), // Secara acak tentukan apakah sudah memilih atau belum
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
