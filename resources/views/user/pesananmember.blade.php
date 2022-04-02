<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Pesananamu</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/pesananmember.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		@include('partials.navbar')

		<!-- content -->
        <div class="container">
            <h1 class="text-center">Ruangan Yang Dipesan</h1>
            <br><br>
            @forelse ($allpesanan as $pesanan)
            <div class="card">
                <!-- <h5 class="card-header">Featured</h5> -->
                <div class="card-body">
                    <div class="row">
                        <img class="col-lg-2 img-thumbnail" src="{{ asset('img/') }}/{{ $pesanan->ruangan->image }}" alt="">
                        <div class="col-lg-10">
                            <h5 class="card-title">{{ $pesanan->ruangan->nama_ruangan }}</h5>
                            @if ($pesanan->status_id == 1)
                            <small><strong class="text-success">Pesanan Berhasil!</strong></small>
                            @elseif($pesanan->status_id == 2)
                            <small><strong class="text-danger">Pesanan Gagal</strong></small>
                            @else
                            <small><strong class="text-warning">Menunggu Pembayaran</strong></small>
                            @endif
                            <p class="card-text">{{ $pesanan->ruangan->deskripsi }}</p>
                            <a href="{{ route('invoice', $pesanan->id) }}" class="btn btn-orange"><span><i class="fa fa-commenting-o" aria-hidden="true"></i> </span> Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @empty
                <h3 class="text-center">Anda Belum Memesan Ruangan Apapun</h3>
            @endforelse
            <br><br>
        </div>
        <br><br><br><br>
        <!-- content end -->

        @include('partials.linkJS')
		@include('partials.footer')

	</body>
</html>
