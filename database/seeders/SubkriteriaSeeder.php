<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubkriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subkriteria = [
            // Kriteria 1
            [
                'nama_subkriteria' => '<= Rp. 20 Juta',
                'bobot_subkriteria' => 5.00,
                'kode_kriteria' => 1.00,
            ],
            [
                'nama_subkriteria' => 'Rp. 21 Juta s/d Rp. 40 Juta',
                'bobot_subkriteria' => 4.00,
                'kode_kriteria' => 1.00,
            ],
            [
                'nama_subkriteria' => 'Rp. 41 Juta s/d Rp. 60 Juta',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 1.00,
            ],
            [
                'nama_subkriteria' => 'Rp. 61 Juta s/d Rp. 80 Juta',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 1.00,
            ],
            [
                'nama_subkriteria' => '>= Rp. 80 Juta',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 1.00,
            ],
            // Kriteria 2
            [
                'nama_subkriteria' => '> 120 m^2',
                'bobot_subkriteria' => 5.00,
                'kode_kriteria' => 2.00,
            ],
            [
                'nama_subkriteria' => '101 m^2 s/d 120 m^2',
                'bobot_subkriteria' => 4.00,
                'kode_kriteria' => 2.00,
            ],
            [
                'nama_subkriteria' => '81 m^2 s/d 100 m^2',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 2.00,
            ],
            [
                'nama_subkriteria' => '61 m^2 s/d 80 m^2',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 2.00,
            ],
            [
                'nama_subkriteria' => '< 120 m^2',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 2.00,
            ],
            // Kriteria 3
            [
                'nama_subkriteria' => 'Dekat dengan fasilitas umum',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 3.00,
            ],
            [
                'nama_subkriteria' => 'Cukup dari fasilitas umum',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 3.00,
            ],
            [
                'nama_subkriteria' => 'Jauh dari fasilitas umum',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 3.00,
            ],
            // Kriteria 4
            [
                'nama_subkriteria' => 'Mudah dijangkau',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 4.00,
            ],
            [
                'nama_subkriteria' => 'Sulit dijangkau',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 4.00,
            ],
            // Kriteria 5
            [
                'nama_subkriteria' => '> 5 km',
                'bobot_subkriteria' => 5.00,
                'kode_kriteria' => 5.00,
            ],
            [
                'nama_subkriteria' => '3 km s/d <= 5 km',
                'bobot_subkriteria' => 4.00,
                'kode_kriteria' => 5.00,
            ],
            [
                'nama_subkriteria' => '2 km s/d < 3 km',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 5.00,
            ],
            [
                'nama_subkriteria' => '1 km s/d < 2 km',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 5.00,
            ],
            [
                'nama_subkriteria' => '< 1 km',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 5.00,
            ],
            // Kriteria 6
            [
                'nama_subkriteria' => '< 1 km',
                'bobot_subkriteria' => 5.00,
                'kode_kriteria' => 6.00,
            ],
            [
                'nama_subkriteria' => '1 km s/d 2 km',
                'bobot_subkriteria' => 4.00,
                'kode_kriteria' => 6.00,
            ],
            [
                'nama_subkriteria' => '2.1 km s/d 4 km',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 6.00,
            ],
            [
                'nama_subkriteria' => '4.1 km s/d 6 km',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 6.00,
            ],
            [
                'nama_subkriteria' => '> 6 km',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 6.00,
            ],
            // Kriteria 7
            [
                'nama_subkriteria' => 'Bangunan bagus',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 7.00,
            ],
            [
                'nama_subkriteria' => 'Bangunan sedikit renovasi',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 7.00,
            ],
            [
                'nama_subkriteria' => 'Bangunan perlu renovasi besar',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 7.00,
            ],
            // Kriteria 8
            [
                'nama_subkriteria' => '> 25 sekolah',
                'bobot_subkriteria' => 5.00,
                'kode_kriteria' => 8.00,
            ],
            [
                'nama_subkriteria' => '21 s/d 25 sekolah',
                'bobot_subkriteria' => 4.00,
                'kode_kriteria' => 8.00,
            ],
            [
                'nama_subkriteria' => '16 s/d 20 sekolah',
                'bobot_subkriteria' => 3.00,
                'kode_kriteria' => 8.00,
            ],
            [
                'nama_subkriteria' => '15 s/d 19 sekolah',
                'bobot_subkriteria' => 2.00,
                'kode_kriteria' => 8.00,
            ],
            [
                'nama_subkriteria' => '9 s/d 15 sekolah',
                'bobot_subkriteria' => 1.00,
                'kode_kriteria' => 8.00,
            ],
        ];

        DB::table('subkriterias')->insert($subkriteria);
    }
}
