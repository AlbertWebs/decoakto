@extends('front.master')


@section('content')
<!-- Banner -->
<div class="banner py-0">
    <!-- START Home 1 REVOLUTION SLIDER 6.5.31 -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_3_1_wrapper" data-alias="home-1" data-source="gallery"
       style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
       <rs-module id="rev_slider_3_1" data-version="6.5.31">
          <rs-slides>
            @foreach ($Slider as $slider)
             <rs-slide style="position: absolute;" data-key="rs-5{{$slider->id}}" data-title="Slide"
                data-thumb="{{asset('html/rev/assets/1-6-50x100.jpg')}}" data-anim="adpr:false;ms:300;" data-in="o:0;"
                data-out="a:false;">
                <img src="{{asset('html/rev/assets/dummy.png')}}" alt="" title="1" width="1920" height="1058"
                   class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{url('/')}}/uploads/slider/{{$slider->image}}"
                   data-bg="p:center bottom;" data-no-retina>
                <!--
                   -->
                <rs-layer id="slider-3-slide-5-layer-0" data-type="shape" data-rsp_ch="on"
                   data-xy="x:l,l,c,c;xo:30px,15px,-160px,-133px;yo:240px,215px,185px,137px;"
                   data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                   data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                   data-frame_999="o:0;st:w;sR:7700;" style="z-index:10;background-color:#e6af5d;">
                </rs-layer>
                <!--
                   -->
                <rs-layer id="slider-3-slide-5-layer-1" class="rs-subtitle-font" data-type="text" data-color="#e6af5d"
                   data-rsp_ch="on" data-xy="x:l,l,c,c;xo:75px,55px,0,0;yo:230px,205px,175px,127px;"
                   data-text="w:normal;s:16,14,14,12;l:24,22,22,20;ls:1.6px;fw:600;"
                   data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                   data-frame_999="o:0;st:w;sR:7700;" style="z-index:11;text-transform:capitalize;">We are Decomagna
                </rs-layer>
                <!--
                   -->
                <rs-layer id="slider-3-slide-5-layer-2" data-type="shape" data-rsp_ch="on"
                   data-xy="xo:-1190px,-982px,-746px,-460px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                   data-dim="w:3611px,2981px,2264px,1396px;h:540px,445px,338px,348px;"
                   data-frame_999="o:0;st:w;" style="z-index:8;background-color:#ffffff;">
                </rs-layer>
                <!--
                   -->
                <rs-layer id="slider-3-slide-5-layer-3" class="rs-title-font" data-type="text" data-color="#30373f"
                   data-rsp_ch="on" data-xy="x:l,l,c,c;xo:30px,15px,0,0;yo:260px,240px,205px,155px;"
                   data-text="w:normal;s:46,48,40,26;l:64,46,48,34;fw:600;a:left,left,center,center;"
                   data-dim="w:637px,581px,560px,349px;" data-frame_0="y:50,41,31,19;"
                   data-frame_1="st:800;sp:1000;sR:800;" data-frame_999="o:0;st:w;sR:7200;"
                   style="z-index:12;text-transform:capitalize;">{{$slider->name}}
                </rs-layer>


                @if($slider->action == null OR $slider->action == "")

                    <a id="slider-3-slide-5-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                            href="{{url('/')}}/contact-us" target="_self" data-type="button" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                            data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                            data-dim="minh:0px,none,none,none;"
                            data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                            data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                            data-frame_999="o:0;st:w;sR:6800;"
                            data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                            style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                            <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                    </a>
                @else

                    <a id="slider-3-slide-5-layer-4" class="rs-layer pq-button pq-button-flat pq-btn-font rev-btn"
                        href="{{$slider->action}}" target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:15px,15px,0,3px;y:t,t,m,m;yo:310px,280px,-35px,10px;"
                        data-text="w:normal;s:14,14,14,13;l:28,22,22,20;ls:1.6px,0px,0px,0px;fw:700;a:left,left,center,center;"
                        data-dim="minh:0px,none,none,none;"
                        data-padding="t:15,13,14,10;r:30,25,22,20;b:15,13,14,10;l:30,25,22,20;"
                        data-frame_0="y:50,41,31,19;" data-frame_1="st:1200;sp:1000;sR:1200;"
                        data-frame_999="o:0;st:w;sR:6800;"
                        data-frame_hover="bgc:#30373f;bor:0px,0px,0px,0px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:13;background-color:#e6af5d;text-transform:uppercase;">
                        <div class="pq-button-block"><span class="pq-button-text">{{$slider->action_name}} </span><span
                            class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                    </a>

                @endif

                <rs-layer id="slider-3-slide-5-layer-5" data-type="shape" data-rsp_ch="on"
                   data-xy="x:l,l,c,c;xo:30px,15px,160px,133px;yo:240px,215px,185px,137px;"
                   data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:30px,24px,18px,11px;h:1px;"
                   data-vbility="f,f,t,t" data-frame_0="y:50,41,31,19;" data-frame_1="st:300;sp:1000;sR:300;"
                   data-frame_999="o:0;st:w;sR:7700;" style="z-index:9;background-color:#e6af5d;">
                </rs-layer>
                <!--
                   -->
             </rs-slide>
             @endforeach
          </rs-slides>
       </rs-module>
    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->
 </div>
 <!-- Banner -->
 <?php
    $About = DB::table('abouts')->get();
 ?>
 <!-- Services -->
 <section class=" p-80" id="about">
    <div class="container">

       <div class="row align-items-center">
          <div class="col-lg-8 col-md-8 wow animated fadeInRight">
             <div class="pq-section-title pq-style-1">
                {{-- <span class="pq-section-sub-title">what we offer</span>
                <h5 class="pq-section-main-title">provides best services</h5> --}}
                {{--  --}}
                @foreach ($About as $about)
                <h2 class="headline-intro" style="color:#2944d1 !important;">{{$about->title}}</h2>
                <p>
                    <font color="#676767">
                        <span style=" line-height: 1.6;">
                            {!!html_entity_decode($about->content)!!}
                        </span>
                    </font>
                </p>
                @endforeach
                {{--  --}}
             </div>
          </div>
          <div class="col-lg-4 col-md-4 wow animated fadeInRight">
             <div class="button-align">
                <a class="pq-button pq-button-flat" href="{{url('/')}}">
                   <div class="pq-button-block">
                      <span class="pq-button-text">Browse Catalogue </span>
                      <span class="pq-button-line-right"></span>
                      <i class="ion ion-ios-arrow-right"></i>
                   </div>
                </a>
             </div>
          </div>
          <div class="col-lg-12">
             <div class="divider pq-right-border pq-45"></div>
          </div>
          {{--  --}}
          <?php $Categories = DB::table("categories")->get(); ?>
          @foreach ($Categories as $cat)
          <div class="col-lg-4 col-md-6 wow animated fadeInUp">
             <div class="pq-service-box pq-style-3 text-center">
                <div class="pq-service-media">
                   <div class="pq-service-img">
                      <img class="ser-img" decoding="async" src="{{url('/')}}/uploads/categories/{{$cat->image}}" alt="{{$cat->title}}">
                   </div>
                </div>
                <div class="pq-service-info">
                   <h5 class="pq-service-title">
                    <a class="category-title" href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->title}}</a>
                   </h5>
                </div>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </section>
 <!-- Services -->

<?php $SectionHome = DB::table("sections")
->where("page", "home")
->where("position", "1st_banner")
->get(); ?>
@foreach ($SectionHome as $sectionhome)
<!-- About Us -->
    <section class="about-us pq-bg-img-1 py-xl-0 pb-10">
        <div class="container">
            <div class="floating-image floating-image-right floating-image-5">
                <img src="{{url('/')}}/uploads/sections/Laminate.png" alt="">
            </div>
        <div class="row align-items-center">
            <div class="col-xl-6 wow animated fadeInLeft">
                <div class="pq-about-us-img">
                    <img src="{{url('/')}}/uploads/sections/{{$sectionhome->image}}" alt="{{$sectionhome->name}}">
                </div>
            </div>
            <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1 pq-mb-30">
                    {{-- <span class="pq-section-sub-title">{{$sectionhome->name}}</span> --}}
                    {{-- <h5 class="pq-section-main-title"> {{$sectionhome->name}}</h5> --}}
                    <h5 class="pq-section-main-titles pq-text-white" style="color:#e4c590 !important">{{$sectionhome->name}}</h5>
                    <p class="pq-section-description">
                        {!!html_entity_decode($sectionhome->content)!!}
                    </p>
                </div>

                <div class="divider pq-my-30"></div>
                <a class="pq-button pq-button-flat" href="{{$sectionhome->action}}">
                    <div class="pq-button-block">
                        <span class="pq-button-text">{{$sectionhome->action_name}}</span>
                        <span class="pq-button-line-right"></span>
                        <i class="ion ion-ios-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>
<!-- About Us -->
@endforeach
 <!-- Services -->



<!-- Portfolio -->
<section class="portfolio">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <span class="pq-section-sub-title">latest work</span>
                    <h5 class="pq-section-main-title">discover our creation</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 wow animated fadeInRight">
                <div class="button-align">
                    {{-- <a class="pq-button pq-button-flat" href="portfolio-single.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">view more </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a> --}}
                    <div class="pq-popup-video-block pq-popup-style-2">
                        <div class="pq-video-icon">
                            <a href="https://www.youtube.com/watch?v=rw34dko8ty8"
                                class="pq-video default popup-youtube">
                                <i aria-hidden="true" class="ion ion-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="divider pq-right-border pq-45"></div>
            </div>
            <div class="col-lg-12">
                <div class="pq-grid" data-next_items="3" data-initial_items="6">
                    <?php
                    $Portfolio = DB::table('portfolios')->where('home','1')->where('big','0')->limit('6')->get();
                    ?>
                    @foreach ($Portfolio as $Portfolio)
                    <div class="pq-grid-item pq-filter-items pq-col-6    59 ">
                        <div class="pq-portfoliobox-3">
                            <div class="pq-portfolio-img">
                                <a href="#">
                                    <img style="border-radius:10px" decoding="async" src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}" alt="{{$Portfolio->name}}">
                                </a>
                            </div>
                            <div class="pq-portfolio-info">
                                <div class="pq-portfolio-content">
                                    <span><a href="#">Laminate</a></span>
                                    <h5><a href="#">{{$Portfolio->name}}</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio -->

<?php $SectionHome = DB::table("sections")
->where("page", "home")
->where("position", "2nd_banner")
->get(); ?>
@foreach ($SectionHome as $sectionhome)

  <!-- Warehouse -->
  <section class="warehouse pq-bg-dark pq-bg-img-2">
    <div class="container">
        <div class="row align-items-center pq-pb-130">
            <div class="col-xl-6 wow animated fadeInLeft">
                <div class="pq-warehouse-img-overflow">
                    <img style="border-radius:10px" src="{{url('/')}}/uploads/sections/{{$sectionhome->image}}" alt="{{$sectionhome->name}}">
                </div>
            </div>
            <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-30 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    {{-- <span class="pq-section-sub-title">{{$sectionhome->name}}</span> --}}
                    <h5 class="pq-section-main-titles pq-text-white" style="color:#e4c590 !important">{{$sectionhome->name}}</h5>

                </div>
                <br>
                <div class="pq-section-description pq-text-white" style="color:#ffffff !important">
                    {!!html_entity_decode($sectionhome->content)!!}
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 wow animated fadeInLeft">
                <div class="pq-section-title pq-style-1">
                    <span class="pq-section-sub-title">choose your Taste</span>
                    <h5 class="pq-section-main-title pq-text-white">Choice Assorted</h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 wow animated fadeInLeft">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="services-1.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">view more </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-12 wow animated fadeInLeft">
                <div class="divider pq-left-border pq-45"></div>
            </div>
            <?php
               $Color = DB::table('colors')->where('category_id','1')->get();
            ?>
            @foreach ($Color as $color)
            <div class="col-lg-4 col-md-6 wow animated fadeInUp">
                <div class="pq-image-box pq-style-4">
                    <div class="pq-image-box-img">
                        <a href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}"><img  src="{{url('/')}}/uploads/colors/{{$color->image}}" class="img-fluid w-100" alt=""></a>
                    </div>
                    <div class="pq-image-box-content">
                        <h4 class="pq-image-box-title"><a href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}">{{$color->title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Warehouse -->
@endforeach




 <!-- Award -->
 <section class="award pq-bg-img-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <span class="pq-section-sub-title">Clientalle</span>
                    <h5 class="pq-section-main-title">Decomagna Satisfied Clients</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 wow animated fadeInRight">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="#">
                        <div class="pq-button-block">
                            <span class="pq-button-text">read more</span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="divider pq-right-border pq-45"></div>
            </div>
            <div class="col-lg-12 wow animated fadeInLeft">
                <div class="pq-awardbox-1-slider pq-awardbox-1">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                        <?php $Partners = DB::table("partners")->get(); ?>
                        @foreach ($Partners as $partners)
                        <div class="item " style="width:265px; height:265px; background-color:#ffffff">
                            <div class="pq-awardbox-1 ">
                                <a>
                                    <img style="width:265px" decoding="async" src="{{url('/')}}/uploads/partners/{{$partners->image}}" alt="{{$partners->name}}">
                                    <span class="pq-award-title">{{$partners->name}}</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Award -->

<?php $Blog = DB::table("blogs")->get(); ?>
 <!-- Blog -->
 <section class="blog">
    <div class="container">

       <div class="row align-items-center">
          <div class="col-lg-8 wow animated fadeInRight">
             <div class="pq-section-title pq-style-1">
                <span class="pq-section-sub-title">Latest News</span>
                <h5 class="pq-section-main-title">Quick-Step Flooring Kenya - Decomagna Limited Blogs</h5>
             </div>
          </div>
          <div class="col-lg-4 wow animated fadeInRight">
             <div class="button-align">
                <a class="pq-button pq-button-flat" href="1-column-blog.html">
                   <div class="pq-button-block">
                      <span class="pq-button-text">read more </span>
                      <span class="pq-button-line-right"></span>
                      <i class="ion ion-ios-arrow-right"></i>
                   </div>
                </a>
             </div>
          </div>
          <div class="col-lg-12">
             <div class="divider pq-right-border pq-45"></div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12 wow animated fadeInUp">
             <div class="pq-blog tex-left">
                <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false"
                   data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1"
                   data-autoplay="true" data-loop="true" data-margin="30">
                   @foreach ($Blog as $blog)
                   <div class="item">
                      <div class="pq-blog-post">
                         <div class="pq-post-media">
                            <img decoding="async" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="blog-image">
                            <div class="pq-post-category">
                               <a href="{{url('/')}}/blogs/{{$blog->slung}}">stone</a>
                            </div>
                         </div>
                         <div class="pq-blog-contain">
                            <div class="pq-post-meta">
                               <ul>
                                  <li class="pq-post-meta">
                                     <a href="{{url('/')}}/blogs/{{$blog->slung}}">
                                     {{ date('M d,Y', strtotime($blog->created_at)) }}</a>
                                  </li>

                               </ul>
                            </div>
                            <h5 class="pq-blog-title">
                               <a href="{{url('/')}}/blogs/{{$blog->slung}}">{{$blog->title}}</a>
                            </h5>
                            <div class="pq-btn-container">
                               <a href="{{url('/')}}/blogs/{{$blog->slung}}"
                                  class="pq-button pq-button-link">
                                  <div class="pq-button-block">
                                     <div class="pq-svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356"
                                           height="36.52" viewBox="0 0 64.356 36.52">
                                           <g transform="translate(-6.444 -1.74)">
                                              <g data-name="Group 2">
                                                 <circle data-name="Ellipse 2" cx="17" cy="17.76"
                                                    r="17.76" transform="translate(34.78 2.24)"
                                                    fill="none" stroke="#30373f" stroke-width="1"
                                                    opacity="0.5"></circle>
                                                 <circle data-name="Ellipse 3" cx="17" cy="17.76"
                                                    r="17.76" transform="translate(34.78 2.24)"
                                                    fill="none" stroke="#30373f" stroke-width="1">
                                                 </circle>
                                              </g>
                                              <path data-name="Path 1"
                                                 d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z"
                                                 fill="#30373f"></path>
                                           </g>
                                        </svg>
                                     </div>
                                     <span class="pq-button-text">read more </span>
                                  </div>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Blog -->
@endsection
