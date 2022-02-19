<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/profile.css" />
  </head>
  <body>

	@include('partials.navbar')

     <!--profil start-->
     <div class="container emp-profile">
			<form method="post">
				@foreach ($profiles as $profile)
					
				
				<div class="row">
					<div class="col-md-3">
						<div class="profile-img">
							<img class="logo" src="../img/person-circle.svg" alt="logo user" title="logo user"/>
							<br>
							<small>Mohon gunakan gambar yang ukurannya 1:1 agar menjadi lebih bagus</small>
							<br>
						</div>
					</div>
					<div class="col-md-6">
						<div class="profile-head">
							<h5>{{ auth()->user()->name }}</h5>
							<h6>{{ auth()->user()->username }}</h6>
							<br>
							<hr color="black">
						</div>
					</div>
					<div class="col-md-3 text-end">
						<a class="btn btn-orange" href="{{ route('editprofile') }}">Edit Profile</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-8">
						<div class="tab-content profile-tab" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
									<div class="col-md-6">
										<label>Nama</label>
									</div>
									<div class="col-md-6">
										<p>{{ auth()->user()->name }}</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Tanggal Lahir</label>
									</div>
									<div class="col-md-6">
										<p>{{ $profile->birthday }}</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>No Telepon.</label>
									</div>
									<div class="col-md-6">
										<p>{{ auth()->user()->phone_number }}</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Email</label>
									</div>
									<div class="col-md-6">
										<p>{{ auth()->user()->email }}</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Alamat</label>
									</div>
									<div class="col-md-6">
										<p>{{ $profile->addres }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</form>
		</div>
	<!-- profil end -->

    <!--javascript-->
    <script src="../js/jquery-3.6.0.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
