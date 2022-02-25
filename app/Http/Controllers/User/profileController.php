<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;

class profileController extends Controller
{
    public function index(){
        return view('user.profile', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function editProfile(){
        $id = auth()->user()->id;
        $user = User::find($id);
        $profile = Profile::where('user_id', $id)->get();

        // dd($profile);

        return view('user.editprofile', [
            'user' => $user,
            'profiles' => $profile,
        ]);
    }

    public function edit(){

    }

    public function update(){

    }
}
