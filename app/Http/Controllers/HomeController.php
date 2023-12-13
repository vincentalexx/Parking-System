<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // $userId = Auth::user()->id;
        // $exists = Record::where('user_id', $userId)->where('end_time', NULL)->orderBy('start_time', 'DESC')->first();

        return view('home');
    }
}
