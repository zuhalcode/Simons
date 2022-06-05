 @extends('layouts.main')
 @section('content')
 <div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Perpanjangan<br>
						Surat Izin Mengemudi
						<br>
						<span class="text-warning">#dirumahaja</span>
					</h1>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-primary" href="/register">DAFTAR SEKARANG</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">
						Pembuatan
						<br> 
						Surat Izin Mengemudi
					</h1>
					<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-primary text-uppercase" href="/register">DAFTAR SEKARANG</a>
				</div>
			</div>
		</div>
	</div>
</div> 

<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- section title -->
        <div class="title text-center">
          <h2>Yang Kami Tawarkan</h2>
          <p>Pembuatan dan Perpanjangan Surat Izin Mengemudi dengan mudah dan dapat diakses 
			  <span class="text-danger">#dirumahaja</span></p>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->


<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Bingung dan Butuh Panduan?</h2>
				<p>Alur pendaftaran, pembuatan SIM serta pertanyaan lainnya silahkan tekan tombol di bawah ini.</p>
				<a href="" class="btn btn-main">Kontak Kami</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
@include('partials.footer')
@endsection