<?php

namespace App\Http\Controllers;

use App\Exports\ExportRecord;
use App\Models\Filter;
use App\Models\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function login_admin(){
        return view('admin');
    }

    public function login_admin_store(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            $request->session()->regenerate();
            return redirect()->route('admin.home');
        }

        $request->session()->put('authError', 'Invalid email or password!');
        return redirect()->back();
    }

    public function home_admin(){
        $records = Record::all();
        // dump($records[0]->start_time);

        return view('admin_home', ['records' => $records, 'start_date' => $records[0]->start_time, 'end_date' => Carbon::now()]);
    }

    public function records_date(Request $request){
        $request->validate([
            'start_date' => 'nullable',
            'end_date' => 'nullable',
        ]);

        // dump($request->start_date);

        if($request->start_date == NULL || $request->end_date == NULL){
            $records = Record::all();
        }
        else{
            $records = Record::whereBetween('start_time', [$request->start_date.' 00:00:00', $request->end_date.' 23:59:59'])->get();
        }

        // Filter::create([
        //     'start' => $request->start_date,
        //     'end' => $request->end_date
        // ]);

        // return redirect()->route('admin.home', ['records' => $records]);
        if($request->start_date && $request->end_date){
            
            return view('admin_home', ['records' => $records, 'start_date' => $request->start_date, 'end_date' => $request->end_date]);
        }
        else
            return view('admin_home', ['records' => $records, 'start_date' => $records[0]->start_time, 'end_date' => Carbon::now()]);
    }

    public function export_excel($start_date, $end_date){
        // dd($end_date);
        // dump($start_date);
        return Excel::download(new ExportRecord($start_date, $end_date), "records.xlsx");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
