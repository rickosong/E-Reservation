<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/ruangan.css') }}" />
		<title>Semua ruangan</title>
	</head>
	<body>

		@include('partials.navbar')

        <!-- card and content -->
		<div class="container all">
            <div class="row justify-content-end">
				<div class="btn-group col-lg-5 col-md-5 col-12" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary">All</button>
					<button type="button" class="btn btn-secondary">Ruangan Besar</button>
					<button type="button" class="btn btn-secondary">Ruangan Kecil</button>
			</div>
              </div>
              
			<div class="row">
				@foreach ($ruangans as $ruangan)
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="{{ asset('img/') }}/{{ $ruangan->image }}" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">{{ $ruangan->nama_ruangan }}</h5>
							<h6 class="price">{{ $ruangan->harga }}</h4>
							<a href="{{ route('post', $ruangan->id) }}" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>		
		</div>
		<!-- card and content end-->

		@include('partials.footer')

		@include('partials.linkJS')
	</body>
</html>