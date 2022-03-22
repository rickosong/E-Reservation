<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/buktipemesanan.css') }}" />
		<title>E-Reservation | Invoice</title>
	</head>
	<body>

        @include('partials.navbar')

        <!-- content -->

<div class="container">
    <div class="card">
       @foreach ($penyewaans as $penyewaan)
       <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-7 col-8">
            <h5><b>Bukti Pemesanan</b></h5>
            <p>
                Nomor  : <span class="text-orange">Nomor Pemesan</span>
                <br>
                Tanggal : <span class="text-orange">Tanggal Pemesanan</span>
            </p>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-4">
            <img src="{{ asset('img/smkn2.png') }}" alt="" class="img-invoice">
        </div>
    </div>
    <br><br>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <h5 class="bg-lightgrey"><b>Detail Pembayaran</b></h5>
        <p>Pembelian Melalui : <span class="text-orange">COD</span></p>
    </div>
    <br><br>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h5 class="bg-lightgrey"><b>Data Pemesan</b></h5>
            <p>
                Nama   : <span class="text-orange">{{ $penyewaan->user->name }}</span>
                <br>
                Email    : <span class="text-orange">{{ $penyewaan->user->email }}</span>
                <br>
                No. Telp : <span class="text-orange">{{ $penyewaan->user->phone_number }}</span>
            </p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <h5 class="bg-lightgrey"><b>Detail Perusahaan</b></h5>
            <p>
                Nama  : SMKN 2 Banjarmasin
                <br>
                Alamat : Jalan Brigjend Hasan Basri No.6, Sungai Miai, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70124
            </p>
        </div>
    </div>
    
    <br><br>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h5 class="bg-lightgrey"><b>Data Penyewaan</b></h5>
            <p>
                Nama Ruangan               : <span class="text-orange">{{ $penyewaan->ruangan->nama_ruangan }}</span>
                <br>
                Tanggal/Waktu Check-in  : <span class="text-orange">{{ $penyewaan->checkin }}</span>
                <br>
                Tanggal/Waktu Check-out : <span class="text-orange">{{ $penyewaan->checkout }}</span>
            </p>
        </div>
        <br><br><br><br>

        <div class="col-lg-3 col-md-3 col-sm-5 offset-lg-9 offset-sm-7">
            <small class="text-black">*Syarat dan Ketentuan Berlaku</small>
        </div>

        <div class="col-lg-1 col-md-1 col-sm-5 offset-lg-10 offset-sm-7">
            <img src="{{ asset('img/smkn2.png') }}" alt="" class="img-stempel">
        </div>
    </div>
       @endforeach
    </div>
    <br><br><br><br>
</div>

        <!-- content end -->

        @include('partials.linkJS')

</body>
</html>