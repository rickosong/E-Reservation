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
                            <h1 class="page-header">Buat Ruangan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

        <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Ruangan
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" method="POST" action="{{ route('storeruangan') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input type="text" name="namaruangan" class="form-control" require>
                                                </div>
                                                <div class="form-group">
                                                <label>Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" rows="3" require></textarea>
                                                </div>
                                                <label>Harga</label>

                                                <div class="form-group input-group" >
                                                    <span class="input-group-addon">Rp</span>
                                                    <input type="text" name="harga" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fasilitas</label>
                                                    <textarea class="form-control" name="fasilitas" rows="3" require></textarea> 
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Ruangan</label>
                                                    <select name="jenisruang" class="form-control">
                                                        {{-- <option value="{{ $jenisruangan }}">{{ $jenisruangan }}</option> --}}
                                                        <option selected="true" disabled="disabled"> ---- </option>
                                                        @foreach ($jenisruangan as $jenis)
                                                        <option value="{{ $jenis->id }}">{{ $jenis->jenis_ruangan }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Gambar Ruangan</label>
                                                    <input type="file" class="form-control" accept="image/png, image/jpeg" name="file" require/> 
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="{{ route('ruangan') }}" class="btn btn-default"> Kembali </a>
                                            </form>
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

</body>
</html>
