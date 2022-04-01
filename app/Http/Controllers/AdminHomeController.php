<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ruangan;
use App\Models\Penyewaan;
use App\Models\Profile;

class AdminHomeController extends Controller
{
    public function index(){
        $users = User::all();
        $pesanandibayar = Penyewaan::where('status_id', 1)->get();
        $pesanan = Penyewaan::all();

        $users = $users->count();
        $pesanandibayar = $pesanandibayar->count();
        $pesanan = $pesanan->count();

        return view('admin', compact('users', 'pesanandibayar', 'pesanan'), [
            'photo' => Profile::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
