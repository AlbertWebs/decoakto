@extends('front.master')

@section('content')

<main style="background-color: #ffffff">
    {{--  --}}
    <div class="product_versions" style="text-align: center; line-height:normal; background-color: rgb(238,238,240); padding:100px">
       {{-- <h1>ENJOY PROFESSIONAL AND RELIABLE INSTALLATION SERVICES</h1> --}}

        <h2 class="product_version_h2" style="font-weight: 100; padding-top:100px; margin: 20px 25px;">With great products you need an equally great service!</h2>

        <h3 class="product_version_h3" style="font-weight: 100; max-width:700px; margin:0px auto; color: rgb(87,68,57);">
            We have dedicated ourselves to perfection. Yes, our products are amazing, but so are our services! Enjoy a hassle free service, from purchase to installation.
        </h3>

    </div>
    {{--  --}}
    <div class="container" style="background-color: #ffffff">
      <!-- Gallery -->
      <section class="section menu" aria-label="menu-label" id="menu">
        {{-- <h2 class="headline-1 section-title text-center" style="color:#2944d1; text-shadow: 1px 1px 0px #E34C8A;">Our Project Gallery</h2> --}}
        <div class="image-grid" style=" --num-cols: 3;">


            <?php
                $Portfolio = DB::table('portfolios')->get();
            ?>
            @foreach ($Portfolio as $Portfolio)
            <div class="image-grid-col-1 image-curve ">
                <div class="containerm">
                    <div class="card">
                        <div class="front">
                            <img class="image-curve"
                                src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}"
                                alt="{{$Portfolio->name}}" />
                        </div>
                        <div class="back" style="max-height: 100%; overflow:scroll;">
                            <h3 class="text-center"><a href="{{url('/')}}/portfolio/{{$Portfolio->slung}}">{{$Portfolio->name}}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>

      {{--  --}}
    </div>
  </main>

@endsection
