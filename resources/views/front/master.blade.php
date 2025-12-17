<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Favicon -->
         <!-- Favicons -->
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
      <link rel="shortcut icon" href="{{ asset('uploads/logo/favicon.png') }}">
      <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
      <meta name="theme-color" content="#ffffff">

      <!-- Preconnect for Performance (Optional but Recommended) -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

      <!-- Preload Critical CSS (If Any) -->
      <link rel="preload" href="{{ asset('html/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="{{ asset('html/css/bootstrap.min.css') }}"></noscript>

      <!-- Core Stylesheets -->
      <link rel="stylesheet" href="{{ asset('html/css/simplebar.min.css') }}">
      <link rel="stylesheet" href="{{ asset('html/rev/css/rs6.css') }}">
      <link rel="stylesheet" href="{{ asset('html/rev/fonts/font-awesome/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ asset('html/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
      <link rel="stylesheet" href="{{ asset('html/rev/fonts/pe-icon-7-stroke/css/helper.css') }}">
      <link rel="stylesheet" href="{{ asset('html/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('html/css/animations.min.css') }}">

      <!-- Icon Fonts -->
      <link rel="stylesheet" href="{{ asset('html/fonts/font-awesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('html/css/ionicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('html/fonts/themify-icons/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('html/fonts/flaticon/flaticon.css') }}">
      <link rel="canonical" href="https://decomagna.com">

      <!-- Plugins -->
      <link rel="stylesheet" href="{{ asset('html/css/magnific-popup.min.css') }}">

      <!-- Main Styles -->
      <link rel="stylesheet" href="{{ asset('html/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('html/css/responsive.css') }}">

      {{-- SEO SKELETON STRUCTURE --}}
      <title>Quick-Step Kenya - Laminate - Engineered wood - Vinyl flooring</title>
      <meta name="robots" content="index,follow">
      <meta name="googlebot" content="index,follow">
      <!-- Google Specific -->
      <meta name="subject" content="Quick-Step Kenya - Laminate - Engineered wood - Vinyl flooring">
      <meta name="description" content="Discover our stories and blog-posts. Up to date advice on flooring colors, trends and more on our blog section. Get inspired by Quick-Step® flooring designers.">
      <meta name="rating" content="General">
      <meta name="google-site-verification" value="" content="verification_token">
      <meta name="referrer" content="no-referrer">
      {{-- OG --}}
      <meta property="og:url" content="{{url('/')}}">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Quick-Step Kenya - Laminate - Engineered wood - Vinyl flooring">
      <meta property="og:image" content="{{url('/')}}/uploads/slider/download-slider-8.webp">
      <meta property="og:description" content="Discover our stories and blog-posts. Up to date advice on flooring colors, trends and more on our blog section. Get inspired by Quick-Step® flooring designers.">
      <meta property="og:site_name" content="DecoMagna">
      <meta property="og:locale" content="en_US">
      {{-- Twitter --}}
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@Decomagna_Kenya">
      <meta name="twitter:url" content="{{url('/')}}">
      <meta name="twitter:title"
         content="Quick-Step Kenya - Laminate - Engineered wood - Vinyl flooring">
      <meta name="twitter:description"
         content="Discover our stories and blog-posts. Up to date advice on flooring colors, trends and more on our blog section. Get inspired by Quick-Step® flooring designers.">
      <meta name="twitter:image" content="{{url('/')}}/uploads/slider/download-slider-8.webp">

      <meta name="google-site-verification" content="aPfWre_bGZ9l-YSyG_gYlHfEe3SHX5h3JVjqnNyD6-8" />
      {{-- SEO --}}
       <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/66224fea1ec1082f04e49347/1hrr0gc9c';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EFZD63N5XN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-EFZD63N5XN');
    </script>


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
            /* Mobile Logo Improvements - Make it Stand Out */
            .navbar-brand {
                padding: 8px 12px !important;
                margin-right: auto !important;
                margin-left: 0 !important;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.98) 0%, rgba(255, 255, 255, 1) 100%) !important;
                box-shadow: 0 4px 20px rgba(28, 24, 108, 0.2), 0 0 0 2px rgba(28, 24, 108, 0.15) !important;
                border-radius: 10px !important;
                flex: 0 0 auto;
            }
            
            .navbar-brand img.logo {
                max-height: 50px !important;
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
                padding: 10px 14px !important;
                border-radius: 8px !important;
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
                font-size: 22px !important;
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
                padding: 10px 15px !important;
                align-items: center;
                display: flex;
                flex-wrap: wrap;
            }
            
            .pq-bottom-header {
                padding: 10px 0 !important;
            }
            
            .pq-header-social {
                margin-top: 8px;
            }
            
            .pq-header-social ul {
                justify-content: center;
            }
            
            /* Mobile Menu Dropdown */
            .navbar-collapse {
                margin-top: 15px;
                border-top: 1px solid #e9ecef;
                padding-top: 15px;
            }
            
            #pq-main-menu {
                padding: 0;
            }
            
            #pq-main-menu .menu-item a {
                padding: 12px 20px !important;
                border-radius: 6px !important;
                margin-bottom: 4px;
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
            .navbar-brand {
                padding: 6px 10px !important;
            }
            
            .navbar-brand img.logo {
                max-height: 45px !important;
            }
            
            .navbar-toggler {
                padding: 8px 12px !important;
            }
            
            .navbar-toggler i {
                font-size: 20px !important;
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
      <h1 style="display: none">Quick-Step - Kenya - Laminate Flooring - Engineered wood - Vinyl flooring - made in Belgium</h1>
      <!-- Loading -->
      <div id="pq-loading" style="display: none">
         <div id="pq-loading-center" class="pq-loading-center">
            <img src="{{asset('uploads/logo/logo-clean.png')}}" alt="Loading">
            <div>
                {{-- <img src="{{asset('uploads/logo/logo-clean.png')}}" alt="Loading"> --}}
                <center>
                    <img *ngIf="loading" style="width:120px; height:120px" src="{{asset('uploads/logo/Spinner-1s-200px.gif')}}" alt="Decomagna loading" />
                </center>
            </div>
         </div>
      </div>
      <!-- Loading -->
      <!-- Header -->
      <div class="pq-background-overlay"></div>
      <div class="pq-sidebar">
         <div class="pq-close-btn">
            <button class="pq-close" type="button">
            <i class="ion-close-round"></i>
            </button>
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
                                      <li><a href="https://www.facebook.com/decomagnaDev/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                       <li><a href="https://www.instagram.com/decomagna_kenya/" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                       <li><a href="https://twitter.com/decomagna_kenya" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                       <li><a href="https://goo.gl/maps/njDLRodCvupea21D9" aria-label="Our Location on Google Maps"><i class="fa fa-map-marker"></i></a></li>

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
                                 src="{{url('/')}}/uploads/logo/logo-clean.png"
                                 alt="Decomagna Logo">
                              </a>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                 <div id="pq-menu-contain" class="pq-menu-contain">
                                    @include('front.menu')
                                 </div>
                              </div>
                              <div class="pq-menu-search-block">
                                 <button type="button" class="pq-tools-serach-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvassearch">
                                    <i class="ti-search"></i></button>
                                 <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvassearch">
                                    @include('front.search-form')
                                 </div>
                              </div>
                              {{-- <div class="pq-toggle-btn">
                                 <button type="button" class="menu-toggle">
                                 <span>menu</span>
                                 </button>
                              </div> --}}
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
<!-- Core Libraries -->
      <script src="{{ asset('html/js/jquery.min.js') }}" defer></script>
      <script src="{{ asset('html/js/bootstrap.min.js') }}" defer></script>

      <!-- Plugins -->
      <script src="{{ asset('html/js/owl.carousel.min.js') }}" defer></script>
      <script src="{{ asset('html/js/isotope.pkgd.min.js') }}" defer></script>
      <script src="{{ asset('html/js/jquery.countTo.min.js') }}" defer></script>
      <script src="{{ asset('html/js/wow.min.js') }}" defer></script>
      <script src="{{ asset('html/js/jquery.magnific-popup.min.js') }}" defer></script>
      <script src="{{ asset('html/js/simplebar.min.js') }}" defer></script>

      <!-- Revolution Slider -->
      <script src="{{ asset('html/rev/js/rbtools.min.js') }}" defer></script>
      <script src="{{ asset('html/rev/js/rs6.min.js') }}" defer></script>
      <script src="{{ asset('html/js/rev-custom.js') }}" defer></script>

      <!-- Custom Scripts -->
      <script src="{{ asset('html/js/load-more.js') }}" defer></script>
      <script src="{{ asset('html/js/custom.js') }}" defer></script>


      @include('front.schema')
      <a href="https://wa.me/254796110511"
        class="whatsapp-float"
        target="_blank"
        title="Chat with us on WhatsApp">
        <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png"
                alt="WhatsApp Chat" />
        </a>

      {{--  --}}
   </body>
</html>
