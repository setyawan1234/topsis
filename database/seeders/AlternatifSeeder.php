<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternatifs = [
            [
                'kode_alternatif' => 1.00,
                'nama_alternatif' => 'Jl. Jaya Negara'
            ],
            [
                'kode_alternatif' => 2.00,
                'nama_alternatif' => 'Jl. Wijaya Kusuma'
            ],
            [
                'kode_alternatif' => 3.00,
                'nama_alternatif' => 'Jl. Rajasanegara'
                
            ],
        ];
        DB::table('alternatifs')->insert($alternatifs); 
    }
}
