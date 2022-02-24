<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunPetugasController extends Controller
{
    public function index(){
        return view('akun-petugas');
    }
}
