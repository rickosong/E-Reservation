<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function regisMember(Request $request){
        $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255',
            'email' => 'required|email:dns|min:3|max:255|unique:users'
        ]);

        $member = new User();

        // cek password
        $password = $request->password;
        $confirmPass = $request->confirmPass;

        if ($confirmPass !== $password) {
            return back()->with('regisError', 'Gagal Registrasi. Pastikan semua data dan konfirmasi Passwordnya sama dengan Password yang dimasukkan.');
            return false;
        }
        // else{
        //     dd('regis berhasil');
        // }

        // encrypted password
        $password = bcrypt($request->password);

        $member->username = $request->username;
        $member->password = $password;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->jenis_role_id = 2;
        $member->phone_number = $request->nomor;

        $member->save();

        $request->session()->flash('success', 'Registrasi Berhasil, Silahkan Login');

        return redirect('/login');
    }
}
