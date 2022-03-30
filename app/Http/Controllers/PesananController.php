<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Ruangan;
use Carbon\Carbon;

class PesananController extends Controller
{
    public function index(){

        // $date = Carbon::now()
        date_default_timezone_set("Asia/Makassar");
        $date = date('Y/m/d H/i');
        Penyewaan::where('checkin', '<=', date('Y-m-d H:i'))->where('status_id', 3)->update(['status_id' => 2]);
        // dd($date);

        return view('pesanan', [
            "title" => "Dashboard Admin | Pesanan",
            'photo' => Profile::where('user_id', auth()->user()->id)->get(),
            'pesanans' => Penyewaan::all()
        ]);
    }

    public function create($id){
        $ruangan = Ruangan::find($id);

        return view('reservation.formpemesanan', [
            'ruangan' => $ruangan,
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);

    }

    public function store(Request $request){
        date_default_timezone_set("Asia/Makassar");
        $date = date('Y/m/d H/i');

        $str        = "";
        $characters = '123456789';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < 8; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }

        $penyewaan = New Penyewaan;

        // dd($request->jamawal);

        $penyewaan->ruangan_id = $request->idruangan;
        $penyewaan->user_id = auth()->user()->id;
        $penyewaan->nomorpemesan = auth()->user()->id . $str . date('d');
        $penyewaan->tanggalpemesanan = $date;
        $penyewaan->checkin = $request->jamawal;
        $penyewaan->checkout = $request->jamakhir;
        $penyewaan->status_id = 3;

        $penyewaan->save();
        
        // echo "<script>alert('Pemesanan Berhasil dilakukan');
        //     Document.location.href = 'home.blade.php';
        // </script>";

        return redirect('/homepage/pesan/invoice');

    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }

    public function invoice(){
        return view('reservation.buktipemesanan', [
            'penyewaans' => Penyewaan::all(),
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);
    }

}
