<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function masuk(Request $request){
        $request->validate([
            'nopolMasuk' => 'required',
        ]);
        $exists = Record::where('end_time', NULL)->where('nopol', $request->nopolMasuk)->get();
        
        // dd(count($exists), $exists->toArray());
        if(count($exists) != 0){
            return redirect()->back()->with('error', 'Nomor polisi sudah parkir');
        }
        $userId = Auth::user()->id;
        $startDateTime = Carbon::now();
        
        
        Record::create([
            'user_id' => $userId,
            'nopol' => $request->nopolMasuk,
            'start_time' => $startDateTime,
        ]);

        $record = Record::orderBy('start_time', 'DESC')->first();

        return redirect()->route('user.home')->with('message', 'success')->with('record', $record->id);
    }
}
