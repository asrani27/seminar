<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi;
use PDF;

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
    public function index()
    {
        $dat = Registrasi::all();
        $data = $dat->sortByDesc('id');
        return view('home',compact('data'));
    }

    public function pdf()
    {
        $data = Registrasi::all();
        $pdf = PDF::loadView('pdf', compact('data'));
        return $pdf->download('daftarpeserta.pdf');
    }
}
