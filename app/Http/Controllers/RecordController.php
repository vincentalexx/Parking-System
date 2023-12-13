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
        $startDateTime = Carbon::now('Asia/Jakarta');
        
        Record::create([
            'user_id' => $userId,
            'nopol' => $request->nopolMasuk,
            'start_time' => $startDateTime,
        ]);

        $record = Record::orderBy('start_time', 'DESC')->first();

        return redirect()->route('user.home')->with('message_masuk', 'success')->with('record_masuk', $record->id)->with('nopol_masuk', $record->nopol)->with('time_masuk', $record->start_time);
    }

    public function keluar(Request $request){
        $request->validate([
            'nopolKeluar' => 'required',
        ]);

        $record = Record::where('end_time', NULL)->where('nopol', $request->nopolKeluar)->first();


        if($record == NULL){
            return redirect()->back()->with('error', 'Nomor polisi tidak parkir');
        }

        $userId = Auth::user()->id;
        $endDateTime = Carbon::now('Asia/Jakarta');
        $startDateTime = $record->start_time;

        $time = $startDateTime->diffInMinutes($endDateTime);
        // $duration = $time->h;
        if($time % 60 == 0){
            $duration = ($time/60);
        } else {
            $duration = (((int) ($time/60)) + 1);
        }
        $price = $duration * 3000;
        
        $record->end_time = $endDateTime;
        $record->price = $price;

        $record->update();

        return redirect()->route('user.home')->with('message', 'success')->with('record', $record->id)->with('nopol', $record->nopol)->with('start_time', $record->start_time)->with('end_time', $record->end_time)->with('duration', $duration)->with('price', $record->price);
    }
}
