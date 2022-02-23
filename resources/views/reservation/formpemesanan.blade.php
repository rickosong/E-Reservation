<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Reservation | Form Pemesanan</title>
    <!-- bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{ asset('css/formpemesanan.css') }}" />
</head>
<body>

  @include('partials.navbar')

        <!-- form pemesanan start -->

        <section class="row justify-content-center">
            <section class="col-sm-12 col-lg-7 col-md-12">
                <form class="form-container" method="post">
                    <div class="form-group mb-3">
                        <h2>FORM PEMESANAN</h2>
                        <br /><br />
                        <label for="username" class="teks-kolom">Nama Ruangan:</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Nama Ruangan" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="teks-kolom">Nama Pemesan:</label>
                        <input type="text" class="form-control" id="password" placeholder="Nama Pemesan" />  
                    </div>
                    <div class="form-group mb-3">
                        <label for="dari jam" class="teks-kolom">Pesan dari Jam:</label>
                        <input type="datetime-local" class="form-control" id="dari jam" placeholder="Jam Awal" />  
                    </div>
                    <div class="form-group mb-3">
                        <label for="sampai jam" class="teks-kolom">Sampai Jam:</label>
                        <input type="datetime-local" class="form-control" id="sampai jam" placeholder="Jam Akhir" />  
                    </div>         
                    <div class="row">
                        <button type="reset" class="btn btn-secondary col-6 col-md-5">
                            <i class="fa fa-undo" aria-hidden="true"></i> Reset
                          </button>
                        <button type="button" class="btn tombol col-6 col-md-5 ms-auto" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> Pesan
                          </button>
                    </div>
                </form>
            </section>
        </section>
    </section>
    <br><br><br><br><br>

        <!-- form pemesanan end -->

        <!-- modal note start-->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center" id="exampleModalLabel">Note</h5>
                    <br>
                    <p>Apakah anda ingin benar-benar ingin</p>
                    <p>memesan : </p>
                    <br>
                    <!-- Nama Ruangan -->
                    <p>Ruangan Lab Korea</p>
                    <br>
                    <!-- Jam Pemesanan -->
                    <p>Dari jam 8 sampai dengan jam 11</p>
                    <br>
                    <!-- Harga -->
                    <p>Dengan harga total 150.000?</p>
                    <br>
                    <p>Jika anda melakukan pembayaran dan ingin membatalkan pemesanan, maka anda tidak bisa lagi membatalkan pemesanan</p>
                    <br> <br> <br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary col-md-5 " data-dismiss="modal"><span><i class="fa fa-reply" aria-hidden="true"></i></span> Kembali</button>
                  <a type="button" href="{{ route('invoice') }}" class="btn tombol col-md-5 ms-auto"><i class="fa fa-envelope-o" aria-hidden="true"></i> Pesan</a>
                </div>
              </div>
            </div>
          </div>

        <!-- modal note end -->



    <!-- script js -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>