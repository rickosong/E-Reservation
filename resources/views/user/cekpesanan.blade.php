<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/cekpesanan.css') }}" />
		<title>Halaman Home</title>
	</head>
	<body>
		@include('partials.navbar')

		<!-- card -->

		<div class="container">
			<div class="card">
				<div class="card-title text-center">Anda Mau Pesan Ruangan ini dari Jam berapa sampai jam berapa?</div>
				<br><br>
				<div class="card-body">
						<form class="form-container row">
							<div class="form-group col-lg-3 offset-2">
								<label for="username" class="teks-kolom">Jam Check in:</label>
								<input type="datetime-local" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukkan Username" />
							</div>
							<div class="form-group col-lg-3 offset-2">
								<label for="password" class="teks-kolom">Jam Check out:</label>
								<input type="datetime-local" class="form-control" id="password" placeholder="Masukkan Password" />
							</div><br><br>
								<div class="row button">
									<a href="home.html" class="btn btn-orange col-lg-2 offset-3 justify-content-between" type="submit"
									><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Kirim</a
								>
								<a href="home.html" class="btn tombol btn-grey offset-2 col-lg-2 justify-content-between" type="submit"
									><i class="fa fa-reply" aria-hidden="true"></i><span> Kembali</a
								>
								</div>
						</form>
				</div>
			  </div>
		</div>
		
		<!-- card end -->

			@include('partials.footer')

				@include('partials.linkJS')

</body>
</html>
