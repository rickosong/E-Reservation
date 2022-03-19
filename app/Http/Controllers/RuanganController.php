<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;
use App\Models\Jenis_Ruangan;
use App\Models\Profile;

class RuanganController extends Controller
{
    public function index(){
        return view('ruangan', [
            'ruangans' => Ruangan::all(),
            'photo' => Profile::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function add(){
        return view('buat-ruangan', [
            'jenisruangan' => Jenis_Ruangan::all(),
            'photo' => Profile::where('user_id', auth()->user()->id)->get()

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

        $request->session()->flash('successCreateRuangan', 'Ruangan Berhasil dibuat');
        return redirect('/ruangan');
    }

    public function show($id){
        $ruangan = Ruangan::find($id);

        return view('reservation.post', [
            'ruangan' => $ruangan,
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);

    }

    public function destroy($id){
        $hapusruangan = Ruangan::find($id);
        $hapusruangan->delete();
        
        return back()->with('successDeleteRuangan', 'Ruangan Berhasil Dihapus');
    }

    public function edit($id){
        $ruangan = Ruangan::find($id);

        return view('edit-ruangan', [
            'ruangan' => $ruangan,
            'jenisruangan' => Jenis_Ruangan::all(),
            'photo' => Profile::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function update(Request $request, $id){
        $ruangan = Ruangan::find($id);

        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->jenis_ruangan_id = $request->jenisruang;
        $ruangan->harga = $request->harga;
        $ruangan->fasilitas = $request->fasilitas;
        $ruangan->deskripsi = $request->deskripsi;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('img'), $imageName);
            
            $ruangan->image = $imageName;
        } else {
            $ruangan->image = $ruangan->image;
        }

        $ruangan->update();
        $request->session()->flash('successUpdateRuangan', 'Update Berhasil, Ruangan sudah terupdate');
        return redirect('/ruangan');
    }





    public function indexHome(){
        return view('user.ruangan', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
