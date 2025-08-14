@extends('front.master-category')


@section('content')
@foreach ($Categories as $Category)
 <!-- Breadcrumb -->
<br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <h5 class="pq-section-main-title">{{$PageTitle}}</h5>
                </div>
            </div>
            <div class="col-lg-4 wow animated fadeInRight">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="{{url('/')}}/products/{{$Category->slung}}">
                        <div class="pq-button-block">
                        <span class="pq-button-text">Explore Options </span>
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
            <h5 class="product_version_h3">
                {!!html_entity_decode($Category->meta)!!}
            </h5>
            <br>
            <h6 class="product_version_h3_2">
                {!!html_entity_decode($Category->heading_two)!!}
            </h6>
        </div>
    </div>

<!-- Breadcrumb -->

<!-- About Us -->
    <section class="about-us pq-bg-img-1 py-xl-0 pq-pt-30 pq-pb-30 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow animated fadeInLeft">
                    <div class="pq-contact-imgs">
                        <img  src="{{url('/')}}/uploads/categories/{{$Category->image}}" alt="{{$Category->title}}">
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5 pq-pt-30 pq-pb-30   wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">

                        <h5 class="pq-section-main-titles pq-text-white" style="color:#e4c590 !important"> {!!html_entity_decode($Category->heading_two_section)!!}</h5>
                        <p class="pq-section-description">

                            {!!html_entity_decode($Category->content)!!}
                        </p>
                    </div>

                    <div class="divider pq-my-30"></div>

                </div>
            </div>
        </div>
    </section>


<!-- About Us -->

 <!-- Services -->



  <!-- Flooring -->
  <section class="flooring pq-bg-dark pq-bg-img-2 pq-pb-260">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 wow animated fadeInLeft">
                <div class="pq-section-title pq-style-1">
                    <span class="pq-section-sub-title" style="color:#ffffff">Portfolio</span>
                    <h5 class="pq-section-main-title pq-text-white">Seen Our Work Yet?</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 wow animated fadeInLeft">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="https://decomagna.com/portfolio">
                        <div class="pq-button-block">
                            <span class="pq-button-text"> Browse Portfolio </span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="divider pq-left-border pq-45"></div>
            </div>


        </div>
    </div>
</section>
<!-- Flooring -->
 {{--  --}}

    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pq-mt-130">
                    <div class="pq-me-315 wow animated fadeInRight">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <?php
                            $Portfolio = DB::table('portfolios')->limit('6')->get();
                            ?>
                            @foreach ($Portfolio as $Portfolio)
                            <div class="item">
                                <a href="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}">
                                    <img style="width:100%; height:433px;" src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}" alt="{{$Portfolio->name}}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $Extras = DB::table('extras')->where('category_id',$Category->id)->get();
        $Order = 1;
    ?>
    @if($Extras->isEmpty())

    @else
        @foreach ($Extras as $extra)

                <!-- FAQ -->
                <section class="faq">
                    <div class="container">
                        @if($Order % 2 == 0)
                            <div class="row align-items-center">
                                <div class="col-xl-6 pe-xl-90">
                                    <div class="pq-faq-img">
                                        <img src="{{url('/')}}/uploads/extras/{{$extra->image}}" class="img-fluid wow animated fadeInLeft" alt="faq-img">
                                    </div>
                                </div>
                                <div class="col-xl-6 ps-xl-60 mt-4 mt-xl-0 wow animated fadeInRight">
                                    <div class="pq-section-title pq-style-1 pq-mb-30">
                                        @if($Order == "1")
                                            <span class="pq-section-sub-title">WHY YOU WOULD LIKE OUR {{$Category->title}}</span>
                                        @endif
                                        <h5 class="pq-section-main-title">{{$extra->title}}</h5>
                                    </div>
                                    <p>
                                        {!!html_entity_decode($extra->content)!!}
                                    </p>
                                </div>
                            </div>
                        @else
                            <div class="row align-items-center">

                                <div class="col-xl-6 ps-xl-60 mt-4 mt-xl-0 wow animated fadeInLeft">
                                    <div class="pq-section-title pq-style-1 pq-mb-30">
                                        @if($Order == "1")
                                        <span class="pq-section-sub-title">WHY YOU WOULD LIKE OUR {{$Category->title}}</span>
                                        @endif
                                        <h5 class="pq-section-main-title">{{$extra->title}}</h5>
                                    </div>
                                    <p>
                                        {!!html_entity_decode($extra->content)!!}
                                    </p>
                                </div>

                                <div class="col-xl-6 pe-xl-90">
                                    <div class="pq-faq-img">
                                        <img src="{{url('/')}}/uploads/extras/{{$extra->image}}" class="img-fluid wow animated fadeInRight" alt="faq-img">
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </section>
                <!-- FAQ -->
                <div class="col-lg-12">
                    <div class="divider pq-left-border pq-45"></div>
                </div>
            <?php $Order = $Order+1; ?>
        @endforeach
    @endif

    {{--  --}}

<!-- FAQ -->
<section class="faq">
    <div class="container">
        <div class="row" style="margin:0 auto">
            {{-- <div class="col-xl-6 wow animated fadeInLeft">
                <img src="{{url('/')}}/uploads/categories/{{$Category->image}}" class="img-fluid w-100s" alt="">
            </div> --}}
            <div class="col-xl-10 ps-xl-5 mt-4 mt-xl-0 wow animated fadeInRight" style="margin:0 auto">
                <div class="pq-section-title pq-style-1 pq-mb-30">
                    <span class="pq-section-sub-title">POPULAR QUESTIONS</span>
                    <h5 class="pq-section-main-title">Asked Questions ?</h5>
                    <p class="pq-section-description">
                        Decomagna's FAQ section provides quick solutions to common questions about our products, services, and policies, ensuring a seamless user experience. From troubleshooting to subscription inquiries, it's regularly updated to offer the most relevant information.
                    </p>
                </div>
                <div class="pq-accordion-block pq-style-2">
                    <?php
                       $faq = DB::table('faq')->get();
                       $count = 1;
                    ?>
                    @foreach ($faq as $faqs)

                    @if($count == 1)
                    <div class="pq-accordion-block ">
                        <div class="pq-accordion-box pq-active 1">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    {{$faqs->title}}
                                    <i aria-hidden="true" class="ion ion-plus-round active"></i><i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details">
                                <p class="pq-detail-text">
                                    {!! $faqs->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="pq-accordion-block ">
                        <div class="pq-accordion-box 2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    {{$faqs->title}}
                                    <i aria-hidden="true" class="ion ion-plus-round active"></i><i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details">
                                <p class="pq-detail-text">
                                    {!! $faqs->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <?php
                       $count = $count+1;
                    ?>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ -->
    {{--  --}}
@endforeach
<?php $Blog = DB::table("blogs")->get(); ?>
 <!-- Blog -->
 <section class="blog pq-bg-grey">
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
