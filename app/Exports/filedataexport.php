<?php

namespace App\Exports;

use App\Models\FileData;
use Maatwebsite\Excel\Concerns\FromCollection;

class filedataexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FileData::all();
    }

    /**
     */
   
}
