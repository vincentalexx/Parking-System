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

    protected $start;
    protected $end;

    public function __construct($date)
    {
        $this->start = $date->start;
        $this->end = $date->end;
    }

    public function view(): View
    {
        if($this->start == NULL || $this->end == NULL){
            $records = Record::all();
            return view('records', ['records' => $records]);
        }
        $records = Record::whereBetween('start_time', [$this->start.' 00:00:00', $this->end.' 23:59:59'])->get();
        return view('records', ['records' => $records]);
    }
}
