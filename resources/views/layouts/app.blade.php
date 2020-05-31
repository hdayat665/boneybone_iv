
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Boneybone trial </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest" crossorigin="use-credentials">

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky sticky-bar sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{ url('assets/img/logo/logo.png')}}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('job')}}">Find a Jobs </a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Page</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                  @if (Auth::guest())
                                    <a href="register" class="btn head-btn1">Register</a>
                                    <a href="login" class="btn head-btn2">Login</a>
                                @else

                                     <a href="{{ route('logout') }}" class="btn head-btn2"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                            @endif

                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    
        @yield('content')
  <!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ url('/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ url('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ url('/assets/js/popper.min.js')}}"></script>
        <script src="{{ url('/assets/js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ url('/assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ url('/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ url('/assets/js/slick.min.js')}}"></script>
        <script src="{{ url('/assets/js/price_rangs.js')}}"></script>
        
        <!-- One Page, Animated-HeadLin -->
        <script src="{{ url('/assets/js/wow.min.js')}}"></script>
        <script src="{{ url('/assets/js/animated.headline.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{ url('/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{ url('/assets/js/contact.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.form.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{ url('/assets/js/mail-script.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="{{ url('/assets/js/plugins.js')}}"></script>
        <script src="{{ url('/assets/js/main.js')}}"></script>
        
    </body>
</html>