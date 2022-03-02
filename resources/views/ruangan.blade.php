<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('startmin-master/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('startmin-master/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('startmin-master/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('startmin-master/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('startmin-master/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('startmin-master/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Data Table-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.5.2/css/bootstrap.css" rel="stylesheet" />
    
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand icon-white" href="#"> 
            <span><img src="img/smkn2-30.png"> </span> E-Room
            </a>
        </div>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user-circle-o fa-fw icon-white"></i><b class="caret icon-white"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Ruangan</h1>
                </div>
            </div>
            <a class="btn btn-success" href="{{ route('buatruangan') }}" <i class='fa fa-edit' aria-hidden='true'></i> Buat Ruangan Baru</a>

            <div class="panel-body">
                                    <div class="table-responsive">
                                        @if (session()->has('successCreateRuangan'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('successCreateRuangan') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                
                                        
                                            <thead>
                                                <tr>
                                                    <th>Nama Ruangan</th>
                                                    <th>Deskripsi</th>
                                                    <th>Harga</th>
                                                    <th>Fasilitas</th>
                                                    <th>Kelas</th>
                                                    <th>Gambar Ruangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ruangans as $ruangan)
                                            <tr>
                                                    <td>{{ $ruangan->nama_ruangan }}</td>
                                                    <td>{{ $ruangan->deskripsi }}</td>
                                                    <td>{{ $ruangan->harga }}</td>
                                                    <td>{{ $ruangan->fasilitas }}</td>
                                                    @foreach ($jenisruang as $jenis)
                                                    <td>{{ $jenis->jenis_ruangan }}</td>
                                                    @endforeach
                                                    <td><img src="{{ asset('/img') }}/{{ $ruangan->image }}" style="width:120px; height:60px;"></td>
                                                    <td> 
                                                    <a class="btn btn-primary" href="edit-ruangan.php" <i class='fa fa-edit' aria-hidden='true'></i> Edit</a>
                                                    <a class="btn btn-danger" href="" <i class='fa fa-trash' aria-hidden='true'></i> Hapus</a> </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="startmin-master/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="startmin-master/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="startmin-master/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="startmin-master/js/startmin.js"></script>

<!-- Data Table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

<!-- JS -->
<script>
$(document).ready( function () {
    $('#dataTables-example').DataTable();
} );
</script>

</body>
</html>
