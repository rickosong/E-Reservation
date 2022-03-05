<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class AkunMemberController extends Controller
{
    public function index(){
        return view('akun-member', [
            'profiles' => Profile::all(),
        ]);
    }

    public function edit($id){
        $member = User::find($id);
        
        return view('edit-akun-member', [
            'member' => $member,
        ]);
    }
    public function update(Request $request, $id){

    }

    public function destroy($id){
        $member = User::find($id);
        $profiles = Profile::where('user_id', $id)->get();
        
        foreach ($profiles as $profile) {
            # code...
        }

        $profile->delete();
        $member->delete();

        return back()->with('successDeleteMember', 'Akun Member Berhasil Dihapus');
    }

}
