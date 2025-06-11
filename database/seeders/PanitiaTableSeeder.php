<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanitiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan id user dengan role panitia
        $panitia_user = DB::table('users')->where('role', 'panitia')->first();

        if ($panitia_user) {
            DB::table('panitia')->insert([
                'user_id' => $panitia_user->id,
                'jabatan' => 'Ketua Panitia',
                'no_telp' => '081234567890',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
