<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ruangan;
use App\Models\Penyewaan;

class AdminHomeController extends Controller
{
    public function index(){
        // $users = User::all();

        // foreach ($users as $user) {
        //     $user = $loop->iteration;
        //     dd($user);
        // }

        return view('admin', [
            'users' => User::all(),
        ]);
    }
}
