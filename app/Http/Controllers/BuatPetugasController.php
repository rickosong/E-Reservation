<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatPetugasController extends Controller
{
    public function index(){
        return view('buat-akun-petugas');
    }
}
