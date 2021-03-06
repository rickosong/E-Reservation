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
    @include('partials.navbaradmin')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Akun Petugas</h1>
                </div>
            </div>
            <a class="btn btn-success" href="{{ route('buatakunpetugas') }}"> <i class='fa fa-edit' aria-hidden='true'></i> Buat Akun Baru</a>

            <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            @if (session()->has('successCreateUser'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('successCreateUser') }}
                                                </div>
                                            @endif
                                            @if (session()->has('successDeleteUser'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('successDeleteUser') }}
                                                </div>
                                            @endif
                                            @if (session()->has('successUpdateUser'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('successUpdateUser') }}
                                                </div>
                                            @endif
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Nama User</th>
                                                    <th>Role</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Email</th>
                                                    <th>Tanggal Dibuat</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Alamat</th>
                                                    <th>Foto Profil</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($profiles as $profile)
                                                    @if ($profile->user->jenis_role_id !== 2)
                                                        <tr>
                                                            <td>{{ $profile->user->username }}</td>
                                                            <td>{{ $profile->user->name }}</td>
                                                            <td>{{ $profile->user->jenis_role->jenis_role }}</td>
                                                            <td>{{ $profile->birthday }}</td>
                                                            <td>{{ $profile->user->email }}</td>
                                                            <td>{{ $profile->user->created_at }}</td>
                                                            <td>{{ $profile->user->phone_number }}</td>
                                                            <td>{{ Str::limit($profile->addres, 25) }}</td>
                                                            <td><img class=" logo" src="{{ asset('img/') }}/{{ $profile->image }}" alt="" style="width:100px; height:100px;"/></td>
                                                            <td> 
                                                                <a class="btn btn-primary" href="{{ route('editakunpetugas', $profile->user->id) }}"> <i class='fa fa-edit' aria-hidden='true'></i> Edit</a>

                                                            <form action="{{ route('hapusakunpetugas', $profile->user->id) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus akun {{ $profile->user->name }}') "> <i class='fa fa-trash' aria-hidden='true'></i> Hapus</button> 
                                                            </form>
                                                            </td>
                                                        </tr>
                                                    @endif
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
