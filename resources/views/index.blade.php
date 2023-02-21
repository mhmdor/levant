<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Levant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">


  <!-- Favicons -->
  <link href="index/assets/img/car3.png" rel="icon">
  <link href="index/assets/img/car3.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="index/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="index/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="index/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="index/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="index/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="index/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
    
  <link rel="stylesheet" href="index/css/classic.css">
  <link rel="stylesheet" href="index/css/classic.date.css">

  


  <!-- Template Main CSS File -->
  <link href="index/assets/css/style.css" rel="stylesheet">


</head>

<body>
   <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{''}}">Levant<span>.</span></a></h1>
      


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#hero1">About</a></li>
          <li><a class="nav-link scrollto" href="#subscribe">Our Pages</a></li>
          



          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            @if (session()->has("loggedUser"))
            <li> <a href="/get-Account" class="{{Request::routeIs("get-Account") ?'activess' : ""}}">Account</a></li>
            <li> <a href="{{ route('logouts')}}" class="{{Request::routeIs("loggouts") ?'activess' : ""}}">Logout</a></li>
            @else
            <li>  <a href="{{ route('signup')}}" class="{{Request::routeIs("signup") ?'activess' : ""}}">Register</a></li>
            <li> <a href="{{ route('signin') }}" class="{{Request::routeIs("signin") ?'activess' : ""}}">Login</a></li>
            @endif

       
         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

       <a   href="{{ route('cars') }}" class="get-started-btn scrollto">Choose Your Car Now</a> 

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero">
      @if(session()->has('message'))
      <div style="height: 100px"></div>
      <div style="width: 400px" class="alert alert-danger  alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

@endif
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="" src="index/assets/img/car.png" alt="Imperial">
   <div style="height: 50px"></div>

        <h1>Welcome to Levant WebSite</h1>
        <h3>The Best Way To Rent Your Car</h3>
        <h2>We Have <span class="typed" data-typed-items="BMW, AUDI, LEXUS, FORD, NISSAN"></span></h2>
        <div class="actions">
          <a href="{{ route('cars') }}" class="btn-get-started">Choose Your Car Now</a>
          {{-- <a href="#services" class="btn-services">Our Services</a> --}}
        </div> 
        
        
            
    
          <div class="container contact-form">
          
          </div>
                
        

          
          
        
      </div>
        
        
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      

      <div class="clients-slider swiper">
        <h2 style="color: rgb(61, 61, 61)"><strong>Choose Your Favourite Brand</strong></h2>
        <div class="swiper-wrapper align-items-center">
          @foreach ($brand as $bra)
          <a class="swiper-slide" href="{{ route('category-post', [$bra->id]) }}">
            <img src="{{asset("upload/car-category")}}/{{$bra->car_image}} " class="img-fluid" alt="">
        
        </a>

          @endforeach
         
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> 
  <!-- End Clients Section -->

  <!-- ======= Hero1 Section ======= -->
  <section id="hero1" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Rent Your Car With Levant</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of car lovers in the UAE and we work to help people get thier cars</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('cars') }}" class="btn-get-started scrollto">Choose your car now</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero1-img" data-aos="fade-left" data-aos-delay="200">
          <img src="index/assets/img/Daco_5771533.png" class="img-fluid animated" alt="">
        </div>
      </div>
      
    </div>


    

  </section><!-- End Hero1 -->


  
  
  
  <main id="main">

    

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="fade-up">
        <div class="row">
          
          <div class="col-md-8">
            <h3 class="subscribe-title">Subscribe OUR Pages</h3>
            <p class="subscribe-text">The Best Way To Rent Your Car</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <div class="social-links">
              <a href="https://instagram.com/levantrenta?utm_medium=copy_link" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-snapchat"></i></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->

  

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">The Best Way To Rent Your Car</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>UAE_Dubai <br> </p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>Levantrentacar@outlook.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+971566104000</p>
              </div>

              <div>
                <i class="bi bi-telephone"></i>
                <p>566104000</p>
              </div>

            </div>
          </div>


          
       
         




          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form method="POST" action="{{ url('/add-contact') }}"  enctype="multipart/form-data" class="php-email-form1">
             @csrf
                <div class="form-group">
               
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
               
                <div class="form-group mt-3">
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="message" required></textarea>
                </div>
                <div class="my-3">
              
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>In & Out Group</strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="index/assets/vendor/aos/aos.js"></script>
  <script src="index/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="index/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="index/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="index/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="index/assets/vendor/typed.js/typed.min.js"></script>
  <script src="index/assets/vendor/php-email-form/validate.js"></script>
   
  <!-- Template Main JS File -->
  <script src="index/assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="index/js/popper.min.js"></script>
  <script src="index/js/bootstrap.min.js"></script>
  <script src="index/js/picker.js"></script>
  <script src="index/js/picker.date.js"></script>

  <script src="index/js/main.js"></script>

</body>

</html>