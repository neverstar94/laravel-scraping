<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sousapp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

<!-- Favicons -->
    <link href="{{ asset('image/favicon.png') }}" rel="icon">
    <link href="{{ asset('image/apple-touch-icon.png') }}" rel="apple-touch-icon">


<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
   
<!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>



<!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

<!-- My JS File -->
    <script src="{{ asset('js/sitelist.js') }}" defer></script>





<!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    
<!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


<!-- My Styles -->
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
<!-- Template Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
          
            <img src="{{ asset('image/brand.png') }}" class="" alt="sousapp" /><span>.</span>
          </a>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="#hero">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#menu">Menu</a></li>
              <li><a href="#events">Events</a></li>
              <li><a href="#chefs">Chefs</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav><!-- .navbar -->
    
          <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
        </div>
    </header><!-- End Header -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
          <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
              <h2 data-aos="fade-up">Enjoy Your Healthy<br>Welcome Sousapp</h2>
              <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
              <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
               
              </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
              <img src="{{ asset('image/fruit/main-image.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
          </div>
        </div>
    </section><!-- End Hero Section -->
    
    <main class="container-fluid py-4">
        @yield('content')
    </main>

    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div>
                <h4>Address</h4>
                <p>
                    A108 Adam Street <br>
                    New York, NY 535022 - US<br>
                </p>
                </div>
    
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                <h4>Reservations</h4>
                <p>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                </p>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                <h4>Opening Hours</h4>
                <p>
                    <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                    Sunday: Closed
                </p>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
    
            </div>
        </div>
    
        <div class="container">
            <div class="copyright">
            &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    
    </footer>
</body>
</html>
