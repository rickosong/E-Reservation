<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ruangan;
use App\Models\Penyewaan;

class AdminHomeController extends Controller
{
    public function index(){
        $users = User::all();

        $users = $users->count();

        return view('admin', compact('users'));
    }
}
