<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Jenis_Ruangan;

class BuatRuanganController extends Controller
{
    public function index(){
        return view('buat-ruangan', [
            'jenisruangan' => Jenis_Ruangan::all()
        ]);

    }

    public function store(Request $request){
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('img'), $imageName);

        // dd($request->jenisruang);

        $ruangan = new Ruangan();
        $ruangan->nama_ruangan = $request->namaruangan;
        $ruangan->jenis_ruangan_id = $request->jenisruang;
        $ruangan->harga = $request->harga;
        $ruangan->fasilitas = $request->fasilitas;
        $ruangan->image = $imageName;
        $ruangan->deskripsi = $request->deskripsi;
        $ruangan->save();

        // $request->session()->flash('successCreateRuangan', 'Ruangan Berhasil dibuat');
        return redirect('/ruangan');
    }


}
