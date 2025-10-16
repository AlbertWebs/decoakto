@extends('front.master-category')


@section('content')
@foreach ($Categories as $Category)
 <!-- Breadcrumb -->
<br><br><br><br><br><br>
    @if($Category->has_products == 1)
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

    </div>
    @endif

<!-- Breadcrumb -->

<!-- About Us -->
    <section class="blog-single">
        <div class="container">
           <p class="pq-section-description">
                {!!html_entity_decode($Category->content)!!}
            </p>
        </div>
    </section>


    {{--  --}}
@endforeach

@endsection
