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

    @include('partials.navbaradmin')

    <!-- Page Content -->
    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Edit Ruangan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

        <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Edit
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form">
                                                <div class="form-group">
                                                    <input class="form-control" type="hidden" require value="{{$ruangan->id }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input class="form-control" type="text" name="nama_ruangan" require value="{{$ruangan->nama_ruangan }}">
                                                </div>
                                                <div class="form-group">
                                                <label>Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" rows="3" require>{{ $ruangan->deskripsi }}</textarea>
                                                </div>
                                                <label>Harga</label>

                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">Rp</span>
                                                    <input type="text" class="form-control" name="harga" value="{{ $ruangan->harga }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fasilitas</label>
                                                    <input class="form-control" type="text" name="fasilitas" require value="{{ $ruangan->fasilitas }}"> 
                                                </div>
                                                <div class="form-group">
                                                    <label>Gambar Ruangan</label>
                                                    <input type="file" accept="image/png, image/jpeg" require/> 
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="{{ route('ruangan') }}" class="btn btn-default">Kembali </a>
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
