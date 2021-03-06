<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
		<title>Login</title>
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
					<form action="/login" method="post" class="form-container">
						<div class="form-group mb-3">
							@csrf
							<h2>LOGIN</h2>
							<br /><br />

							@if(session()->has('success'))
							<div class="alert alert-success" role="alert">
								  {{ session('success') }}
							</div>
							@endif

							@if(session()->has('successUpdatePass'))
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									{{ session('successUpdatePass') }}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							@endif

							<label for="username" class="teks-kolom">Username:</label>
							<input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username" required />
						</div>
						<div class="form-group mb-3">
							<label for="password" class="teks-kolom">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required />
							<a href="{{ route('register') }}"><small class="text-cl-sm">Gak punya akun? Daftar Sekarang!</small></a
							><br />
							<a href="{{ route('search') }}"><small class="text-cl-sm">Forgot Password?</small></a>
						</div>
						<div class="d-grid gap-2">
							<button class="btn tombol" type="submit"
								><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Masuk</button
							>
						</div><br>

						@if(session()->has('loginError'))
						<div class="alert alert-danger" role="alert">
							  {{ session('loginError') }}
						</div>
						@endif
					</form>
				</section>
			</section>
		</section>
		<!-- form login end -->
	</body>

	<!-- jQuery -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</html>
