<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class AkunMemberController extends Controller
{
    public function index(){
        $members = User::all();
        // dd($member);
        // foreach ($members as $member) {
        //     //  dd($member);
        // }

        // $users = User::all();
        // $member = $users->find($users);
        // dd($member);

        return view('akun-member', [
            'members' => User::all(),
        ]);
    }
}
