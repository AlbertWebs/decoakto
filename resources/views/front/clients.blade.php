@extends('front.master')


@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow animated fadeInRight">
                    <div class="pq-section-title pq-style-1">
                        <h5 class="pq-section-main-title">Our Clients</h5>
                    </div>
                </div>
                <div class="col-lg-4 wow animated fadeInRight">
                    <div class="button-align">
                        <a class="pq-button pq-button-flat" href="{{url('/')}}/portfolio/">
                            <div class="pq-button-block">
                            <span class="pq-button-text">Explore Portfolio </span>
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


<!-- 1-column-blog -->
<div class="1-column-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-blog pq-blog-col-3">
                    <div class="row">
                        @foreach ($Partners as $par)
                            <div class="col-lg-3">
                                <div class="partners-img">
                                    <img src="{{url('/')}}/uploads/partners/{{$par->image}}" alt="{{$par->name}}">
                                </div>
                                <div class="pq-blog-contain" style="text-align: center">
                                    <h6 class="pq-blog-title">
                                        <a href="#">
                                            {{$par->name}}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 1-column-blog -->



@endsection
