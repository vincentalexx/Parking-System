<?php

namespace App\Http\Controllers;

use App\Exports\ExportRecord;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function login_admin(){
        return view('admin');
    }

    // public function login_admin_store(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required',
    //     ]);

    //     if(Auth::attempt($request->only('email', 'password'))){
    //         $request->session()->regenerate();
    //         return redirect()->route('user.home');
    //     }

    //     $request->session()->put('authError', 'Invalid email or password!');
    //     return redirect()->back();
    // }

    public function home_admin(){
        $records = Record::all();

        return view('admin_home', ['records' => $records]);
    }

    public function records_date(Request $request){
        $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $records = Record::whereBetween('start_time', [$request->start_date, $request->end_date])->get();

        return view('admin_home', ['records' => $records]);
    }

    public function export_excel(){
        return Excel::download(new ExportRecord, "records.xlsx");
    }
}
