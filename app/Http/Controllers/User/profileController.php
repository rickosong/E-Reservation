<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
// use App\Models\User;

class profileController extends Controller
{
    public function index(){
        return view('user.profile', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function viewEditProfile(Profile $profile){
        return view('user.editprofile', [
            'profile' => $profile,

        ]);
    }

    public function edit(){

    }

    public function update(){

    }
}
