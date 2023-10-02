<?php

namespace App\Exports;

use App\Models\Karya;
use Maatwebsite\Excel\Concerns\FromCollection;

class KaryaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Karya::all();
    }
}

