@extends('front.master')


@section('content')
@foreach ($Folio as $item)
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">
                        <h5 class="pq-section-main-title">{{$item->name}}</h5>
                    </div>
                </div>
                <div class="col-lg-4 wow animated fadeInRight">
                    <div class="button-align">
                        <a class="pq-button pq-button-flat" href="{{url('/')}}/portfolio/">
                            <div class="pq-button-block">
                            <span class="pq-button-text">Explore More </span>
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
        </div>
    </section>

    <!-- Portfolio Sinlge -->
    <div class="single-portfolio" style="padding-top:-300px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-portfolio-slider">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="0">
                            <div class="item">
                                <img style="max-height:500px; width:100%" src="{{url('/')}}/uploads/portfolios/{{$item->image_one}}" class="img-fluid" alt="">
                            </div>
                            @if($item->image_two == null OR $item->image_two =="0")

                            @else
                            <div class="item">
                                <img style="max-height:500px; width:100%" src="{{url('/')}}/uploads/portfolios/{{$item->image_two}}" class="img-fluid" alt="">
                            </div>
                            @endif

                            @if($item->image_three == null OR $item->image_three =="0")

                            @else
                            <div class="item">
                                <img style="max-height:500px; width:100%" src="{{url('/')}}/uploads/portfolios/{{$item->image_three}}" class="img-fluid" alt="">
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="pq-portfolio-info-box pq-mb-45">
                        <div class="pq-portfolio-info">
                            <ul class="pq-info-list">
                                <li>

                                    <span>{{$item->meta}}</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <p class="text-center" style="text-align: center">
                        {!!html_entity_decode(str_replace("<p>&nbsp;</p>", "", $item->content))!!}
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Single -->
    <?php
       $Related = DB::table('portfolios')->get();
    ?>
    <!-- Portfolio Slider -->
    <section class="portfolio-slideshow pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <span class="pq-section-sub-title">our work</span>
                        <h5 class="pq-section-main-title">Explore Recent Projects</h5>
                    </div>
                    <div class="pq-portfoliobox pq-portfoliobox-style-1">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="3" data-lap_num="2" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            {{--  --}}
                            @foreach ($Related as $related)
                            <div class="item">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <div class="pq-portfolio-img">
                                            <img style="width:387px; height:387px;" decoding="async" src="{{url('/')}}/uploads/portfolios/{{$related->image_one}}" alt="">
                                        </div>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="{{url('/')}}/portfolio/{{$related->slung}}">{{$related->name}}</a></h5>
                                            <span>
                                                <?php
                                                        $Cat = \App\Models\Category::find($related->category_id);
                                                ?>
                                                <a href="{{url('/')}}/products/{{$Cat->slung}}">
                                                    {{$Cat->name}}
                                                </a>
                                            </span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{url('/')}}/portfolio/{{$related->slung}}" class="pq-button pq-button-link">
                                                <div class="pq-button-block">
                                                    <div class="pq-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="64.356" height="36.52" viewBox="0 0 64.356 36.52">
                                                            <g transform="translate(-6.444 -1.74)">
                                                                <g data-name="Group 2">
                                                                    <circle data-name="Ellipse 2" cx="17" cy="17.76" r="17.76" transform="translate(34.78 2.24)" fill="none" stroke="#e6af5d" stroke-width="1" opacity="0.5"></circle>
                                                                    <circle data-name="Ellipse 3" cx="17" cy="17.76" r="17.76" transform="translate(34.78 2.24)" fill="none" stroke="#e6af5d" stroke-width="1"></circle>
                                                                </g>
                                                                <path data-name="Path 1" d="M49.525,14.265l-.627.779,5.583,4.5H6.444v1h48.02L48.9,24.954l.621.783L56.7,20.044Z" fill="#e6af5d"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Slider -->

@endforeach


@endsection
