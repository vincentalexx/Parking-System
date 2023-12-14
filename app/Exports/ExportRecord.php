<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportRecord implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $records = Record::all();

        return $records;
    }
}
