<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('uploads/logo/favicon.png')}}">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="{{asset('html/css/bootstrap.min.css')}}">
      <!-- Simplebar -->
      <link rel="stylesheet" href="{{asset('html/css/simplebar.min.css')}}">
      <!-- Rev-slider -->
      <link rel="stylesheet" href="{{asset('html/rev/css/rs6.css')}}">
      <link rel="stylesheet" href="{{asset('html/rev/fonts/font-awesome/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{asset('html/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
      <link rel="stylesheet" href="{{asset('html/rev/fonts/pe-icon-7-stroke/css/helper.css')}}">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('html/css/owl.carousel.min.css')}}">
      <!-- Aimation -->
      <link rel="stylesheet" href="{{asset('html/css/animations.min.css')}}">
      <!-- Icons -->
      <link rel="stylesheet" href="{{asset('html/fonts/font-awesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('html/css/ionicons.min.css')}}">
      <link rel="stylesheet" href="{{asset('html/fonts/themify-icons/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('html/fonts/flaticon/flaticon.css')}}">
      <!-- Magnefic Popup -->
      <link rel="stylesheet" href="{{asset('html/css/magnific-popup.min.css')}}">
      <!-- Style -->
      <link rel="stylesheet" href="{{asset('html/css/style.css')}}">
      <!-- Responsive -->
      <link rel="stylesheet" href="{{asset('html/css/responsive.css')}}">


      @foreach ($Categories as $Product)
      {{-- SEO SKELETON STRUCTURE --}}
      <title>{{$Product->title}} - Decomagna Kenya </title>
      <meta name="robots" content="index,follow">
      <meta name="googlebot" content="index,follow">
      <!-- Google Specific -->
      <meta name="subject"
         content="{{$Product->title}} - Decomagna- Kenya ">
      <meta name="rating" content="General">
      <meta name="google-site-verification" value="" content="verification_token">
      <meta name="referrer" content="no-referrer">
      {{-- OG --}}
      <meta property="og:url" content="{{url('/')}}/product/{{$Product->slung}}">
      <meta property="og:type" content="website">
      <meta property="og:title"
         content="{{$Product->title}} - Decomagna- Kenya ">
      <meta property="og:image" content="{{url('/')}}/uploads/categories/{{$Product->image}}">
      <meta property="og:description"
         content="{{$Product->meta}}">
      <meta property="og:site_name" content="DecoMagna">
      <meta property="og:locale" content="en_US">
      {{-- Twitter --}}
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@Decomagna_Kenya">
      <meta name="twitter:url" content="{{url('/')}}/product/{{$Product->slung}}">
      <meta name="twitter:title"
         content="{{$Product->title}} - Decomagna- Kenya ">
      <meta name="twitter:description"
         content="{{$Product->meta}}">
      <meta name="twitter:image" content="{{url('/')}}/uploads/categories/{{$Product->image}}">
      @endforeach
      {{-- SEO --}}
      <!-- Google tag (gtag.js) --> 
      @include('front.google-tags')
    <style>
        .whatsapp-float {
        position: fixed;
        bottom: 100px;
        right: 20px;
        z-index: 1000;
        cursor: pointer;
        }

        .whatsapp-float img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
        
        /* Header Logo Improvements - Make it Stand Out */
        .navbar-brand {
            position: relative;
            z-index: 10;
            padding: 8px 15px !important;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.98) 100%);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(28, 24, 108, 0.15), 0 0 0 1px rgba(28, 24, 108, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-right: 30px !important;
        }
        
        .navbar-brand::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #1c186c, #2a2478, #1c186c);
            border-radius: 12px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .navbar-brand:hover::before {
            opacity: 0.1;
        }
        
        .navbar-brand img.logo {
            max-height: 60px !important;
            height: auto;
            width: auto;
            filter: drop-shadow(0 2px 8px rgba(28, 24, 108, 0.2));
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: block;
        }
        
        .navbar-brand:hover img.logo {
            transform: scale(1.08) translateY(-2px);
            filter: drop-shadow(0 4px 12px rgba(28, 24, 108, 0.3));
        }
        
        /* Top Header Background */
        .pq-top-header {
            background: linear-gradient(135deg, #1c186c 0%, #2a2478 100%) !important;
            padding: 3px 15px 3px 15px !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 0 !important;
        }
        
        #pq-header {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        .pq-header-diff-block {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        .pq-top-header .container-fluid {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        
        .pq-top-header .row {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            align-items: center;
        }
        
        .pq-top-header .pq-header-time,
        .pq-top-header .pq-header-contact {
            color: #fff;
        }
        
        .pq-top-header .pq-header-time span,
        .pq-top-header .pq-header-contact a {
            color: #fff !important;
        }
        
        .pq-top-header .pq-header-time i,
        .pq-top-header .pq-header-contact i {
            color: #fff !important;
        }
        
        .pq-top-right,
        .pq-header-contact {
            padding: 4px 0;
            display: flex;
            align-items: center;
        }
        
        .pq-header-social {
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .pq-header-social ul {
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
            padding-bottom: 0;
            align-items: center;
        }
        
        /* Social Media Icons - Make them Interesting */
        .pq-header-social ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .pq-header-social li {
            margin: 0;
            padding: 0;
        }
        
        .pq-header-social li a {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 0 !important;
            margin: 0 !important;
        }
        
        .pq-header-social li a::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }
        
        .pq-header-social li a:hover::before {
            width: 100%;
            height: 100%;
        }
        
        .pq-header-social li a i {
            font-size: 16px;
            color: #fff;
            position: relative;
            z-index: 2;
            transition: all 0.4s ease;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1 !important;
        }
        
        /* Facebook - Blue */
        .pq-header-social li:nth-child(1) a {
            background: linear-gradient(135deg, rgba(24, 119, 242, 0.2), rgba(24, 119, 242, 0.3));
            border-color: rgba(24, 119, 242, 0.4);
        }
        
        .pq-header-social li:nth-child(1) a:hover {
            background: linear-gradient(135deg, #1877f2, #0d66d0);
            transform: translateY(-4px) scale(1.1);
            box-shadow: 0 6px 20px rgba(24, 119, 242, 0.4);
        }
        
        /* Instagram - Gradient */
        .pq-header-social li:nth-child(2) a {
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.2), rgba(131, 58, 180, 0.3));
            border-color: rgba(225, 48, 108, 0.4);
        }
        
        .pq-header-social li:nth-child(2) a:hover {
            background: linear-gradient(135deg, #e1306c, #833ab4, #fd1d1d, #fcb045);
            transform: translateY(-4px) scale(1.1) rotate(5deg);
            box-shadow: 0 6px 20px rgba(225, 48, 108, 0.4);
        }
        
        /* Twitter - Blue */
        .pq-header-social li:nth-child(3) a {
            background: linear-gradient(135deg, rgba(29, 161, 242, 0.2), rgba(29, 161, 242, 0.3));
            border-color: rgba(29, 161, 242, 0.4);
        }
        
        .pq-header-social li:nth-child(3) a:hover {
            background: linear-gradient(135deg, #1da1f2, #0d8bd9);
            transform: translateY(-4px) scale(1.1);
            box-shadow: 0 6px 20px rgba(29, 161, 242, 0.4);
        }
        
        /* Map Marker - Red */
        .pq-header-social li:nth-child(4) a {
            background: linear-gradient(135deg, rgba(220, 53, 69, 0.2), rgba(220, 53, 69, 0.3));
            border-color: rgba(220, 53, 69, 0.4);
        }
        
        .pq-header-social li:nth-child(4) a:hover {
            background: linear-gradient(135deg, #dc3545, #c82333);
            transform: translateY(-4px) scale(1.1);
            box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
        }
        
        .pq-header-social li a:hover i {
            transform: scale(1.2) rotate(360deg);
            color: #fff;
        }
        
        /* Animation for social icons on load */
        @keyframes socialIconPop {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .pq-header-social li a {
            animation: socialIconPop 0.5s ease-out backwards;
        }
        
        .pq-header-social li:nth-child(1) a {
            animation-delay: 0.1s;
        }
        
        .pq-header-social li:nth-child(2) a {
            animation-delay: 0.2s;
        }
        
        .pq-header-social li:nth-child(3) a {
            animation-delay: 0.3s;
        }
        
        .pq-header-social li:nth-child(4) a {
            animation-delay: 0.4s;
        }
        
        /* Mobile Responsive */
        @media (max-width: 991px) {
            .navbar-brand {
                padding: 6px 12px !important;
                margin-right: 15px !important;
            }
            
            .navbar-brand img.logo {
                max-height: 45px !important;
            }
            
            .pq-header-social li a {
                width: 35px;
                height: 35px;
            }
            
            .pq-header-social li a i {
                font-size: 14px;
            }
        }
        
        @media (max-width: 767px) {
            .pq-top-header {
                padding: 2px 12px 2px 12px !important;
            }
            
            /* Mobile Logo Improvements - Make it Stand Out */
            .navbar-brand {
                padding: 6px 10px !important;
                margin-right: auto !important;
                margin-left: 0 !important;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(255, 255, 255, 1) 100%) !important;
                box-shadow: 0 4px 20px rgba(28, 24, 108, 0.2), 0 0 0 2px rgba(28, 24, 108, 0.15) !important;
                border-radius: 8px !important;
                flex: 0 0 auto;
            }
            
            .navbar-brand img.logo {
                max-height: 40px !important;
                width: auto !important;
                filter: drop-shadow(0 3px 10px rgba(28, 24, 108, 0.25)) !important;
            }
            
            .navbar-brand:hover img.logo {
                transform: scale(1.05) translateY(-1px) !important;
                filter: drop-shadow(0 4px 15px rgba(28, 24, 108, 0.35)) !important;
            }
            
            /* Mobile Burger Menu Improvements */
            .navbar-toggler {
                border: 2px solid #1c186c !important;
                padding: 8px 12px !important;
                border-radius: 6px !important;
                background: #fff !important;
                box-shadow: 0 2px 8px rgba(28, 24, 108, 0.15) !important;
                transition: all 0.3s ease !important;
                order: 2;
                margin-left: auto;
            }
            
            .navbar-toggler:focus {
                outline: none !important;
                box-shadow: 0 2px 8px rgba(28, 24, 108, 0.15), 0 0 0 3px rgba(28, 24, 108, 0.1) !important;
            }
            
            .navbar-toggler:hover {
                background: #1c186c !important;
                border-color: #1c186c !important;
                transform: scale(1.05);
                box-shadow: 0 4px 12px rgba(28, 24, 108, 0.25) !important;
            }
            
            .navbar-toggler[aria-expanded="true"] {
                background: #1c186c !important;
                border-color: #1c186c !important;
            }
            
            .navbar-toggler i {
                color: #1c186c !important;
                font-size: 20px !important;
                transition: all 0.3s ease !important;
                display: block;
            }
            
            .navbar-toggler:hover i,
            .navbar-toggler[aria-expanded="true"] i {
                color: #fff !important;
                transform: rotate(90deg);
            }
            
            /* Mobile Navigation Container */
            .navbar {
                padding: 8px 12px !important;
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                min-height: auto;
            }
            
            .pq-bottom-header {
                padding: 6px 0 !important;
            }
            
            .pq-header-social {
                margin-top: 6px;
            }
            
            .pq-header-social ul {
                justify-content: center;
            }
            
            /* Mobile Menu Dropdown */
            .navbar-collapse {
                margin-top: 12px;
                border-top: 1px solid #e9ecef;
                padding-top: 12px;
            }
            
            #pq-main-menu {
                padding: 0;
            }
            
            #pq-main-menu .menu-item a {
                padding: 10px 18px !important;
                border-radius: 6px !important;
                margin-bottom: 3px;
            }
            
            #pq-main-menu .menu-item a.active {
                background: rgba(28, 24, 108, 0.15) !important;
                border-left: 3px solid #1c186c;
            }
            
            #pq-main-menu .menu-item a.active::after {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .pq-top-header {
                padding: 2px 10px 2px 10px !important;
            }
            
            .navbar-brand {
                padding: 5px 8px !important;
            }
            
            .navbar-brand img.logo {
                max-height: 35px !important;
            }
            
            .navbar-toggler {
                padding: 6px 10px !important;
            }
            
            .navbar-toggler i {
                font-size: 18px !important;
            }
            
            .pq-bottom-header {
                padding: 5px 0 !important;
            }
            
            .navbar {
                padding: 6px 10px !important;
            }
        }
        
        /* Active Menu Item Styling */
        #pq-main-menu .menu-item a.active {
            color: #1c186c !important;
            background: rgba(28, 24, 108, 0.1) !important;
            font-weight: 600 !important;
            position: relative;
        }
        
        #pq-main-menu .menu-item a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 2px;
            background: #1c186c;
            border-radius: 2px;
        }
        
        #pq-main-menu .menu-item a.navbar-link.active .span {
            color: #1c186c !important;
            font-weight: 600 !important;
        }
        
        #pq-main-menu .menu-item a.active:hover {
            color: #1c186c !important;
            background: rgba(28, 24, 108, 0.15) !important;
        }
    </style>

   </head>
   <body>
      <!-- Loading -->
      <div id="pq-loading" style="display: none">
         <div id="pq-loading-center">
            <img src="{{asset('uploads/logo/logo-clean.png')}}" alt="Loading">
         </div>
      </div>
      <!-- Loading -->
      <!-- Header -->
      <div class="pq-background-overlay"></div>
      <div class="pq-sidebar">
         <div class="pq-close-btn">
            <a class="pq-close" href="javascript:void(0)">
            <i class="ion-close-round"></i>
            </a>
         </div>
         @include('front.sidebar')
      </div>
      <header id="pq-header" class="pq-header-style-1  pq-has-sticky">
         <div class="pq-header-diff-block">
            <div class="row g-0">
               <div class="col-lg-12">
                  <div class="pq-top-header  top-style-1">
                     <div class="container-fluid p-0">
                        <div class="row flex-row-reverse">
                           <div class="col-md-6 text-right">
                              <div class="pq-top-right text-right ">
                                 <div class="pq-header-time ">
                                    <ul>
                                       <li>
                                          <i class="ti-timer"></i>
                                          <span>Mon to Fri 8:30 am to 5:00pm</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="pq-header-social">
                                    <ul>
                                       <li><a href="https://www.facebook.com/decomagnaDev/"><i class="fab fa-facebook-f"></i></a></li>
                                       <li><a href="https://www.instagram.com/decomagna_kenya/"><i class="fab fa-instagram"></i></a></li>
                                       <li><a href="https://www.instagram.com/decomagna_kenya/"><i class="fab fa-twitter"></i></a></li>
                                       <li><a href="https://goo.gl/maps/njDLRodCvupea21D9"><i class="fa fa-map-marker"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="pq-header-contact ">
                                 <ul>
                                    <li>
                                       <a href="tel:+254796110511"><i class="fas fa-phone-alt"></i>
                                       <span> +254 79 611 0511</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="mailto:info@decomagna.com"><i
                                          class="fas fa-envelope"></i><span>info@decomagna.com</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="pq-bottom-header">
                     <div class="row no-gutters">
                        <div class="col-lg-12">
                           <nav class="navbar navbar-expand-lg navbar-light">
                              <a class="navbar-brand" href="{{url('/')}}">
                              <img class="img-fluid logo"
                                 src="{{url('/')}}/uploads/logo/decomagna-Logos-Trans-14.jpg"
                                 alt="Decomagna Logo">
                              </a>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                 <div id="pq-menu-contain" class="pq-menu-contain">
                                    @include('front.menu')
                                 </div>
                              </div>
                              <div class="pq-menu-search-block">
                                 <a href="javascript:void(0)" class="pq-tools-serach-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvassearch"><i class="ti-search"></i></a>
                                 <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvassearch" aria-hidden="true">
                                    @include('front.search-form')
                                 </div>
                              </div>
                              <div class="pq-toggle-btn">
                                 <a href="javascript:void(0)" class="menu-toggle">
                                 <span>menu</span>
                                 </a>
                              </div>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                 aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fas fa-bars"></i>
                              </button>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header -->
      @yield('content')
      <!-- Footer -->
      @include('front.footer')
      <!-- Footer -->
      <!-- Back To Top -->
      <div id="back-to-top" class="active">
         <a class="top" id="top" href="#top">
         <i class="ion-ios-arrow-up"></i>
         </a>
      </div>
      <!-- Back To Top -->
      <!-- Jquery -->
      <script src="{{asset('html/js/jquery.min.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset('html/js/bootstrap.min.js')}}"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('html/js/owl.carousel.min.js')}}"></script>
      <!-- Isotope -->
      <script src="{{asset('html/js/isotope.pkgd.min.js')}}"></script>
      <!-- Counter -->
      <script src="{{asset('html/js/jquery.countTo.min.js')}}"></script>
      <!-- Wow -->
      <script src="{{asset('html/js/wow.min.js')}}"></script>
      <!-- Magnefic Popup -->
      <script src="{{asset('html/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Revslider -->
      <script src="{{asset('html/rev/js/rbtools.min.js')}}"></script>
      <script src="{{asset('html/rev/js/rs6.min.js')}}"></script>
      <script src="{{asset('html/js/rev-custom.js')}}"></script>
      <!-- Simplebar -->
      <script src="{{asset('html/js/simplebar.min.js')}}"></script>
      <!-- Custom -->
      <script src="{{asset('html/js/load-more.js')}}"></script>
      <!-- Custom -->
      <script src="{{asset('html/js/custom.js')}}"></script>
      @include('front.schema')
   </body>
</html>
