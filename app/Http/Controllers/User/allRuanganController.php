<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class allRuanganController extends Controller
{
    public function index(){
        return view('user.ruangan', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
