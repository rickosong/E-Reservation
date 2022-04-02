<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/buktipemesanan.css') }}">
    <style>
            .text-orange {
                color: #ff5722;
            }
            .img-stempel{
                height: 120px;
                width: 120px;
            }
        </style>
    <title>E-Reservation | Invoice</title>
</head>
<body>
    
    <div class="container">
        @if (session()->has('suksesbayar'))
        <div class="alert alert-success" role="alert-dissmissable">
            {{ session('suksesbayar') }}
          </div>
        @endif
        @if (session()->has('belumbayar'))
        <div class="alert alert-warning" role="alert-dissmissable">
            {{ session('belumbayar') }}
          </div>
        @endif
        @if (session()->has('gagalbayar'))
        <div class="alert alert-danger" role="alert-dissmissable">
            {{ session('gagalbayar') }}
          </div>
        @endif
        <div class="card">
           <div class="row">
            <div style="display: inline-block; width: 70%;">
                <h5><b>Bukti Pemesanan</b></h5>
                <p>
                    Nomor  : <span class="text-orange">{{ $penyewaan->nomorpemesan }}</span>
                    <br>
                    Tanggal : <span class="text-orange">{{ $penyewaan->tanggalpemesanan }}</span>
                </p>
            </div>
                {{-- <img style="display: inline-block; width: 30%;" src="{{ public_path('img/smkn2.png') }}" alt="" class="img-invoice"> --}}
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
                {{-- <img src = "{{ asset('img/smkn2.png') }}" alt="" class="img-stempel" /> --}}
                {{-- <img src="./img/smkn2.png" alt="" srcset="" class="img-stempel" /> --}}
                {{-- <img src="{{'data:image/png;base64,' . base64_encode(file_get_contents(@$image))}}" alt="image" > --}}
                <img src="{{ public_path('img/smkn2.jpg') }}" class="img-stempel"  />
            </div>
        </div>
        </div>
        <br><br><br><br>
    </div>

    @include('partials.linkJS')
</body>
</html>