<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $article->title }}</title>
  <meta name="description" content="Beasiswa Mahaghora" />
  <meta name="keywords" content="Beasiswa Mahaghora" />
  <link rel="shortcut icon" href="{{ asset('assets-landing/images/logo-white.png') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/css/master.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/css/responsive.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">
  
</head>

<body>
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
        <li><a href="{{ route('login') }}">MASUK</a></li>
</nav>
<!--=== Header End ===-->
  <!--=== Counter Start ===-->
  <section class="parallax-bg fixed-bg pt-100 pb-100" data-stellar-background-ratio="0.01" style="background-image: url({{ asset('assets-landing/images/slides/pp.jpg')}}); height:400px;">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <br>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <br>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <br>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="counter-wrap">
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Counter End ===-->

  <!--=== Main Article Start ===-->
  <section class="article-section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-bottom: 100px;">
                <div class="article-content">
                    <!-- Tambahkan ikon tanggal di sini -->
                    <div class="article-meta" style="margin-bottom: 10px;">
                        <i class="fa fa-calendar" style="color: #19438d; margin-right: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                          <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                        </svg></i>
                        <span style="font-size: 14px; color: #555;">{{ $article->created_at->format('d M Y') }}</span>
                    </div>
                    <h1><strong style="color: #19438d">{{ $article->title }}</strong></h1>
                    <p>{!! $article->content !!}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar-style">
                    <!-- Sidebar About -->
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15">
                            <h3>Beasiswa Mahaghora</h3><br><p>__________________________________________</p>
                        </div>
                        <p>
                          Beasiswa Mahaghora adalah program beasiswa yang diselenggarakan oleh Mahaghora Foundation, sebuah yayasan yang berada di bawah naungan PT Mahaghora, grup perusahaan yang berbasis di Surabaya, Indonesia. Beasiswa ini bertujuan untuk memberikan kesempatan pendidikan kepada siswa-siswi berprestasi yang memiliki keterbatasan ekonomi agar dapat melanjutkan pendidikan ke jenjang perguruan tinggi.
                        </p>
                        <img src="{{ asset('assets-landing/images/slides/team.png') }}" alt="Beasiswa Mahaghora" width="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!--=== Main Article End ===-->

  <!--=== Footer Start ===--> `
  <footer class="footer">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-links">
              <h5 class="widget-title">Tentang Kami</h5>
              <div class="footer-about">
                <p>Beasiswa Mahaghora adalah bagian dari salah satu Corporate Social Responsibility (CSR) PT. Mahaghora yang memberikan kesempatan kepada putra-putri Indonesia untuk melanjutkan pendidikannya hingga ke bangku Universitas. PT. Mahaghora sendiri merupakan salah satu induk perusahaan yang berada di Indonesia dengan jangkauan multinasional.</p>
                <ul class="social-media">
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-2"></div>
          <div class="col-sm-6 col-md-4"></div>
          <div class="col-sm-6 col-md-3">
            <div class="widget widget-text">
              <h5 class="widget-title">Kontak Kami</h5>
              <ul class="footer-contact">
                <li><i class="mdi mdi-map-marker"></i>
                  <p>Jl. Kenjeran 546, Surabaya, Jawa Timur, Indonesia</p>
                </li>
                <li><i class="mdi mdi-email"></i>
                  <p><a href="mail:info@beasiswamahaghora.com">beasiswamahaghora@gmail.com</a></p>
                </li>
                <li><i class="mdi mdi-whatsapp"></i>
                  <p>+62 812-8881-1546 (Chat Only, No Call)</p>
                </li>
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
            <div class="logo-footer"><a href="/"><img class="img-responsive" src="{{ asset('assets-landing/images/logo-black.png') }}" alt="bmhg-logo" /></a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copy-right">© 2023 Beasiswa Mahaghora Websites by<span class="pink-color"><a target="_blank" href="https://www.linkedin.com/in/ferdiannovendra/"> Ferdian Novendra</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=== Footer End ===-->
  
  <!--=== Javascript Plugins ===-->
  <script src="{{ asset('assets-landing/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-landing/js/smoothscroll.js') }}"></script>
  <script src="{{ asset('assets-landing/js/plugins.js') }}"></script>
  <script src="{{ asset('assets-landing/js/master.js') }}"></script>
  <!--=== Javascript Plugins End ===-->

</body>

</html>