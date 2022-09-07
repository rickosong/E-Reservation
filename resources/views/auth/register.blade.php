<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/register.css" />
		<title>Registrasi</title>
	</head>
	<body>
		<!-- form registrasi -->
		<section class="container">
			<section class="row justify-content-md-start">
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
					<form action="/register" method="post" class="form-container">
						@csrf
						<div class="form-group mb-3">
							<h2>REGISTRASI</h2>
							<br />

							@if(session()->has('regisError'))
							<div class="alert alert-danger" role="alert">
								  {{ session('regisError') }}
							</div>
							@endif
							
							<label for="username" class="teks-kolom">Username:</label>
							<input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username" required/>
							@error('username')
							<div class="invalid-feedback">
								{{$message}}
							  </div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="password" class="teks-kolom">Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required/>
						</div>
						<div class="form-group mb-3">
							<label for="konfirmasipassword" class="teks-kolom">Konfirmasi Password:</label>
							<input type="password" class="form-control" id="konfirmasipassword"name="confirmPass" placeholder="Konfirmasi Password" required/>
						</div> 
						<div class="form-group mb-3">
							<label for="nama" class="teks-kolom">Nama:</label>
							<input type="text" class="form-control" id="nama" name="name" placeholder="Masukkan Nama Lengkap Anda" required/>
						</div>
						<div class="form-group mb-3">
							<label for="email" class="teks-kolom ">Email:</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email Anda" required/>
							@error('email')
							<div class="invalid-feedback">
								{{$message}}
							  </div>
							@enderror
						</div>
						<div class="form-group mb-3">
							<label for="nomor" class="teks-kolom">No.HP:</label>
							<input type="text" class="form-control" id="nomor" name="nomor" placeholder="Masukkan Nomor HP Anda" required />
							<a href="{{ route('login') }}"><small class="text-cl-sm">Sudah punya akun? Klik DIsini Untuk Login!</small></a
							><br />
							<a href="{{ route('search') }}"><small class="text-cl-sm">Forgot Password?</small></a>
						</div>
						<div class="d-grid gap-2">
							<button type="submit" class="tombol btn btn-block" 
								><span><i class="fa fa-user-plus" aria-hidden="true"></i></span> Daftar</button>
						</div><br>
					</form>
				</section>
			</section>
		</section>
		<!-- form registrasi end -->
	</body>

	<!-- jQuery -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- jQuery end -->
</html>
