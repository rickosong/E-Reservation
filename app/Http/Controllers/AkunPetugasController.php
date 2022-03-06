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
        $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255',
            'email' => 'required|email:dns|min:3|max:255|unique:users'
        ]);

        $user = new User();
        // encrypted password
        $password = bcrypt($request->password);

        $user->username = $request->username;
        $user->password = $password;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_role_id = 2;
        $user->phone_number = $request->nomor;

        $user->save();

        Profile::create(
            [
                'user_id' => $user->id,
                'birthday' => 'silahkan isi tanggal lahir anda',
                'addres' => 'silahkan isi alamat anda',
                'image' => 'user.svg',
            ]
        );

        $request->session()->flash('successCreateUser', 'Registrasi Berhasil, Silahkan Login');

        return redirect('/login');
    }

    public function edit($id){
        $profile = Profile::find($id);
        
        return view('edit-akun-member', [
            'profiles' => $profile,
            'roles' => Jenis_Role::all(),
        ]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $profiles = Profile::where('user_id', $id)->get();

        $user->name = $request->name;
        $user->phone_number = $request->nomor;
        $user->jenis_role_id = $request->role;
        $user->email = $request->email;
        
        foreach ($profiles as $profile){
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
        }

        $user->update();
        $profile->update();
        $request->session()->flash('successUpdateUser', 'Update Berhasil, User sudah terupdate');
        return redirect('/akunpetugas');
    }

    public function destroy($id){
        $user = User::find($id);
        $profiles = Profile::where('user_id', $id)->get();
        
        foreach ($profiles as $profile) {
            # code...
        }

        $profile->delete();
        $user->delete();

        return back()->with('successDeleteUser', 'Akun User Berhasil Dihapus');
    }

}
