<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Pesananamu</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/pesananmember.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		@include('partials.navbar')

		<!-- content -->
        <div class="container">
            <h1 class="text-center">Ruangan Yang Dipesan</h1>
            <br><br>
            <div class="card">
                <!-- <h5 class="card-header">Featured</h5> -->
                <div class="card-body">
                    <div class="row">
                        <img class="col-lg-2 img-thumbnail" src="../img/img2.jpg" alt="">
                        <div class="col-lg-10">
                            <h5 class="card-title">Ruang 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt inventore ea aliquam nemo tenetur eaque quae, minima ab et provident, deserunt commodi? Aspernatur facere deserunt unde amet, pariatur atque. Molestias?</p>
                            <a href="#" class="btn btn-orange"><span><i class="fa fa-commenting-o" aria-hidden="true"></i> </span> Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <!-- <h5 class="card-header">Featured</h5> -->
                <div class="card-body">
                    <div class="row">
                        <img class="col-lg-2 img-thumbnail" src="../img/img2.jpg" alt="">
                        <div class="col-lg-10">
                            <h5 class="card-title">Ruang 2</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus consequuntur, accusantium consectetur porro vel, quisquam cum asperiores id sint sapiente praesentium. Molestiae sunt ipsum debitis? Magni pariatur illo temporibus libero!</p>
                            <a href="#" class="btn btn-orange"><span><i class="fa fa-commenting-o" aria-hidden="true"></i> </span> Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <!-- <h5 class="card-header">Featured</h5> -->
                <div class="card-body">
                    <div class="row">
                        <img class="col-lg-2 img-thumbnail" src="../img/img2.jpg" alt="">
                        <div class="col-lg-10">
                            <h5 class="card-title">Ruang 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias sapiente impedit aut eius ut culpa qui eum, error iste ex mollitia, dolorem provident obcaecati eaque laborum, optio inventore iure vitae.</p>
                            <a href="#" class="btn btn-orange"><span><i class="fa fa-commenting-o" aria-hidden="true"></i> </span> Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br><br><br><br>
        <!-- content end -->

		@include('partials.footer')

	</body>
</html>
