<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Ruangan;
use App\Models\Status_pemesanan;
use Carbon\Carbon;
// use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
// require 'vendor/autoload.php';
// require_once 'dompdf/autoload.inc.php';


set_time_limit(300);

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

        return view('reservation.buktipemesanan', [
            'penyewaans' => Penyewaan::latest()->where('user_id', auth()->user()->id)->get()->take(1),
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);
        
        return session()->flash('belumbayar', 'anda belum membayar pesanan ini, segera bayar sebelum' . $request->jamawal);

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

        return view('reservation.bukti', [
            'penyewaan' => $pesanan,
            'profiles' => Profile::where('user_id', auth()->user()->id)->get(),
        ]);

        if ($pesanan->status_id == 1) {
            return session()->flash('suksesbayar', 'anda telah membayar pesanan ini');
       }
       elseif ($pesanan->status_id == 3) {
           return session()->flash('belumbayar', 'anda belum membayar pesanan ini, segera bayar sebelum' . $pesanan->checkin);
       }
       else {
           return session()->flash('gagalbayar', 'anda gagal memesan ruangan pesanan ini karena telat membayar, silahkan pesan lagi');
       }
    }

    public function invoicepdf($id){
        $penyewaan = Penyewaan::find($id);
        // $options = new Options();
        // $options->set('isRemoteEnabled',true);      
        $dompdf = new Dompdf(array('enable_remote' => true));
        // $dompdf->loadHtml('hello world');

        $invoice = view('reservation.invoice', compact('penyewaan'));

        $dompdf->loadHtml($invoice);
        // $dompdf->loadHtmlFile()

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();
        $dompdf->stream('invoice.pdf');
    }

}
