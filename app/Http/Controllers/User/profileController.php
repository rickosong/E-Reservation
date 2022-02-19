<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class profileController extends Controller
{
    public function index(){
        return view('user.profile', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function viewEditProfile(){
        return view('user.editprofile',);
    }

    public function update(){

    }
}
