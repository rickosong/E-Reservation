<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Ruangan;
use App\Models\Status_pemesanan;
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

    public function store(Request $request, $id){
        date_default_timezone_set("Asia/Makassar");
        $date = date('Y/m/d H/i');

        $str        = "";
        $characters = '123456789';
        $max        = strlen($characters) - 1;
        for ($i = 0; $i < 8; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }

        $ruangan = Ruangan::find($id);

        $penyewaan = New Penyewaan;

        // dd($request);

        $penyewaan->ruangan_id = $ruangan->id;
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

        return view('reservation.buktipemesanan', [
            'penyewaans' => Penyewaan::latest()->where('user_id', auth()->user()->id)->get()->take(1),
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);

    }

    public function edit($id){
        $penyewaan = Penyewaan::find($id);

        return view('edit-pembayaran', [
            'pesanan' => $penyewaan,
            'status' => Status_pemesanan::all(),
            'photo' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);

    }

    public function update(Request $request, $id){
        $penyewaan = Penyewaan::find($id);
        
        $penyewaan->status_id = $request->status;

        $penyewaan->update();
        return redirect('/pesanan');
        return session()->flash('update', 'update pesanan berhasil');
        
    }

    public function destroy($id){
        $penyewaan = Penyewaan::find($id);

        $penyewaan->delete();

        return back()->with('delete', 'delete pesanan berhasil');
    }

    public function invoice($id){
        $pesanan = Penyewaan::find($id);

        return view('reservation.invoice', [
            'penyewaan' => $pesanan,
            'profiles' => Profile::where('user_id', auth()->user()->id)->get()
        ]);      
    }

}
