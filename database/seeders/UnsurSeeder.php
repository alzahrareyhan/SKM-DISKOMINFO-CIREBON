<?php

namespace Database\Seeders;

use App\Models\Unsur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UnsurSeeder extends Seeder
{
    public function run(): void
    {
        $unsurs = [
            'Persyaratan',
            'Prosedur',
            'Waktu Pelayanan',
            'Biaya Tarif',
            'Produk Layanan',
            'Kompetensi Pelaksana',
            'Perilaku Pelaksana',
            'Sarana dan Prasarana',
            'Penanganan Pengaduan',
        ];

        foreach ($unsurs as $unsur) {
            Unsur::create([
                'unsur' => $unsur
            ]);
        }
    }
}
