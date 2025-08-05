<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Kuesioner;
use App\Models\Responden;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KuesionerSeeder extends Seeder
{
    public function run(): void
    {
        // Kuesioner::factory()->count(7)->make();

        // $totalRespondens = 67;
        // $kuesioners = Kuesioner::all();
        // $respondens = Responden::factory()->count($totalRespondens)->make();
        
        // foreach ($respondens as $responden) {
        //     $responden->save();
        //     foreach ($kuesioners as $kuesioner) {
        //         $answer = Answer::factory()->make([
        //             'kuesioner_id' => $kuesioner->id,
        //             'responden_id' => $responden->id
        //         ]);
        //         $answer->save();
        //     }
        // }
    }
}
