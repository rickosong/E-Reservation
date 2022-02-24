<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
		<title>Halaman Home</title>
	</head>
	<body>
		
		@include('partials.navbar')

		<!-- carousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="../img/imgcarousel.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1 class="row justify-content-start">Selamat Datang di</h1>
					<h1 class="row justify-content-start">E-Room SMKN 2</h1>
					<h1 class="row justify-content-start">Banjarmasin</h1>
				</div>
			  </div>
			  <div class="carousel-item">
				<img src="../img/imgcarousel2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h1 class="row justify-content-center">Kami Menyediakan</h1>
					<h1 class="row justify-content-center">Ruangan yang Berkelas</h1>
				</div>
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		</div>
		<!-- carousel end -->

		<!-- card and content -->
		<div class="container">
			<br><br>
			<h1 class="text-lg-center text-md-center text-sm-center">Ruangan</h1>
			<br><br>
			<h5 class="text-lg-end text-md-end text-sm-end click-postingan"><a href="{{ route('allRuangan') }}">Semua Postingan ></a></h5>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 1</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="{{ route('post') }}" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 2</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 3</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 4</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 5</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 6</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 7</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 8</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<!-- card and content -->

		<!-- Maps -->
		<div class="container maps">
			<div class="ratio ratio-21x9">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2368.4365232710493!2d114.58940841677271!3d-3.2957326893860337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4211bbc1be42d%3A0xd93490f4e3d79a8e!2sSMK%20Negeri%202%20Banjarmasin!5e0!3m2!1sid!2s!4v1634392929045!5m2!1sid!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		<!-- Maps end -->

		@include('partials.footer')

		@include('partials.linkJS')
	</body>
</html>
