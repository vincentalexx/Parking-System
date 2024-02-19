<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportRecord implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('records', ['records' => Record::all()]);
    }
}
