<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi;
use Mail;
use Alert;

class RegistrasiController extends Controller
{
    public function index()
    {

    }

    public function store(Request $r)
    {
        $s = new Registrasi;
        $s->nama     = $r->name;
        $s->alamat   = $r->alamat;
        $s->jkel     = $r->jkel;
        $s->status   = $r->status;
        $s->instansi = $r->instansi;
        $s->jabatan  = $r->jabatan;
        $s->telp     = $r->telp;
        $s->email    = $r->email;
        $s->save();
        $id_peserta = $s->id;

        Mail::send('email', ['nama' => $r->name, 'nomor' => $id_peserta], 

        function ($message) use ($r){
        $message->subject('Tiket Seminar Internasional');
        $message->from('diskominfotik.bjm@gmail.com', 'Diskominfotik Banjarmasin');
        $message->to($r->email);
        });

        Alert::success('Message', 'Ticket Has Send Your Email')->persistent("Close");
        return back();
    }

    public function delete($id)
    {
        $d = Registrasi::find($id)->delete();
        Alert::success('Message', 'Berhasil Di Hapus');
        return back();
    }
}
