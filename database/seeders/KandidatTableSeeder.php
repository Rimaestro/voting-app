<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KandidatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kandidat = [
            [
                'nama_kandidat' => 'Kandidat 1',
                'no_urut' => '1',
                'visi' => 'Memajukan organisasi dengan inovasi teknologi',
                'misi' => 'Mengembangkan sistem informasi, Meningkatkan kualitas layanan digital',
                'foto' => 'kandidat1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kandidat' => 'Kandidat 2',
                'no_urut' => '2',
                'visi' => 'Menciptakan lingkungan yang harmonis dan berkelanjutan',
                'misi' => 'Mengadakan kegiatan sosial, Menjalin kerjasama dengan berbagai pihak',
                'foto' => 'kandidat2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kandidat' => 'Kandidat 3',
                'no_urut' => '3',
                'visi' => 'Mewujudkan transparansi dan akuntabilitas dalam organisasi',
                'misi' => 'Membuat sistem pelaporan terbuka, Melibatkan semua anggota dalam pengambilan keputusan',
                'foto' => 'kandidat3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($kandidat as $k) {
            DB::table('kandidat')->insert($k);
        }
    }
}
