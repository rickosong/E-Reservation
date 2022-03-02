<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function storeLogin(Request $request){
        $credentials = $request->validate( [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if(auth()->user()->jenis_role_id == 1){
                return redirect()->intended('/adminpage');
            }
            else{
                return redirect()->intended('/homepage');
            }
           
        }

        return back()->with('loginError', 'gagal login');

        // dd('login berhasil');
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
