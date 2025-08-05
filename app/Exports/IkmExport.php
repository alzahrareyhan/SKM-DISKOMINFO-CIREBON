<?php

namespace App\Exports;

use App\Models\Answer;
use Maatwebsite\Excel\Concerns\FromCollection;

class IkmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Answer::all();
    }
}
