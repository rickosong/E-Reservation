<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index(){
        return view('ruangan');
    }

    public function store(Request $request)
    {
       $ruangan = new Ruangan();
       $ruangan->nama_ruangan = $request->nama_ruangan;
    //    $ruangan->jenis_ruangan_id = ;
       $ruangan->total_jumlah_kapasitas = $request->total_jumlah_kapasitas;
       $ruangan->fasilitas = $request->fasilitas;
       $ruangan->keterangan_fasilitas = $request->keterangan_fasilitas;
 
 
       $ruangan->save();
       return redirect()->route('table_ruangan');
    }
}
