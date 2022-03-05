<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Jenis_Role;

class AkunPetugasController extends Controller
{
    public function index(){
        return view('akun-petugas', [
            'profiles' => Profile::all(),
        ]);
    }

    public function add(){
        return view('buat-akun-petugas', [
            'roles' => Jenis_Role::all(),
        ]);
    }

    public function store(Request $request){

    }

    public function edit($id){
        $profile = Profile::find($id);
        
        return view('edit-akun-member', [
            'profiles' => $profile,
            'roles' => Jenis_Role::all(),
        ]);
    }

    public function update(Request $request, $id){
        $profile = Profile::find($id);

        $profile->user->name = $request->name;
        $profile->user->phone_number = $request->nomor;
        $profile->user->jenis_role->jenis_role = $request->role;
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
        $user = User::find($id);
        $profiles = Profile::where('user_id', $id)->get();
        
        foreach ($profiles as $profile) {
            # code...
        }

        $profile->delete();
        $user->delete();

        return back()->with('successDeleteMember', 'Akun Member Berhasil Dihapus');
    }

}
