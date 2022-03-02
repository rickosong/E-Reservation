<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunMemberController extends Controller
{
    public function index(){
        return view('akun-member');
    }
}
