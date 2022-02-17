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
        $member = new User();
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
