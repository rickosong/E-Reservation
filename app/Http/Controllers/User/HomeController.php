<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Ruangan;
use App\Models\Penyewaan;

class HomeController extends Controller
{
    public function index(){
        date_default_timezone_set("Asia/Makassar");
        Penyewaan::where('checkin', '<=', date('Y-m-d H:i'))->where('status_id', 3)->update(['status_id' => 2]);

        return view('user.home', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
            'ruangans' => Ruangan::all()->take(8),
        ]);
    }

    public function aboutPage(){
        return view('user.aboutpage', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    // public function testViewAdmin(){
    //     return view('user.testAdminPage');
    // }
}
