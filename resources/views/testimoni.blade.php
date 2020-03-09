<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Abah Kue</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/frontend/vegefoods/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/vegefoods/css/animate.css">

    <link rel="stylesheet" href="/frontend/vegefoods/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/vegefoods/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/vegefoods/css/magnific-popup.css">

    <link rel="stylesheet" href="/frontend/vegefoods/css/aos.css">

    <link rel="stylesheet" href="/frontend/vegefoods/css/ionicons.min.css">

    <link rel="stylesheet" href="/frontend/vegefoods/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/frontend/vegefoods/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/frontend/vegefoods/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/vegefoods/css/icomoon.css">
    <link rel="stylesheet" href="/frontend/vegefoods/css/style.css">
  </head>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index">Abah Kue</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">

            </li>
	          <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="galerikegiatan" class="nav-link">Galeri Kegiatan</a></li>
              <li class="nav-item active"><a href="testimoni" class="nav-link">Testimoni</a></li>
              <li class="nav-item "><a href="about" class="nav-link">About</a></li>
               <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('/frontend/vegefoods/images/18.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>testimoni</span></p>
            <h1 class="mb-0 bread">Testimoni</h1>
          </div>
        </div>
      </div>
    </div>


		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>beberapa pendapat orang terhadap produk abah kue</p>
          </div>
        </div>

        <div class="row ftco-animate">
            @foreach ($testimoni as $data)
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  {{-- <div class="user-img mb-5" style="background-image: url('/assets/img/testimoni'.$data->foto)"> --}}
                  <img src="{{asset('assets/img/testimoni/'.$data->foto)}}" alt="Image">
                    <span class="quote d-flex align-items-center justify-content-center">
                      {{-- <i class="icon-quote-left"></i> --}}
                    </span>
                  </div>
                  <div class="text text-center">
                  <p class="mb-5 pl-4 line">{!!$data->deskripsi!!}</p>
                    <p class="name">{{$data->nama}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
            @endforeach
        </div>

      </div>
    </section>


    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
            <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="index" class="py-2 d-block">Home</a></li>
                <li><a href="blog" class="py-2 d-block">Blog</a></li>
                <li><a href="testimoni" class="py-2 d-block">Testimoni</a></li>
                <li><a href="galerikegiatan" class="py-2 d-block">Galeri kegiatan</a></li>
                <li><a href="contact" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">jl.lewipanjang , lewisari</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">muhamadrifat11@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/frontend/vegefoods/js/jquery.min.js"></script>
  <script src="/frontend/vegefoods/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/frontend/vegefoods/js/popper.min.js"></script>
  <script src="/frontend/vegefoods/js/bootstrap.min.js"></script>
  <script src="/frontend/vegefoods/js/jquery.easing.1.3.js"></script>
  <script src="/frontend/vegefoods/js/jquery.waypoints.min.js"></script>
  <script src="/frontend/vegefoods/js/jquery.stellar.min.js"></script>
  <script src="/frontend/vegefoods/js/owl.carousel.min.js"></script>
  <script src="/frontend/vegefoods/js/jquery.magnific-popup.min.js"></script>
  <script src="/frontend/vegefoods/js/aos.js"></script>
  <script src="/frontend/vegefoods/js/jquery.animateNumber.min.js"></script>
  <script src="/frontend/vegefoods/js/bootstrap-datepicker.js"></script>
  <script src="/frontend/vegefoods/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/frontend/vegefoods/js/google-map.js"></script>
  <script src="/frontend/vegefoods/js/main.js"></script>

  </body>
</html>
