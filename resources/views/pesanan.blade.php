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

    @include('partials.navbaradmin')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pesanan</h1>
                </div>
            </div>

            <div class="panel-body">
                                    <div class="table-responsive">
                                        @if (session()->has('update'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('update') }}
                                          </div>
                                        @endif
                                        @if (session()->has('delete'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('delete') }}
                                          </div>
                                        @endif
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Nama Member</th>
                                                    <th>Ruangan</th>
                                                    <th>Nomor Pemesanan</th>
                                                    <th>Tanggal Pemesanan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pesanans as $pesanan)
                                                <tr>
                                                    <td>{{ $pesanan->user->name }}</td>
                                                    <td>{{ $pesanan->ruangan->nama_ruangan }}</td>
                                                    <td>{{ $pesanan->nomorpemesan }}</td>
                                                    <td>{{ $pesanan->tanggalpemesanan }}</td>
                                                    @if ($pesanan->status_id == 1)
                                                        <td class="success">Sudah Dibayar</td>
                                                    @elseif($pesanan->status_id == 2)
                                                        <td class="danger">Gagal Dibayar</td>
                                                    @else
                                                    <td class="warning">Belum Dibayar</td>
                                                    @endif
                                                    @if ($pesanan->status_id == 2)
                                                        <td>
                                                            <form action="{{ route('hapuspesanan', $pesanan->id) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus pesanan ini?')">Hapus</button> 
                                                                </form>
                                                        </td>
                                                    @else
                                                        <td> 
                                                            <a class="btn btn-primary" href="{{ route('editpesanan', $pesanan->id) }}"> Edit</a>
                                                            <form action="{{ route('hapuspesanan', $pesanan->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus pesanan ini?')">Hapus</button> 
                                                            </form>
                                                        </td>
                                                    @endif
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
<script src="{{ asset('startmin-master/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('startmin-master/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('startmin-master/js/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('startmin-master/js/startmin.js') }}"></script>

<!-- Data Table -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}

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
