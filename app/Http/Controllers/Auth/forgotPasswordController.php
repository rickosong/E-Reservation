<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class forgotPasswordController extends Controller
{
    public function index(){
        return view('auth.searchemail');
    }

    public function editPassword(Request $request){
        $user = User::whereEmail($request->email)->first();

        // dd($user);

        if ($user == null) {
            return redirect()->back()->with(['noUser' => 'User tidak ada / belum terdatar, silahkan daftar dulu']);
        }

        return view('auth.forgotpassword', [
            'user' => $user
        ]);


    }

    public function updatePass(Request $request){
        $user = User::whereEmail($request->email)->first();

        dd($user);

        $password = $request->password;
        $confirmPass = $request->confrimpass;

        if ($confirmPass !== $password) {
            return back()->with('error', 'Gagal Registrasi. Pastikan semua data dan konfirmasi Passwordnya sama dengan Password yang dimasukkan.');
            return false;
        }

        // $user
    }
}
