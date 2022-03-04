    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand icon-white" href="#"> 
            <span><img src="{{ asset('img/smkn2-30.png') }}"> </span> E-Reservation
            </a>
        </div>



        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img class="rounded-circle" src="{{ asset('img/user.svg') }}" alt="user photo">
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ route('profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button style="border: none 0px; margin-left: 20px; background-color:white" type="submit"><span><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i></span> Logout</button>
                    </form>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ route('homeadmin') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('ruangan') }}" class="active"><i class="fa fa-building fa-fw"></i> Ruangan</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Akun <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('akunmember') }}">Member</a>
                            </li>
                            <li>
                                <a href="{{ route('akunpetugas') }}">Petugas</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('pesanan') }}" class="active"><i class="fa fa-credit-card fa-fw"></i> Pesanan</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>