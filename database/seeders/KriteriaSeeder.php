<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriterias = [
            [
                'kode_kriteria' => 1.00,
                'nama_kriteria' => 'Biaya Sewa',
                'bobot_kriteria' => 5.00,
                'attribute' => 'cost'
            ],
            [
                'kode_kriteria' => 2.00,
                'nama_kriteria' => 'Luas Gedung',
                'bobot_kriteria' => 3.00,
                'attribute' => 'benefit'
            ],
            [
                'kode_kriteria' => 3.00,
                'nama_kriteria' => 'Lokasi Gedung',
                'bobot_kriteria' => 4.00,
                'attribute' => 'benefit'
            ],
            [
                'kode_kriteria' => 4.00,
                'nama_kriteria' => 'Aksesbilitas',
                'bobot_kriteria' => 3.00,
                'attribute' => 'benefit'
            ],
            [
                'kode_kriteria' => 5.00,
                'nama_kriteria' => 'Jarak Kompetitor',
                'bobot_kriteria' => 1.00,
                'attribute' => 'cost'
            ],
            [
                'kode_kriteria' => 6.00,
                'nama_kriteria' => 'Jarak dari sekolah',
                'bobot_kriteria' => 4.00,
                'attribute' => 'benefit'
            ],
            [
                'kode_kriteria' => 7.00,
                'nama_kriteria' => 'Kondisi Gedung',
                'bobot_kriteria' => 3.00,
                'attribute' => 'benefit'
            ],
            [
                'kode_kriteria' => 8.00,
                'nama_kriteria' => 'Jumlah Sekolah',
                'bobot_kriteria' => 5.00,
                'attribute' => 'benefit'
            ],
        ];

        DB::table('kriterias')->insert($kriterias);
    }
}
