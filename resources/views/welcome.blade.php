<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Pengobatan Alternatif</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/tampilan-home/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/tampilan-home/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/tampilan-home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tampilan-home/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tampilan-home/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tampilan-home/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/tampilan-home/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/tampilan-home/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('/tampilan-home/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/tampilan-home/assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">Bekam@gmail.com</a>
        <i class="icofont-phone phone-icon"></i> +no telp
      </div>
      <div class="social-links">

        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>

      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}">
            <img src="{{ asset('/tampilan-home/argon/assets/img/brand/') }}" class="navbar-brand-img" alt=><span>Pengobatan Alternatif</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>


          {{-- <li><a href="#services">S</a></li> --}}
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#team">Terapis</a></li>
          <!--<li class="drop-down">
              <a href="">Daftar</a>
          </li>-->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('/tampilan-home/assets/img/slide/bekam.png') }} " alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"> <br><span>Sistem Informasi Pengobatan Alternatif</span></h2>
                <p class="animated fadeInUp"></p>

              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/ " alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                {{-- <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}

              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/ " alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                {{-- <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> --}}

              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            {{-- <h2>Eum ipsam laborum deleniti velitena</h2>
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3> --}}
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->






    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
          <h2>Galeri</h2>
          <tbody>
		  </tbody>
      </div>
    </section>

                {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}


    <!-- Mitra Section -->
    <section class="content">
        <div class="container">
            <div class="section-title">
                <h2>Mitra Pengobatan Alternatif</h2>
            </div>
            <div class="row">
                @foreach($mitra as $mitra)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CV Maher Purwa Jaya</h5>
                        <p class="card-text">
                            <table>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td>0987654321</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Indramayu</td>
                                </tr>
                            </table>
                        </p>
                        <a href="#" class="btn btn-primary">Hubungi</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title">
            <h2>Terapis Pengobatan Alternatif</h2>
            <h5>Terapis dari beberapa Mitra kami</h5>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="member d-flex">
                <div class="pic"><img src="assets/img/team/" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Muhammad Amin Mughni</h4>
                    <span>Terapis Purwa Jaya</span>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="member d-flex">
                <div class="pic"><img src="assets/img/team/" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Syamsuri</h4>
                    <span>Terapis Purwa Jaya</span>
                </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="member d-flex">
                <div class="pic"><img src="assets/img/team/" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Nashori</h4>
                    <span>Terapis Purwa Jaya</span>
                </div>
                </div>
            </div>
        </div>
      </div>
    </section><!-- End Team Section -->






      {{-- <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> --}}

      <div class="container">



        {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form> --}}

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

    <div class="container">
      <div class="copyright">
        &copy; 2020 Sistem Informasi Pengobatan Alternatif <strong><span>Indramayu</span></strong>.
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/tampilan-home/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/tampilan-home/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('/tampilan-home/assets/js/main.js') }}"></script>

</body>

</html>
