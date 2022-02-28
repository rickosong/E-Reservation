<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{ asset('css/searcusername.css') }}" />
		<title>Forgot Password</title>
	</head>
	<body>
		<!-- form login -->
		<section class="container">
			<section class="row justify-content-start">
				<section class="col-lg-5 col-md-4">
					<div class="kanan">
						<img src="../img/smkn2.png" alt="" />
						<br /><br />
						<h3>RESERVASI RUANGAN SMKN 2 BANJARMASIN</h3>
					</div>
				</section>
			</section>

			<section class="row justify-content-end">
				<section class="col-sm-12 col-lg-5 col-md-12">
					<form class="form-container" action="/forgotpassword"  method="POST">
						@csrf
						<div class="form-group mb-3">
							<h2>FORGOT</h2>
							<h2>PASSWORD</h2>
							<br /><br />
							@if(session()->has('noUser'))
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									{{ session('noUser') }}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							@endif
							<label for="username" class="teks-kolom">email:</label>
							<input type="email" class="form-control" name="email" id="username" aria-describedby="emailHelp" placeholder="Cari Email" />
							<a href="{{ route('login') }}"><small class="text-cl-sm">Kembali</small></a>
						</div>
						<div class="d-grid gap-2">
							<button class="btn tombol" type="submit">
								<span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Cari
								</button>
						</div>
					</form>
				</section>
			</section>
		</section>
		<!-- form login end -->
	</body>

	<!-- jQuery -->
	<script src="../js/jquery-3.5.1.js"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</html>
