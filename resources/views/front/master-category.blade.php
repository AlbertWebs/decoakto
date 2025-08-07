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
