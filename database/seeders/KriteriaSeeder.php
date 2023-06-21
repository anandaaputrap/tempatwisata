<?php

namespace Database\Seeders;

use App\Models\KriteriaFasilitas;
use App\Models\KriteriaHargaTiket;
use App\Models\KriteriaJarak;
use App\Models\KriteriaPelayanan;
use App\Models\KriteriaSuasana;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $harga = [
            [
                'harga' => '< 10  Ribu',
                'bobot' => '3',
                'kategori' => 'Murah',
            ],
            [
                'harga' => '10 - 30 Ribu',
                'bobot' => '2',
                'kategori' => 'Sedang',
            ],
            [
                'harga' => '30 - 50 Ribu',
                'bobot' => '1',
                'kategori' => 'Mahal',
            ]
        ];

        foreach ($harga as $value) {
            KriteriaHargaTiket::create($value);
        }



        $jarak = [
            [
                'jarak' => '<2 Km',
                'bobot' => '5',
                'kategori' => 'Sangat Dekat'
            ],
            [
                'jarak' => '2 – 3 Km',
                'bobot' => '4',
                'kategori' => 'Dekat'
            ],
            [
                'jarak' => '3 – 4 Km',
                'bobot' => '3',
                'kategori' => 'Sedang'
            ],
            [
                'jarak' => '4 – 5 Km',
                'bobot' => '2',
                'kategori' => 'Jauh'
            ],
            [
                'jarak' => '5 – 6 Km',
                'bobot' => '1',
                'kategori' => 'Sangat Jauh'
            ]
        ];

        foreach ($jarak as $value) {
            KriteriaJarak::create($value);
        }
        

        $fasilitas = [
            [
                'fasilitas' => 'Tidak Ada',
                'bobot'     => '0',
            ],
            [
                'fasilitas' => 'Toilet',
                'bobot'     => '1',
            ],
            [
                'fasilitas' => 'Tempat Ibadah & Toilet',
                'bobot'     => '2',
            ],
            [
                'fasilitas' => 'Restoran',
                'bobot'     => '3'
            ],
            [
                'fasilitas' => 'Tempat Ibadah & Toilet & Restoran',
                'bobot'     => '4',
            ],
            [
                'fasilitas' => 'empat Ibadah & Toilet & Restoran & Hotel',
                'bobot'     => '5',
            ]
        ];

        foreach ($fasilitas as $value) {
            KriteriaFasilitas::create($value);
        }

        $suasana = [
            [
                'suasana' => 'Ramai',
                'bobot'   => '3',
            ],
            [
                'suasana' => 'Sedang',
                'bobot'   => '2',
            ],
            [
                'suasana' => 'Sunyi',
                'bobot'   => '1',
            ]
        ];

        foreach ($suasana as $value) {
            KriteriaSuasana::create($value);
        }
    }
}
