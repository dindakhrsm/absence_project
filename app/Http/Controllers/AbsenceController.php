<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\absence;
use App\Http\Requests;
//use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
class AbsenceController extends Controller
{
    public function index()
    {
        $absence=absence::all();
        return view('absence.index')->with('absence',$absence);

    }
    public function tambah()
    {
        return view('absence.tambah');
    }

    public function simpan()
    {
        /*$input=Request::all();
        $input['tgl'] = Carbon::now();
        absence::create($input);
        return redirect ('absence');*/
        absence::create(Request::all());
        return redirect ('absence');



    }
}
