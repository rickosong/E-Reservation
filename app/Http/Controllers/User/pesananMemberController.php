<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Penyewaan;

class pesananMemberController extends Controller
{
    public function index(){
        Penyewaan::where('checkin', '<=', date('Y-m-d H:i'))->where('status_id', 3)->update(['status_id' => 2]);
        
        return view('user.pesananmember', [
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
            'allpesanan' => Penyewaan::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
