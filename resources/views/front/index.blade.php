@extends('front.master')


@section('content')
      <!-- Banner -->
      <div class="banner py-0">
        <!-- START home 6 REVOLUTION SLIDER 6.5.31 -->
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_14_1_wrapper" data-alias="home-4-1" data-source="gallery"
           style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
           <rs-module id="rev_slider_14_1" data-version="6.5.31">
              <?php $Order = 6; ?>
              <rs-slides>
                 @foreach ($Slider as $slider)
                 <rs-slide style="position: absolute;" data-key="rs-4{{$Order}}" data-title="Slide"
                    data-thumb="{{asset('html/rev/assets/Banner-1-2-50x100.jpg')}}" data-anim="adpr:false;ms:300;" data-in="o:0;"
                    data-out="a:false;">
                    <img alt="{{$slider->name}}" src="{{url('/')}}/uploads/slider/{{$slider->image}}" alt="" title="Banner-1"
                       class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{url('/')}}/uploads/slider/{{$slider->image}}"
                       data-no-retina>
                    <!--

                       -->
                    <rs-layer id="slider-14-slide-4{{$Order}}-layer-1" class="rs-title-font" data-type="text" data-rsp_ch="on"
                       {{-- data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m,m,m,t;yo:6px,32px,10px,195px;" --}}
                       data-xy="x:l,l,c,c;xo:10px,10px,0,0;y:m;yo:145px,170px,140px,114px;"
                       data-text="w:normal;s:52,48,42,32;l:70,56,50,40;ls:0,0,0,1px;fw:600;a:left,left,center,center;"
                       data-dim="w:737px,613px,546px,434px;" data-frame_0="y:50,39,29,17;"
                       data-frame_1="st:500;sp:1000;sR:500;"
                       data-frame_999="y:50,39,29,17;o:0;st:7700;sp:1000;sR:6290;"
                            style="
                                  z-index:9;font-family:'Plus Jakarta Sans';
                                  text-transform:capitalize;
                                  background-color: rgba(0,0,0,0.3);
                                  border:6px solid rgba(255,255,255,0.3);
                                  padding:10px;
                                  text-shadow: 0 0 4px rgba(0,0,0,.8);">
                                  {{$slider->name}}
                    </rs-layer>
                    <!--

                    -->
                    {{-- <a id="slider-14-slide-4{{$Order}}-layer-3" class="rs-layer pq-button pq-button-flat pq-btn-font  rev-btn"
                       href="about-us.html" target="_self" data-type="button" data-rsp_ch="on"
                       data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m;yo:161px,170px,140px,114px;"
                       data-text="w:normal;s:14,16,16,14;l:32,32,32,28;ls:1px,0px,0px,1px;fw:600;"
                       data-dim="minh:0px,none,none,none;" data-padding="t:13;r:30;b:13;l:30;"
                       data-border="bos:solid;boc:rgba(255, 255, 255, 0);bow:2px,2px,2px,2px;"
                       data-frame_0="y:50,39,29,17;" data-frame_1="st:900;sp:1000;sR:900;"
                       data-frame_999="y:50,39,29,17;o:0;st:7400;sp:1000;sR:5500;"
                       data-frame_hover="c:#fff;bgc:#30373f;boc:rgba(11,11,11,0);bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;bri:120%;"
                       style="z-index:8;background-color:#1c186c ;font-family:'Plus Jakarta Sans';text-transform:uppercase;">
                       <div class="pq-button-block"><span class="pq-button-text">read more </span><span
                          class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                    </a> --}}
                 </rs-slide>
                 <?php $Order = $Order+1; ?>
                 @endforeach

              </rs-slides>
           </rs-module>
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
     </div>
     <!-- Banner -->

    <style>
    /* Responsive typography and spacing for mobile/tablet */
   .pq-service-img{
        aspect-ratio: 1 / 1;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
   }

   .pq-service-img .ser-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
   }

   .pq-grid{
        display: flex;
        flex-wrap: wrap;
        margin: -12px;
   }

   .pq-grid .pq-grid-item{
        flex: 0 0 33.333%;
        max-width: 33.333%;
        padding: 12px;
        box-sizing: border-box;
        display: flex;
   }

   .pq-grid .pq-portfoliobox-3{
        width: 100%;
        height: 100%;
   }

   .pq-grid .pq-portfolio-img{
        aspect-ratio: 1 / 1;
        width: 100%;
        overflow: hidden;
        border-radius: 10px;
   }

   .pq-grid .pq-portfolio-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
   }

   @media (max-width: 576px){
        .headline-intro{ font-size: 22px; line-height: 30px; }
        .pq-section-title .pq-section-main-title{ font-size: 22px; line-height: 30px; }
        .pq-section-main-titles{ font-size: 20px !important; line-height: 28px !important; }
        .pq-section-sub-title{ font-size: 12px; letter-spacing: .02em; }
        .pq-section-description, .pq-section-title p, .pq-blog-contain p{ font-size: 14px; line-height: 22px; }
        .pq-button .pq-button-text{ font-size: 14px; }
        .pq-service-title a{ font-size: 15px; line-height: 20px; }
        .pq-service-title .category-title{ line-height: 1.3; display: inline-block; margin-bottom: 0; }
        .pq-grid{ margin: -6px; }
        .pq-grid .pq-grid-item{
            flex: 0 0 50%;
            max-width: 50%;
            padding: 6px;
        }
        .pq-grid-item .pq-portfolio-content{ text-align: center; display: flex; flex-direction: column; align-items: center; }
        .pq-grid-item .pq-portfolio-content span a{ font-size: 12px; line-height: 1.2; display: inline-block; margin-bottom: 2px; }
        .pq-grid-item .pq-portfolio-content h5{ margin-top: 2px; margin-bottom: 0; }
        .pq-grid-item .pq-portfolio-content h5 a{ font-size: 15px; line-height: 1.25; display: inline-block; text-align: center; }
        .pq-portfolio-content span a{ font-size: 12px; }
        .pq-portfolio-content h5 a{ font-size: 16px; }
        .pq-blog-title a{ font-size: 16px; }
        .pq-post-meta a{ font-size: 12px; }
        .sp-80{ padding-top: 40px; padding-bottom: 40px; }
        .pq-my-30{ margin-top: 15px !important; margin-bottom: 15px !important; }
        /* Revolution slider title */
        .rs-title-font{ font-size: 22px !important; line-height: 30px !important; padding: 6px !important; border-width: 3px !important; }
        .pq-popup-video-block.pq-popup-style-2{ display: none !important; }
    }

    @media (min-width: 577px) and (max-width: 991.98px){
        .headline-intro{ font-size: 28px; line-height: 36px; }
        .pq-section-title .pq-section-main-title{ font-size: 28px; line-height: 36px; }
        .pq-section-main-titles{ font-size: 26px !important; line-height: 34px !important; }
        .pq-section-description, .pq-section-title p{ font-size: 15px; line-height: 24px; }
        .pq-button .pq-button-text{ font-size: 15px; }
        .sp-80{ padding-top: 56px; padding-bottom: 56px; }
        .rs-title-font{ font-size: 28px !important; line-height: 36px !important; padding: 8px !important; border-width: 4px !important; }
    }
    </style>




 <?php
    $About = DB::table('abouts')->get();
 ?>
 <!-- Services -->
 <section class="sp-80" id="about">
    <div class="container">

       <div class="row align-items-center">
          <div class="col-lg-8 col-md-8 wow animated fadeInRight">
             <div class="pq-section-title pq-style-1">
                {{-- <span class="pq-section-sub-title">what we offer</span>
                <h5 class="pq-section-main-title">provides best services</h5> --}}
                {{--  --}}
                @foreach ($About as $about)
                <h2 class="headline-intro" style="color:#1c186c!important;">{{$about->title}}</h2>
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
                <a class="pq-button pq-button-flat" download href="{{url('/')}}/uploads/files/Decomagna2025-Flooring.pdf">
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
          <div class="col-lg-4 col-md-6 col-sm-6 col-6 wow animated fadeInUp" style="margin-bottom:20px;">
             <div class="pq-service-box pq-style-3 text-center">
                <div class="pq-service-media">
                   <div class="pq-service-img">
                      <img class="ser-img img-fluid w-100" decoding="async" src="{{url('/')}}/uploads/categories/{{$cat->image}}" alt="{{$cat->title}}">
                   </div>
                </div>
                @if($cat->has_products == 1)
                    <div class="pq-service-info">
                    <h5 class="pq-service-title">
                        <a class="category-title" href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->title}}</a>
                    </h5>
                    </div>
                @else
                    <div class="pq-service-info">
                        <h5 class="pq-service-title">
                        <a class="category-title" href="{{url('/')}}/products/explore/{{$cat->slung}}">{{$cat->title}}</a>
                        </h5>
                    </div>
                @endif
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
            <div class="floating-image floating-image-right floating-image-5 d-none d-md-block">
                <img src="{{url('/')}}/uploads/sections/Laminate.png" alt="{{$sectionhome->name}}">
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
                    <h5 class="pq-section-main-titles pq-text-white" style="color:#1c186c !important">{{$sectionhome->name}}</h5>
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
                    <h5 class="pq-section-main-title">discover our creations</h5>
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
                    <div class="pq-grid-item pq-filter-items pq-col-6 col-6 col-md-4">
                        <div class="pq-portfoliobox-3">
                            <div class="pq-portfolio-img">
                                <a href="{{url('/')}}/portfolio/{{$Portfolio->slung}}">
                                    <img class="img-fluid" style="border-radius:10px" decoding="async" src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}" alt="{{$Portfolio->name}}">
                                </a>
                            </div>
                            <div class="pq-portfolio-infos">
                                <div class="pq-portfolio-content text-center">
                                   
                                    <h5><a href="{{url('/')}}/portfolio/{{$Portfolio->slung}}">{{$Portfolio->name}}</a></h5>
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
                    <span class="pq-section-sub-title" style="color:#ffffff !important;">choose your Taste</span>
                    <h5 class="pq-section-main-title pq-text-white">Choice Assorted</h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 wow animated fadeInLeft">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="https://decomagna.com/products/original-laminate-flooring">
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
            <div class="col-6 col-md-6 col-lg-4 wow animated fadeInUp">
                <div class="pq-image-box pq-style-4">
                    <div class="pq-image-box-img">
                        <a class="pellete-img"  href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}">
                            <img src="{{url('/')}}/uploads/colors/{{$color->image}}" class="img-fluid w-100" alt="Decomagna {{$color->title}}">
                        </a>
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
<style>
.partner-logo{ height: 120px; width: auto; object-fit: contain; }
@media (max-width: 576px){
    .partner-logo{ height: 80px; }
    .award .pq-award-title{ display:none !important; }
    .award .owl-dots{ display:none !important; }
}
</style>
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
                    <a class="pq-button pq-button-flat" href="{{url('/')}}/clients">
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
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="3" data-mob_sm="3" data-autoplay="true" data-loop="true" data-margin="30">
                        <?php $Partners = DB::table("partners")->get(); ?>
                        @foreach ($Partners as $partners)
                        <div class="item" style="background-color:#ffffff">
                            <div class="pq-awardbox-1 ">
                                <a>
                                    <img class="img-fluid partner-logo d-block mx-auto" decoding="async" src="{{url('/')}}/uploads/partners/{{$partners->image}}" alt="{{$partners->name}}">
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

<?php $Blog = DB::table("blogs")->limit('3')->orderBy('id','DESC')->get(); ?>
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
                <a class="pq-button pq-button-flat" href="{{url('/')}}/blogs">
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
                   data-autoplay="false" data-loop="true" data-margin="30">
                   @foreach ($Blog as $blog)
                   <div class="item">
                      <div class="pq-blog-post">
                         <div class="pq-post-media blog-img">
                           <img class="img-fluid w-100" decoding="async" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="{{$blog->title}}">

                                  <?php
                                      $Category = \App\Models\Category::find($blog->category);

                                   ?>

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
