<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/post.css') }}" />
		<title>Semua ruangan</title>
	</head>
	<body>

		@include('partials.navbar')

        <!-- post page start -->

        <div class="container-fluid">
            <div class="row">
                <div class="gambar col-lg-8">
                    <img src="{{ asset('img/') }}/{{ $ruangan->image }}" class="col-lg-12" alt="">
                </div>
    
                <div class="card justify-content-start fasilitas col-lg-3 mx-auto">
                    <h1 class="text-center">Fasilitas</h1>
                    <ul>
                        <li>{{ $ruangan->fasilitas }}</li>
                    </ul>
                </div>
            </div>
            <br>

            <div class="col-lg-12">
                <div class="card harga">
                    <div class="row">
						<h1 class="text-start col-lg-6 col-md-6 col-sm-6">RP. {{ $ruangan->harga }}/Jam</h1>
                    <a class="btn btn-orange offset-lg-3 col-lg-2 col-md-2 col-2 button" href="{{ route('pesan', $ruangan->id) }}">Pesan Sekarang</a>
					</div>
                </div>
            </div>
			<br>

			<div class="row">
                <div class="deskripsi col-lg-8">
                    <h1>{{ $ruangan->nama_ruangan }}</h1>
					<br><br>
					{{ $ruangan->deskripsi }}
                </div>
    
                <div class="card justify-content-start jenis col-lg-3 mx-auto">
                    <h1 class="text-center">Jenis Ruangan</h1>
                    <ul>
                        <li>{{ $ruangan->jenis_ruangan->jenis_ruangan }}</li>
                    </ul>
                </div>
            </div>
        </div>
    

        <!-- post page end -->

		@include('partials.linkJS')
    
    </body>
</html>