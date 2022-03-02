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

    public function updatePass(Request $request, $id){
        $user = $id;
        $user = User::find($id);
        

        $password = $request->password;
        $confirmPass = $request->confirmpass;

        if ($confirmPass !== $password) {
            return back()->with('error', 'Gagal mengganti passwrod. Pastikan password sama dengan konfirmasi password');
            return false;
        }

        $password = bcrypt($request->password);

        $user->password = $password;

        $user->update();
        $request->session()->flash('successUpdatePass', 'Password Berhasil Dirubah, silahkan login');
        return redirect('/login');
    }
}
