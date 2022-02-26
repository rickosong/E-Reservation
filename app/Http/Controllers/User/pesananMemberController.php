<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class pesananMemberController extends Controller
{
    public function index(){
        return view('user.pesananmember', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
