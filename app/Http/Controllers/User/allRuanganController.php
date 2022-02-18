<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allRuanganController extends Controller
{
    public function index(){
        return view('user.ruangan');
    }
}
