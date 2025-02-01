<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Beasiswa Mahaghora</title>
<meta name="description" content="Beasiswa Mahaghora" />
<meta name="keywords" content="Beasiswa Mahaghora" />
<link rel="shortcut icon" href="{{ asset('assets-landing/images/logo-white.png') }}">
<link rel="stylesheet" href="{{ asset('assets-landing/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets-landing/css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">
<style>
  /* .instagram-embed iframe {
  border-radius: 16px; /* Membuat sudut melengkung pada iframe */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
} */
  .article {
  padding: 60px 0;
  background-color: #f8f9fa; /* Warna latar untuk pemisah */
}

.mt{
  margin-top: 20px
}

.card {
  margin-top: 40px;
  border-radius: 5px; /* Sudut melengkung */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
  overflow: hidden; /* Menjaga konten tetap di dalam */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek hover */
  background-color: #ffffff; /* Warna background */
}

.card:hover {
  transform: translateY(-5px); /* Efek melayang */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Bayangan saat hover */
}

.card-img {
  width: 98%;
  height: 200px;
  object-fit: cover; /* Menyesuaikan gambar agar proporsional */
  border-bottom: 2px solid #e0e0e0; /* Garis pemisah */
}

.card-body {
  padding: 20px;
}

h3 {
  margin-bottom: 40px;
  font-weight: 700;
}

h4 {
  margin: 16px 0;
  font-size: 18px;
}

p {
  font-size: 14px;
  color: #6c757d; /* Warna teks untuk paragraf */
}

.btn {
  padding: 20px;
  margin-top: 10px;
  border-radius: 8px; /* Membuat tombol lebih lembut */
}

</style>
</head>
<body>

<!--=== Loader Start ======-->
{{-- <div id="loader-overlay">
  <div class="loader">
    <div class="loader-inner"></div>
  </div>
</div> --}}
<!--=== Loader End ======-->

<!--=== Wrapper Start ===-->
<div class="wrapper">

  <!--=== Header Start ===-->
  <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full">

    <div class="container">
      <!--=== Start Atribute Navigation ===-->
      <!-- <div class="attr-nav">
        <ul>
        	<li class="side-menu"><a href="#"><i class="mdi mdi-menu"></i></a></li>
        </ul>
      </div> -->
      <!--=== End Atribute Navigation ===-->

      <!--=== Start Header Navigation ===-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="mdi mdi-menu"></i> </button>
        <div class="logo"> <a href="index.html">
            <img class="logo logo-display" src="{{asset('assets-landing/images/logo-white.png')}}" alt="">
            <img class="logo logo-scrolled" src="{{asset('assets-landing/images/logo-black-1.png')}}" alt=""> </a> </div>
      </div>
      <!--=== End Header Navigation ===-->

      <!--=== Collect the nav links, forms, and other content for toggling ===-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
          <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
            <ul class="dropdown-menu">
              <li><a href="index.html">Home Creative Default</a></li>
              <li><a href="home-startup.html">Home Startup</a></li>
              <li><a href="home-design-lab.html">Home Design Lab</a></li>
              <li><a href="home-onepage.html">Home Onepage</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="about-us.html">About Us</a></li> -->
          <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Work</a>
            <ul class="dropdown-menu">
              <li><a href="work-default.html">Work Default</a></li>
              <li><a href="work-fullwidth.html">Work Fullwidth</a></li>
              <li><a href="work-metro.html">Work Metro</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Blogs</a>
            <ul class="dropdown-menu">
              <li><a href="blog-default.html">Blog Default</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li> -->
          <li><a href="{{ route('login') }}">MASUK</a></li>
          {{-- <li><a href="contact-us.html">Contact Us</a></li> --}}
        </ul>
      </div>
      <!--=== /.navbar-collapse ===-->
    </div>
    <!-- Start Side Menu -->
    <!-- <div class="side">
            <a href="#" class="close-side"><i class="mdi mdi-close"></i></a>
            <div class="widget">
                <h6 class="title">Custom Pages</h6>
                <ul class="link">
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="our-services.html">Services</a></li>
                    <li><a href="blog-default.html">Blog</a></li>
                    <li><a href="work-default.html">Our Work</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
            <div class="widget">
                <h6 class="title">Home Page Variations</h6>
                <ul class="link">
                    <li><a href="index.html">Home Creative Default</a></li>
					<li><a href="home-startup.html">Home Startup</a></li>
					<li><a href="home-design-lab.html">Home Design Lab</a></li>
					<li><a href="home-onepage.html">Home Onepage</a></li>
                </ul>
            </div>
     </div> -->
     <!-- End Side Menu -->
  </nav>
  <!--=== Header End ===-->

  <!--=== Hero Slider Start ===-->

  <section class="home-slider">
    <div class="default-slider slick">
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets-landing/images/slides/team.png) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text">
            <div class="container">
              <div class="white-color">
                <h3 class="upper-case">Beasiswa<h3>
                <h1 class="upper-case font-600">Mahaghora</h1>
                <!-- <h3 class="upper-case">A <span class="font-600">Chaos</span> Web <span class="font-800">Agency.</span></h3> -->
                <p class="text-left mt-30"><a href="{{route('start')}}" class="btn btn-navy btn-md">Pendaftaran Beasiswa Mahaghora</a> </p>
                <p class="text-left mt-30"><a target="_blank" href="{{asset('assets/GUIDEBOOK_compressed-1.pdf')}}" class="btn btn-navy btn-md">Guide Book</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slide-img parallax-effect" style="background:url(assets-landing/images/slides/IMG_0163_Edited.jpg) center center / cover scroll no-repeat;"></div>
        <div class="hero-text-wrap">
          <div class="hero-text white-color">
            <div class="container">
              <div class="white-color">
                <h3 class="upper-case">Beasiswa<h3>
                  <h1 class="upper-case font-600">Mahaghora</h1>
                  <p class="text-left mt-30"><a href="{{route('home')}}" class="btn btn-navy btn-md">Pendaftaran Beasiswa Mahaghora</a> </p>
                  <p class="text-left mt-30"><a target="_blank" href="{{asset('assets/GUIDEBOOK.pdf')}}" class="btn btn-navy btn-md">Guide Book</a> </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--=== Hero Slider End ===-->

  <!--=== Welcome Start ===-->
  <!--- untuk article --->
  <section class="article" id="article">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <h3><span class="font-700">Perjalanan</span> Beasiswa Mahaghora</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card text-center">
            <img src="{{ asset('assets-landing/images/portfolio/grid/1.jpg') }}" alt="" class="card-img">
            <div class="card-body">
              <h4><strong>Cerita Tentang Kita</strong></h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, id.</p>
              <button type="button" class="btn btn-primary">Lihat Selengkapnya</button>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 ">
          <div class="card text-center">
            <img src="{{ asset('assets-landing/images/portfolio/grid/2.jpg') }}" alt="" class="card-img">
            <div class="card-body">
              <h4><strong>Perjalanan Mahasiswa</strong></h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, aliquid.</p>
              <button type="button" class="btn btn-primary">Lihat Selengkapnya</button>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        
        <!-- Instagram Embed -->
        <div class="col-lg-4 mt">
          <div class="instagram-embed">
            <iframe
              loading="lazy"
              src="https://instagram.com/p/DD9YXpryOWV/embed/"
              frameborder="0"
              width="100%"
              height="540px"
              scrolling="no"
              allowtransparency="true"
              style="border-radius: 16px; border: 1px solid #e0e0e0;">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--- selesai --->
  <section>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6">
  				<div class="intro-img"><img class="img-responsive" src="{{ asset('assets-landing/images/kenjeran-office.png') }}" alt=""/></div>
  			</div>
  			<div class="col-md-6 heading-style-one">
  				<hr class="gradient-bg left-line">
  				<h2><span class="font-700">Tentang</span><br>Beasiswa Mahaghora</h2>
  				<h5 class="mt-30">Beasiswa Mahaghora adalah bagian dari salah satu Corporate Social Responsibility (CSR) PT. Mahaghora yang memberikan kesempatan kepada putra-putri Indonesia untuk melanjutkan pendidikannya hingga ke bangku Universitas. PT. Mahaghora sendiri merupakan salah satu induk perusahaan yang berada di Indonesia dengan jangkauan multinasional.
            </h5><h5>
            PT. Mahaghora melalui program Beasiswa Mahaghora tidak hanya memberikan pembiayaan kuliah kepada penerima beasiswa terpilih, namun mereka juga akan dibekali softskill, training, dan program pengembangan lainnya untuk menunjang dan mempersiapkan mental para penerima beasiswa ketika menghadapi dunia kerja sesungguhnya.

            </h5>
  				<!-- <div class="row mt-40">
  					<div class="col-md-6 feature-box text-center mb-20 col-xs-12 col-sm-6">
  						<i class="bulb-icon img-icon"></i>
					  	<h3>Creative Design</h3>
					</div>
					<div class="col-md-6 feature-box text-center mb-20 col-xs-12 col-sm-6">
  					<i class="diamond-icon img-icon"></i>
					  <h3>Development</h3>
					</div>
					<div class="col-md-6 feature-box text-center mb-20 col-xs-12 col-sm-6">
  					<i class="magic-icon img-icon"></i>
					  <h3>Implementation</h3>
					</div>
					<div class="col-md-6 feature-box text-center mb-20 col-xs-12 col-sm-6">
  					<i class="connect-icon img-icon"></i>
					  <h3>Customer Support</h3>
					</div>
  				</div> -->
  			</div>
  		</div>
  	</div>
  </section>
  <!--=== Welcome End ===-->


  <!--=== Counter Start ===-->
  <section class="parallax-bg fixed-bg pt-100 pb-100" data-stellar-background-ratio="0.01" style="background-image: url(assets-landing/images/background/IMG_3930.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <!-- <h2><span class="counter">114</span></h2>
            <h3>Our Projects</h3> -->
            <br>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <br>
            <!-- <h2><span class="counter">350</span></h2>
            <h3>Happy Clients</h3> -->
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <!-- <h2><span class="counter">574</span></h2>
            <h3>Cups of Coffee</h3> -->
            <br>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <!-- <h2><span class="counter">1000</span></h2>
            <h3>Facebook Likes</h3> -->
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Counter End ===-->

  <!--=== Portfolio Start ===-->
  <section class="pb-0 white-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-4 heading-style-one col-sm-4 col-xs-12">
        	<hr class="gradient-bg left-line">
			<h2 class="font-700">Kegiatan</h2>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <!-- <div id="chaos-gallery-filter" class="cbp-l-filters-alignRight mt-40">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
            <div data-filter=".graphic" class="cbp-filter-item"> Graphics Design </div>
            <div data-filter=".web" class="cbp-filter-item"> Web Design </div>
            <div data-filter=".wordpress" class="cbp-filter-item"> Wordpress </div>
            <div data-filter=".photography" class="cbp-filter-item"> Photography </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mt-90">
        <div id="chaos-gallery" class="cbp">
          <div class="cbp-item web col-md-6 col-sm-6">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/1.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Recruitment</h3>
                  <!-- <a href="single-portfolio.html" class="links">Web</a> </div> -->
                  </div>
              </div>
            </div>
          </div>
          <div class="cbp-item graphic col-md-3 col-sm-3">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/2.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Training Camp</h3>
                  <!-- <a href="single-portfolio.html" class="links">Graphics</a> </div> -->
                  </div>
              </div>
            </div>
          </div>
          <div class="cbp-item wordpress development col-md-3 col-sm-3">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/IMG_3087.png') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Training Camp</h3>
                  <!-- <a href="single-portfolio.html" class="links">Brand</a> </div> -->
                  </div>
              </div>
            </div>
          </div>
          <div class="cbp-item graphic col-md-6 col-sm-6">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/4.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Business Development</h3>
                  <!-- <a href="single-portfolio.html" class="links">Graphics</a> </div> -->
                  </div>
              </div>
            </div>
          </div>
          <div class="cbp-item photography col-md-3 col-sm-3">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/5.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Business Development</h3>
                  <!-- <a href="single-portfolio.html" class="links">Wordpress</a> </div> -->
                  </div>
              </div>
            </div>
          </div>
          <div class="cbp-item graphic col-md-3 col-sm-3">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/6.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Charity</h3>
                  <!-- <a href="single-portfolio.html" class="links">Graphics</a> </div> -->
                  </div>
              </div>
            </div>
          </div>

          <div class="cbp-item photography col-md-6 col-sm-6">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/8.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Weekly Meeting & Bounding</h3>
                  <!-- <a href="single-portfolio.html" class="links">Photography</a> </div> -->
                  </div>
              </div>
            </div>
          </div>

          <div class="cbp-item web col-md-3 col-sm-3">
            <div class="portfolio gallery-image-hover text-left">
              <div class="folio-overlay"></div>
              <img src="{{ asset('assets-landing/images/portfolio/grid/7.jpg') }}" alt="">
              <div class="portfolio-wrap">
                <div class="portfolio-description">
                  <h3 class="portfolio-title">Business Presentation</h3>
                  <!-- <a href="single-portfolio.html" class="links">Web</a> </div> -->
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!--=== Portfolio End ===-->

  <!--=== Our Services Start ===-->
 <section>
  	{{-- <div class="hexagon-gradient-left shapes" data-opacity="0.3"></div>
  	<div class="triangle-light-blue shapes" data-opacity="0.2"></div>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 heading-style-two text-center">
  				<h2 class="font-700"><span>Informasi</span></h2>
  			</div>
  		</div>
  		<div class="row mt-50">
  			<div class="col-md-4 main-service-box text-center col-md-offset-2">
  				<i class="mdi mdi-laptop default-color"></i>
  				<h4>Responsive</h4>
  				<p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
  			</div>
  			<div class="col-md-4 main-service-box text-center col-md-offset-2">
  				<i class="mdi mdi-rocket default-color"></i>
  				<h4>Amazing Design</h4>
  				<p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
  			</div> --}}
  			{{-- <div class="col-md-4 main-service-box text-center col-sm-6">
  				<i class="mdi mdi-tune default-color"></i>
  				<h4>Easy to Customize</h4>
  				<p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
  			</div> --}}
  			{{-- <div class="col-md-4 main-service-box text-center col-sm-6">
  				<i class="mdi mdi-wechat default-color"></i>
  				<h4>Live Support</h4>
  				<p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
  			</div>
  			<div class="col-md-4 main-service-box text-center col-sm-6">
  				<i class="mdi mdi-ungroup default-color"></i>
  				<h4>Pixel Perfect</h4>
  				<p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
  			</div>
  			<div class="col-md-4 main-service-box text-center col-sm-6">
  				<i class="mdi mdi-trophy default-color"></i>
  				<h4>Award Winning</h4>
  				<p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
  			</div> --}}
  		{{-- </div>
  	</div> --}}

  </section>
  <!--=== Our Services End ===-->

  <!--=== Video Start ===-->
  <!-- <section class="parallax-bg fixed-bg pt-200 pb-200" style="background-image: url(assets/images/background/parallax-bg.jpg);">
  	<div class="gradient-overlay"></div>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-2 col-md-offset-5">
  				<div class="center-layout">
                <div class="v-align-middle"> <a class="popup-youtube" href="https://www.youtube.com/watch?v=sU3FkzUKHXU">
                  <div class="play-button"><i class="eicon mdi mdi-play"></i> </div>
                  </a> </div>
              </div>
  			</div>
  		</div>
  	</div>
  </section> -->
  <!--=== Video End ===-->

  <!--=== Our Team Start ===-->
  <section>
    <div class="container">
      <div class="row">
  			<div class="col-md-12 heading-style-two text-center">
  				<h2 class="font-700"><span>Anggota Beasiswa Mahaghora 2024-2025</span></h2>
  			</div>
  		</div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/6Devina.png') }}" class="img-responsive" alt="team-03">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Devina Patrivia</h4>
                  <p class="member-subtitle">Ilmu Hukum, Universitas Airlangga</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/7 harvest.png') }}" class="img-responsive" alt="team-02">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Harvest Walukow</h4>
                  <p class="member-subtitle">Teknologi Sains Data, Universitas Airlangga</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/2Caca.png') }}" class="img-responsive" alt="team-04">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Keisha Sarah</h4>
                  <p class="member-subtitle">Ilmu Komunikasi, Universitas Katolik Widya Mandala Surabaya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/8 kelvin.png') }}" class="img-responsive" alt="ferdian">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h5 class="member-title">Kelvin Kristian</h5>
                    <p class="member-subtitle">Ilmu Komunikasi, UPN Veteran</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=== Member End ===-->
      </div>
      <div class="row mt-50 justify-content-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/3Shevy.png') }}" class="img-responsive" alt="team-04">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Shevy Jessica Elizabeth</h4>
                  <p class="member-subtitle">Bisnis Internasional, Universitas Surabaya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/1 Yani.png') }}" class="img-responsive" alt="team-02">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Satriyani Dewi Astuti</h4>
                    <p class="member-subtitle">Ilmu Komunikasi, Universitas Airlangga</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=== Member End ===-->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/4 Zefa.png') }}" class="img-responsive" alt="team-03">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Zefa Budi Dharma</h4>
                    <p class="member-subtitle">Rekayasa Nanoteknologi, Universitas Airlangga</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/5Melly.png') }}" class="img-responsive" alt="team-04">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Bridgita Mellyana Setiawan</h4>
                    <p class="member-subtitle">Desain Komunikasi Visual, Institut Teknologi Sepuluh Nopember</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=== Member End ===-->

      </div>
      {{-- buat anak baru --}}

      <div class="row mt-50 justify-content-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/9 nova.png') }}" class="img-responsive" alt="team-04">
            <div class="member-caption">
              <div class="member-description">
                <div class="member-description-wrap">
                  <h4 class="member-title">Nova Priyantika</h4>
                  <p class="member-subtitle">Hukum, Universitas Surabaya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=== Member End ===-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/11 willy.png') }}" class="img-responsive" alt="team-02">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Willy Suryawan</h4>
                    <p class="member-subtitle">Teknik Informatika, Universitas Surabaya</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=== Member End ===-->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/10 livina.png') }}" class="img-responsive" alt="team-03">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Livina Renata</h4>
                    <p class="member-subtitle">Ilmu Komunikasi, Universitas Kristen Petra</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-member-container gallery-image-hover"> <img src="{{ asset('assets-landing/images/latest-awardee/12 jojo.png') }}" class="img-responsive" alt="team-04">
              <div class="member-caption">
                <div class="member-description">
                  <div class="member-description-wrap">
                    <h4 class="member-title">Prince Jonathan Agustinus Guitono</h4>
                    <p class="member-subtitle">Desain Komunikasi Visual, Institut Teknologi Sepuluh Nopember</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=== Member End ===-->
      </div>
      <div class="row mt-50">
        <div class="col-md-3 col-sm-6 col-xs-12">
        </div>
      </div>

        <!--=== Member End ===-->
      </div>
    </div>
  </section>
  <!--=== Our Team End ===-->



  <!--=== Testimonails Start ===-->
  <!-- <section class="parallax-bg fixed-bg" data-stellar-background-ratio="0.2" style="background-image: url(assets/images/background/pattern-parallax.jpg);">
    <div class="container">
      <div class="row">
  			<div class="col-md-12 heading-style-two text-center">
  				<h2 class="font-700"><span>Our Testimonials</span></h2>
  			</div>
  		</div>
      <div class="row mt-60">

          <div class="slick testimonial">  -->

				<!--=== Slide ===-->
				<!-- <div class="testimonial-item">
			  		<div class="col-md-12">
					  <div class="testimonial-content">
					  	<div class="testimonial-content-in">
						  <div class="img">
						  <img class="img-responsive img-circle" src="assets/images/team/avatar-4.jpg" alt="avatar-4"/>
						  </div>
							<h5>Melina Walber</h5>
							<h6>manager@chaos.io</h6>
							<p>Mauris aliquam risus id dui elementum accumsan. Cum sociis natoque penatibus et magnis dis parturient montes mus.</p>
						 </div>
					  </div>
				  </div>
				</div> -->
            	<!--=== Slide ===-->
				<!-- <div class="testimonial-item">
			  		<div class="col-md-12">
					  <div class="testimonial-content">
					  <div class="testimonial-content-in">
						 <div class="img"> <img class="img-responsive img-circle" src="assets/images/team/avatar-5.jpg" alt="avatar-5"/>
						 </div>
							<h5>Doris Campos</h5>
							<h6>founder@chaos.io</h6>
							<p>Mauris aliquam risus id dui elementum accumsan. Cum sociis natoque penatibus et magnis dis parturient montes mus.</p>
						 </div>
					  </div>
					</div>
				</div>
              -->

				<!--=== Slide ===-->
				<!-- <div class="testimonial-item">
			  		<div class="col-md-12">
					  <div class="testimonial-content">
					  	<div class="testimonial-content-in">
						 <div class="img"> <img class="img-responsive img-circle" src="assets/images/team/avatar-6.jpg" alt="avatar-6"/>
						 </div>
							<h5>Melina Walber</h5>
							<h6>manager@chaos.io</h6>
							<p>Mauris aliquam risus id dui elementum accumsan. Cum sociis natoque penatibus et magnis dis parturient montes mus.</p>
						 </div>
					  </div>
				  </div>
				</div> -->
            	<!--=== Slide ===-->
				<!-- <div class="testimonial-item">
			  		<div class="col-md-12">
					  <div class="testimonial-content">
					  <div class="testimonial-content-in">
						  <div class="img"><img class="img-responsive img-circle" src="assets/images/team/avatar-1.jpg" alt="avatar-1"/>
						  </div>
							<h5>Doris Campos</h5>
							<h6>founder@chaos.io</h6>
							<p>Mauris aliquam risus id dui elementum accumsan. Cum sociis natoque penatibus et magnis dis parturient montes mus.</p>
						 </div>
					  </div>
					</div>
				</div>

          </div>

      </div>
    </div>
  </section> -->
  <!--=== Testimonails End ===-->

  <!--=== Blogs Start ===-->
  <!-- <section class="pb-0">
    <div class="polygon-box shapes" data-opacity="0.2"></div>
  	<div class="circle-box shapes" data-opacity="0.2"></div>
    <div class="container">
      <div class="row">
  			<div class="col-md-12 heading-style-two text-center">
  				<h2 class="font-700"><span>Our Blogs</span></h2>
  			</div>
  		</div>
      <div class="row mt-50">
        <div class="col-md-4">
          <div class="post">
            <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-01.jpg" alt=""/> </div>
            <div class="post-info">
              <h3><a href="blog-grid.html">Kobe Steel plant that supplied plane
			  components being checked</a></h3>
              <h6 class="purple-color">News</h6>
              <p>7 hours ago</p>
              <a class="readmore" href="#"><span>Read More <i class="eicon mdi mdi-arrow-right"></i></span></a> </div>
          </div>
        </div> -->
        <!--=== Post End ===-->

        <!-- <div class="col-md-4">
          <div class="post">
            <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-02.jpg" alt=""/> </div>
            <div class="post-info">
              <h3><a href="blog-grid.html">They say that a picture is worth a
			  thousand words</a></h3>
              <h6 class="pink-color">Events</h6>
              <p>Yesterday</p>
              <a class="readmore" href="#"><span>Read More <i class="eicon mdi mdi-arrow-right"></i></span></a> </div>
          </div>
        </div> -->
        <!--=== Post End ===-->

        <!-- <div class="col-md-4">
          <div class="post">
            <div class="post-img"> <img class="img-responsive" src="assets/images/post/post-03.jpg" alt=""/> </div>
            <div class="post-info">
              <h3><a href="blog-grid.html">NewsBike | NY News Satire, Parody
			  and Spoof News</a></h3>
              <h6 class="blue-color">Blog</h6>
              <p>December 21, 2017</p>
              <a class="readmore" href="#"><span>Read More <i class="eicon mdi mdi-arrow-right"></i></span></a> </div>
          </div>
        </div> -->
        <!--=== Post End ===-->

      <!-- </div>
    </div>
  </section> -->
  <!--=== Blogs End ===-->

  <!--=== Footer Start ===-->
  <footer class="footer">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-links">
              <h5 class="widget-title">Tentang Kami</h5>
              <div class="footer-about">
              	<p>Beasiswa Mahaghora adalah bagian dari salah satu Corporate Social Responsibility (CSR) PT. Mahaghora yang memberikan kesempatan kepada putra-putri Indonesia untuk melanjutkan pendidikannya hingga ke bangku Universitas. PT. Mahaghora sendiri merupakan salah satu induk perusahaan yang berada di Indonesia dengan jangkauan multinasional.
                </p>
              	<ul class="social-media">
				  <!-- <li><a href="#" class="mdi mdi-facebook"></a></li>
				  <li><a href="#" class="mdi mdi-twitter"></a></li>
				  <li><a href="#" class="mdi mdi-pinterest"></a></li>
				  <li><a href="#" class="mdi mdi-dribbble"></a></li> -->
				</ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-2">
            <!-- <div class="widget widget-links">
              <h5 class="widget-title">Quick Links</h5>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div> -->
          </div>
          <div class="col-sm-6 col-md-4">
            <!-- <div class="widget widget-links">
              <h5 class="widget-title">Recent Post</h5>
              <div class="row post-sm-content">
              	<div class="col-md-3 col-sm-3 col-xs-3"><img class="img-overlay img-circle" src="assets/images/post/post-img-sm.jpg" alt=""/></div>
              	<div class="col-md-9 col-sm-9 col-xs-9">
              		<h6>Ut venenatis, Commodo ligula</h6>
              		<p>Lorem ipsum dolor sit amet, adipiscing elit...</p>
              	</div>
              </div>
              <div class="row post-sm-content mt-20">
              	<div class="col-md-3 col-sm-3 col-xs-3"><img class="img-overlay img-circle" src="assets/images/post/post-img-sm-2.jpg" alt=""/></div>
              	<div class="col-md-9 col-sm-9 col-xs-9">
              		<h6>Ut venenatis, Commodo ligula</h6>
              		<p>Lorem ipsum dolor sit amet, adipiscing elit...</p>
              	</div>
              </div>
            </div> -->
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-text">
              <h5 class="widget-title">Kontak Kami</h5>
              <ul class="footer-contact">
              	<li><i class="mdi mdi-map-marker"></i> <p>Jl. Kenjeran 546, Surabaya, Jawa Timur, Indonesia</p></li>
                <li><i class="mdi mdi-email"></i> <p><a href="mail:info@beasiswamahaghora.com">beasiswamahaghora@gmail.com</a></p></li>
                <li><i class="mdi mdi-whatsapp"></i> <p>+62 812-8881-1546 (Chat Only, No Call)</p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
       <div class="row">
        	<div class="col-md-2 col-md-offset-5">
        		<div class="logo-footer"><a href="/"><img class="img-responsive" src="{{ asset('assets-landing/images/logo-black.png') }}" alt="bmhg-logo"/></a></div>
        	</div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copy-right">©  2023 Beasiswa Mahaghora Websites by<span class="pink-color"><a target="_blank" href="https://www.linkedin.com/in/ferdiannovendra/"> Ferdian Novendra</a></span></div>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!--=== Footer End ===-->

</div>
<!--=== Wrapper End ===-->

<!--=== Javascript Plugins ===-->
<script src="{{ asset('assets-landing/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets-landing/js/smoothscroll.js') }}"></script>
<script src="{{ asset('assets-landing/js/plugins.js') }}"></script>
<script src="{{ asset('assets-landing/js/master.js') }}"></script>
<!--=== Javascript Plugins End ===-->

</body>
</html>
