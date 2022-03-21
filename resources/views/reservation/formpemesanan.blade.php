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
                <form class="form-container" method="post" action="{{ route('pesanruangan') }}">
                    <div class="form-group mb-3">
                        <h2>FORM PEMESANAN</h2>
                        @csrf
                        <br /><br />
                        <label for="ruangan" class="teks-kolom">Nama Ruangan :</label>
                        <input type="text" class="form-control" id="ruangan" aria-describedby="emailHelp" placeholder="Nama Ruangan" value="{{ $ruangan->nama_ruangan }}" readonly />
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" class="form-control" name="idruangan" value="{{ $ruangan->id }}" />  
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" class="form-control" name="iduser" value="{{ auth()->user()->id }}" />  
                    </div>
                    <div class="form-group mb-3">
                        <label for="dari jam" class="teks-kolom">Harga Ruangan :</label>
                        <input type="number" class="form-control" id="dari jam" placeholder="Jam Awal" value="{{ $ruangan->harga }}"  readonly />  
                    </div>
                    <div class="form-group mb-3">
                        <label for="darijam" class="teks-kolom">Pesan dari Jam :</label>
                        <input type="datetime-local" class="form-control" id="darijam" name="jamawal" placeholder="Jam Awal" />  
                    </div>
                    <div class="form-group mb-3">
                        <label for="sampaijam" class="teks-kolom">Sampai Jam :</label>
                        <input type="datetime-local" class="form-control" id="sampaijam" name="jamakhir" placeholder="Jam Akhir" />  
                    </div>         
                    <div class="row">
                        <button type="reset" class="btn btn-secondary col-6 col-md-5">
                            <i class="fa fa-undo" aria-hidden="true"></i> Kembali
                          </button>
                        <button type="button" class="btn tombol col-6 col-md-5 ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i> Pesan
                          </button>
                    </div>
                
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
                    <p>{{ $ruangan->nama_ruangan }}</p>
                    <br>
                    <!-- Jam Pemesanan -->
                    <p>Dari jam 8 sampai dengan jam 11</p>
                    <br>
                    <!-- Harga -->
                    <p>Dengan harga total {{ $ruangan->harga }}?</p>
                    <br>
                    <p>Jika anda melakukan pembayaran dan ingin membatalkan pemesanan, maka anda tidak bisa lagi membatalkan pemesanan</p>
                    <br> <br> <br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary col-md-5 " data-dismiss="modal"><span><i class="fa fa-reply" aria-hidden="true"></i></span> Kembali</button>
                  <button type="submit" class="btn tombol col-md-5 ms-auto"><i class="fa fa-envelope-o" aria-hidden="true"></i> Pesan</button>
                </div>
            </form>
              </div>
            </div>
          </div>

        <!-- modal note end -->



    <!-- script js -->
    @include('partials.linkJS')
</body>
</html>