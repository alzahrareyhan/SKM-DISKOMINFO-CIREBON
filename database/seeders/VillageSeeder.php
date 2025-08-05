<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VillageSeeder extends Seeder
{
    public function run(): void
    {
        $villages = [
            'Moodulio',
            'Muara Bone',
            'Masiaga',
            'Taludaa',
            'Permata',
            'Inogaluma',
            'Molamahu',
            'Sogitia',
            'Cendana Putih',
            'Monano',
            'Tumbuh Mekar',
            'Waluhu',
            'Ilohuuwa',
            'Bilolantunga',
        ];

        foreach ($villages as $village) {
            Village::create([
                'village' => $village
            ]);
        }
    }
}
