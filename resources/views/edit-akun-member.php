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
    <link href="startmin-master/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="startmin-master/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="startmin-master/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="startmin-master/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="startmin-master/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="startmin-master/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="css/admin.css" rel="stylesheet">

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
                        <a href="admin.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ruangan.php" class="active"><i class="fa fa-building fa-fw"></i> Ruangan</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Akun <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="akun-member.php">Member</a>
                            </li>
                            <li>
                                <a href="akun-petugas.php">Petugas</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="pesanan-dibayar.php" class="active"><i class="fa fa-credit-card fa-fw"></i> Pesanan</a>
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
                            <h1 class="page-header">Edit Akun Member</h1>
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
                                                    <label>Nama Member</label>
                                                    <input class="form-control" require>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" require>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" rows="3" require></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Dibuat</label>
                                                    <input class="form-control" type="datetime-local" require>
                                                </div>
                                                <div class="form-group">
                                                    <label>No Telepon</label>
                                                    <input class="form-control" require> 
                                                </div>
                                                <input type="submit" class="btn btn-success" value="Submit" name="Submit" />
            <input type="button" class="btn btn-default" value="Kembali" name="Batal"
            onClick="window.location='akun-member.php';" />
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
