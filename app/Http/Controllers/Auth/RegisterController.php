<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function regisMember(Request $request){
        $request->validate([
            'password' => 'required|min:3|max:255'
        ]);

        $member = new User();

        // cek password
        $password = $request->password;
        $confirmPass = $request->confirmPass;

        if ($confirmPass !== $password) {
            return back()->with('regisError', 'gagal registrasi');
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

        return redirect('/login');
    }
}
