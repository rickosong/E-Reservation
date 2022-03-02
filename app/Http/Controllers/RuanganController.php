<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Jenis_Ruangan;

class RuanganController extends Controller
{
    public function index(){
        $jenisruangans = Ruangan::all();

        foreach ($jenisruangans as $jenisruang) {
            $namajenisRuang = $jenisruang->jenis_ruangan_id;
        }

        return view('ruangan', [
            'ruangans' => Ruangan::all(),
            'jenisruang' => Jenis_Ruangan::where('id', $namajenisRuang )->get()
        ]);
        
        // $ruangans = 'ruangans';
        // dd($ruangans);
    }
}
