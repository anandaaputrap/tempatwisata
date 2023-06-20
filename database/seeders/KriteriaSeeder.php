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
                'harga' => '<20 Ribu',
                'bobot' => '5',
                'keterangan' => 'Sangat Murah',
            ],
            [
                'harga' => '20 – 30 Ribu',
                'bobot' => '4',
                'keterangan' => 'Murah',
            ],
            [
                'harga' => '30 – 50 Ribu',
                'bobot' => '3',
                'keterangan' => 'Sedang',
            ],
            [
                'harga' => '50 – 85 Ribu',
                'bobot' => '2',
                'keterangan' => 'Mahal',
            ],
            [
                'harga' => '85 – 100 Ribu',
                'bobot' => '1',
                'keterangan' => 'Sangat Mahal',
            ]
        ];

        KriteriaHargaTiket::insert($harga);


        $jarak = [
            [
                'jarak' => '<2 Km',
                'bobot' => '5'
            ],
            [
                'jarak' => '3 – 4 Km',
                'bobot' => '4'
            ],
            [
                'jarak' => '4 – 5 Km',
                'bobot' => '3'
            ],
            [
                'jarak' => '5 – 6 Km',
                'bobot' => '2'
            ],
            [
                'jarak' => '6 – 8 Km',
                'bobot' => '1'
            ]
        ];

        KriteriaJarak::insert($jarak);
        

        $fasilitas = [
            [
                'fasilitas' => 'Fasilitas Transportasi',
                'indikator' => 'Grab, Gojek, Maxim',
                'bobot'     => '1',
                'keterangan'=> 'Kurang Lengkap'
            ],
            [
                'fasilitas' => 'Fasilitas Pelayanan',
                'indikator' => 'Tempat Ibadah, Klinik, Pusat Informasi, tempat parkir',
                'bobot'     => '2',
                'keterangan'=> 'Cukup Lengkap'
            ],
            [
                'fasilitas' => 'Fasilitas Penginapan',
                'indikator' => 'Hotel, Villa',
                'bobot'     => '3',
                'keterangan'=> 'Sedang'
            ],
            [
                'fasilitas' => 'Fasilitas Perbelanjaan',
                'indikator' => 'Toko Oleh-oleh, Minimarket',
                'bobot'     => '4',
                'keterangan'=> 'Lengkap'
            ],
            [
                'fasilitas' => 'Fasilitas Tempat Makan',
                'indikator' => 'Restoran, Warung, Food Court',
                'bobot'     => '5',
                'keterangan'=> 'Sangat Lengkap'
            ]
        ];

        KriteriaFasilitas::insert($fasilitas);


        $pelayanan = [
            [
                'pelayanan' => 'Ramah tamah',
                'bobot'     => '5'
            ],
            [
                'pelayanan' => 'Nyaman',
                'bobot'     => '4'
            ],
            [
                'pelayanan' => 'Cepat',
                'bobot'     => '3'
            ],
            [
                'pelayanan' => 'Cukup Ramah',
                'bobot'     => '2'
            ],
            [
                'pelayanan' => 'Kurang ramah',
                'bobot'     => '1'
            ]
        ];

        KriteriaPelayanan::insert($pelayanan);

        $suasana = [
            [
                'suasana' => 'Sangat ramai',
                'bobot'   => '5',
            ],
            [
                'suasana' => 'Ramai',
                'bobot'   => '4',
            ],
            [
                'suasana' => 'Cukup ramai',
                'bobot'   => '3',
            ],
            [
                'suasana' => 'Kurang ramai',
                'bobot'   => '2',
            ],
            [
                'suasana' => 'Sunyi',
                'bobot'   => '1',
            ]
        ];
        KriteriaSuasana::insert($suasana);
    }
}
