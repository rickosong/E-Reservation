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

    public function updateProfile(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        $profiles = Profile::where('user_id', $id)->get();

        $user->name = $request->name;
        $user->phone_number = $request->nomor;
        $user->email = $request->email;
        
        foreach ($profiles as $profile){
        $profile->birthday = $request->birthday;
        $profile->addres = $request->addres;
        }
        // $profile->image = '';
        // $profile->user_id = $id;

        // dd($user, $profile);

        $user->update();
        $profile->update();
        $request->session()->flash('successUpdateProfile', 'Update Berhasil, profil sudah terupdate');
        return redirect('/homepage/profile');
    }
}
