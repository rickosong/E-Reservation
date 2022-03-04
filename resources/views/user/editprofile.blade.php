<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Edit profile</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{ asset('css/editprofile.css') }}" />
	</head>
	<body>
		<!--profil start-->
		<div class="container emp-profile">
			<form action="{{ route('updateprofile', $user->id) }}" method="post" enctype="multipart/form-data">
				@method('put')
				@csrf
				@foreach ( $profiles as $profile )
	
				<div class="row">
					<div class="col-md-3">
						<div class="profile-img">
							<img class="logo" src="{{ asset('img/') }}/{{ $profile->image }}" alt="logo user" title="logo user" />
							<br />
							<br />
							<label class="custom-file-upload">
								<input type="file"class="form-control" name="userimage"/>
							</label>
							<br />
							<small>Mohon gunakan gambar yang ukurannya 1:1 agar menjadi lebih bagus</small>
							<br />
						</div>
					</div>
					<div class="col-md-6">
						<div class="profile-head">
							<div class="form-group mb-3">
								{{-- <label for="name" class="teks-kolom">Nama Lengkap:</label> --}}
								<input type="hidden" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda"  value="{{ $user->id }}"/>
							</div>
							<div class="form-group mb-3">
								<label for="name" class="teks-kolom">Nama Lengkap:</label>
								<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda" name="name"  value="{{ $user->name }}"/>
							</div>
							<div class="form-group mb-3">
								<label for="tanggal" class="teks-kolom">Tanggal Lahir:</label>
								<input type="datetime" class="form-control" id="tanggal" name="birthday" placeholder="Masukkan Tanggal Lahir"  value="{{ $profile->birthday }}"/>
							</div>
							<div class="form-group mb-3">
								<label for="telepon" class="teks-kolom">No. Telepon:</label>
								<input type="number" class="form-control" id="telepon"name="nomor" placeholder="Masukkan Nomor Telepon Anda"  value="{{ $user->phone_number }}"/>
							</div>
							<div class="form-group mb-3">
								<label for="email" class="teks-kolom">Email:</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" value="{{ $user->email }}" />
							</div>
							<div class="form-group mb-3">
								<label for="alamat" class="teks-kolom">Alamat:</label><br />
								<textarea name="addres" id="alamat" cols="50" rows="3" placeholder="Masukkan Alamat Anda">{{ $profile->addres }}</textarea>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="row">
					<div class="col-md-12">
						<div class="tab-content profile-tab" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
									<div class="col-md-12 text-end">
										<a href="{{ route('profile') }}" class="btn btn-grey"
											><span><i class="fa fa-reply" aria-hidden="true"></i></span> Kembali</a
										>
										<button class="btn btn-orange" type="submit">
											<span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Masuk
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- profil end -->
		@include('partials.linkJS')
	</body>
</html>
