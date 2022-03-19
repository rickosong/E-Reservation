<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Ruangan;

class PesananController extends Controller
{
    public function index(){
        return view('pesanan', [
            "title" => "Dashboard Admin | Pesanan",
            'photo' => Profile::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create($id){
        $ruangan = Ruangan::find($id);

        return view('reservation.formpemesanan', [
            'ruangan' => $ruangan,
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);

    }

    public function store(Request $request){
        $ruangan = Ruangan::find($id);
    }

}
