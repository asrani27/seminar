<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi;
use PDF;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function dataReg()
    {
        $dat = DB::select('select   max(id) as id,
                                    max(nama) as nama,
                                    max(alamat) as alamat,
                                    max(jkel) as jkel,
                                    max(status) as status,
                                    max(instansi) as instansi,
                                    max(jabatan) as jabatan,
                                    max(telp) as telp,
                                    max(email) as email 
                                    from reg GROUP BY email');
                                    $data = collect($dat)->sortBy('nama');
        return $data;
    }
    public function index()
    {
        $data = $this->dataReg();
        return view('home',compact('data'));
    }

    public function pdf()
    {
        $data = $this->dataReg();
        $pdf = PDF::loadView('pdf', compact('data'));
        return $pdf->download('daftarpeserta.pdf');
    }
}
