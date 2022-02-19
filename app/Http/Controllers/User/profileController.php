<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    public function index(){
        return view('user.profile');
    }

    public function viewEditProfile(){
        return view('user.editprofile', [
            // 'users' => auth()->user()
        ]);
    }

    public function update(){

    }
}
