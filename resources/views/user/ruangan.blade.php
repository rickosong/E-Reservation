<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/ruangan.css" />
		<title>Semua ruangan</title>
	</head>
	<body>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="home.html"><img src="../img/smkn2.png" alt="SMKN 2 Banjarmasin" title="SMKN 2 Banjarmasin">E-Reservation</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item active">
							<a class="nav-link active" href="home.html">Home</span></a>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							  Seputar Ruangan
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							  <li><a class="dropdown-item" href="ruangan.html">Ruangan</a></li>
							  <li><a class="dropdown-item" href="pesananmember.html">Ruangan yang Disewa</a></li>
							</ul>
						<li class="nav-item active">
							<a class="nav-link active" href="aboutpage.html">Tentang Kami</a>
						</li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle" src="../img/person-circle.svg" alt="user photo">
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="profile.html"><span><i class="fa fa-user-circle" aria-hidden="true"></i></span> Profil</a></li>
                                <li><a class="dropdown-item" href="landingpage.html"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Log Out</a></li>
							  </ul>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navbar end -->

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
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 1</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 2</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 3</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 4</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 5</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 6</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 7</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 8</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 9</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 10</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 11</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Ruang 12</h5>
							<h6 class="price">RP. 50.000</h4>
							<a href="#" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<!-- card and content end-->

        <!-- Footer -->
			<div class="card-footer">
				<div class="container">
					<div class="row">
						<div class="col justify-content-start">
							<h3 class=""><img src="../img/smkn2.png" alt="" srcset="SMKN 2 Banjarmasin"><span class="space"></span> E-Reservation</h3>
						</div>
						<div class="col justify-content-center text-center">
							<a href=""><i class="fa fa-instagram link-light icon" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-youtube-play link-light icon" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-facebook-official link-light" aria-hidden="true"></i></a>
							<div class="text-center">
								<p>E-Reservation &copy; 2022 --All Rights Reserved</p>
							</div>
						</div>
						<div class="col justify-content-end">
							<h6 class="footer-t text-end">Selamat Datang</h6>
							<h6 class="text-end">Username</h5>
						</div>

					</div>
				</div>
			</div>
		<!-- Footer End -->

		<!-- jQuery -->
		<script src="../js/jquery-3.6.0.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<!-- jQuery end -->
