<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //Controller untuk tabel Pegawai
    public function index()
    {
        //mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->paginate(5);

        //mengirim data pegawai ke view index
        return view('pegawai',['pegawai' => $pegawai]);
    }

}
