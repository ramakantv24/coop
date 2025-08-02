<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="Sign Up today and experience comprehensive range of services, including credit reports, loan insurance, and online education, designed to equip you with the knowledge and protection you need to thrive in today's dynamic world." name="description">
  <meta content="" name="keywords">

  <link rel="apple-touch-icon" href="{{ asset('public/frontend/assets/img/apple-touch-icon.png') }}" />
  <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/assets/img/apple-touch-icon.png') }}" />
  <link rel="icon" type="image/x-icon" href="{{ asset('public/frontend/assets/img/apple-touch-icon.png') }}" />
  <!-- Favicons -->
  <!-- <link href="{{ asset('public/frontend/assets/img/favicon.png') }}" rel="icon"> -->
  <!-- <link href="{{ asset('public/frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">

  <!--  Main CSS File -->

  <link href="{{ asset('public/frontend/assets/css/style.css') }}" rel="stylesheet">



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
</head>


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo"><img src="{{ asset('public/frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/about-us') }}">About</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Coop Education</a></li> -->
          <!-- <li class="dropdown"><a href=" {{ url('/services') }} "><span>Services</span><i class="bi bi-chevron-down"></i></a> -->
          <li class="dropdown"><a href="  "><span>Services</span><i class="bi bi-chevron-down"></i></a>
            <ul>
            @if (Auth::user())
              <li><a href="{{ url('/customer/credit-report') }}">Credit Report</a></li>
            @else
                <li><a href="{{ url('/credit-report') }}">Credit Report</a></li>
            @endif
              
              <li><a href="{{ url('/education') }}">Coop Education </a></li>
              <li><a href="{{ url('/insurance') }}">Coop Insurance </a></li>
              <!--<li><a href="{{ url('/course') }}">Coop Courses</a></li>-->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url('/contact-us') }}">Contact</a></li>
          @guest
          @if (Route::has('login'))
          <li>
            <a class="getstarted scrollto" href="{{url('/login')}}"><button type="button" class="btn  log-in m-0">Login</button></a>
          </li>
          @endif

          @else
          <li><a class="getstarted scrollto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <button type="button" class="btn  log-in m-0">{{ __('Logout') }}</button></a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>

          @endguest
          <li>
            <a class="getstarted scrollto" href="https://coopindia.org/customer/dashboard"><button type="button" class="btnlog-in m-0 dasb-btn"> <i class='bx bxs-dashboard'></i> Dashboard</button></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.html" class="logo"><img src="{{ asset('public/frontend/assets/img/logo.png') }}" width="90" alt="" class="img-fluid"></a>
            <p class="mt-4">
              Let's join hands and build a better world together<br>
              <br>
              <strong>Phone:</strong> +91 94916 94926<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +91 99644 03666 <br>
              <strong>Email:</strong> thecooperativestrust@gmail.com <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about-us') }}">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/terms-of-service') }}">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/refund-policy') }}">Refund policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/privacy-policy') }}">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/risk-policy') }}">Risk policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            @if (Auth::user())
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/customer/credit-report') }}">Credit Report</a></li>
            @else
                <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/credit-report') }}">Credit Report</a></li>
            @endif
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/insurance') }}">Coop Insurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/education') }}">Coop Education</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/course') }}">Coop Courses</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Secure with </h4>
            <!-- <div class="contact-txt">
              <p>
                Let's join hands and build a better world together!
              </p>
              <p>
                +91 94916 94926
              </p>
              <p>
                +91 99644 03666
              </p>
              <p>
                Email: thecooperativestrust@gmail.com
              </p>
            </div> -->

            <div class="social-links text-center text-md-right pt-3 pt-md-0 mt-5">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>

      </div>
    </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>COOP</span></strong>. All Rights Reserved
        </div>
      </div>

      <div class="text">
        <p>Coop Services (Formerly Managed By Maitri India Corporation) with a GST No.29BFROPR5804K1ZQ</p>
      </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

<!-- <script src="{{ asset('public/frontend/js/bootstrap.bundle.min.js') }}" defer></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>

<script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('public/frontend/assets/js/slider.js') }}"></script>

<script>
  const cards = document.querySelectorAll(".card");

  cards.forEach((card) => {
    const dynamicData = card.querySelector(".disc");
    const words = dynamicData.innerText.split(" ");
    const maxWords = 35; // set the maximum number of words you want to show

    if (words.length > maxWords) {
      const truncatedWords = words.slice(0, maxWords);
      dynamicData.innerText = truncatedWords.join(" ") + " ..."; // add an ellipsis at the end
    }
  });
</script>

</html>