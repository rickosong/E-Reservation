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
        $member = Profile::find($id);
        
        return view('edit-akun-member', [
            'member' => $member,
        ]);
    }
    public function update(Request $request, $id){
        $profile = Profile::find($id);

        $profile->user->name = $request->name;
        $profile->user->phone_number = $request->nomor;
        $profile->user->email = $request->email;
        $profile->birthday = $request->birthday;
        $profile->addres = $request->addres;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('img'), $imageName);
            
            $profile->image = $imageName;
        } 
        else {
            $profile->image = $profile->image;
        }

        $profile->update();
        $request->session()->flash('successUpdateMember', 'Update Berhasil, Member sudah terupdate');
        return redirect('/akunmember');
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
