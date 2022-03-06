<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ruangan;

class LandingController extends Controller
{
    public function index(){
        return view('user.landing', [
            'ruangans' => Ruangan::all()->take(8),
        ]);
    }
}
