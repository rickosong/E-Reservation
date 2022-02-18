<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesananMemberController extends Controller
{
    public function index(){
        return view('user.pesananmember');
    }
}
