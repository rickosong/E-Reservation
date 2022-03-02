		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('img/smkn2.png') }}" alt="SMKN 2 Banjarmasin" title="SMKN 2 Banjarmasin">E-Reservation</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item active">
							<a class="nav-link active" href="{{ route('homepage') }}">Home</span></a>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							  Seputar Ruangan
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							  <li><a class="dropdown-item" href="{{ route('allRuangan') }}">Ruangan</a></li>
							  <li><a class="dropdown-item" href="{{ route('pesananMember') }}">Ruangan yang Dipesan</a></li>
							</ul>
						<li class="nav-item active">
							<a class="nav-link active" href="{{ route('aboutpage') }}">Tentang Kami</a>
						</li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								@foreach ($profiles as $profile )
								<img class="rounded-circle" src="{{ asset('img/') }}/{{ $profile->image }}" alt="user photo">
								@endforeach
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><span><i class="fa fa-user-circle" aria-hidden="true"></i></span> Profil</a></li>

								<form action="{{ route('logout') }}" method="post">
									@csrf
									<button type="submit" class="dropdown-item"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Log Out</button>
								</form>
							  </ul>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navbar end -->