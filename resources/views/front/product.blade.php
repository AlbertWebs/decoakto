@extends('front.master-product')

@section('content')

<style>
    /* Product Image Size Improvements */
    .single-portfolio-slider {
        max-width: 100%;
        margin: 0 auto;
    }
    
    .single-portfolio-slider .owl-carousel {
        max-width: 100%;
    }
    
    .single-portfolio-slider .item {
        max-height: 400px !important;
        height: 400px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        background: #f5f5f5;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .single-portfolio-slider .item img,
    .single-portfolio-slider .product-image {
        width: auto !important;
        max-width: 100% !important;
        max-height: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        display: block;
        margin: 0 auto;
    }
    
    /* Mobile optimizations */
    @media (max-width: 767px) {
        .single-portfolio-slider .item {
            max-height: 300px !important;
            height: 300px !important;
        }
        
        .single-portfolio-slider {
            margin-bottom: 20px;
        }
    }
    
    /* Tablet optimizations */
    @media (min-width: 768px) and (max-width: 991px) {
        .single-portfolio-slider .item {
            max-height: 350px !important;
            height: 350px !important;
        }
    }
    
    /* Desktop - keep reasonable size */
    @media (min-width: 992px) {
        .single-portfolio-slider .item {
            max-height: 450px !important;
            height: 450px !important;
        }
    }
</style>

@foreach ($Products as $product)

<!-- Portfolio Sinlge -->
<section class="single-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-portfolio-slider">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="0">
                        <div class="item">
                            <img src="{{url('/')}}/uploads/products/{{$product->image_one}}" 
                                 class="img-fluid product-image" 
                                 alt="{{$product->name}} - Quick-Step Flooring"
                                 loading="eager"
                                 decoding="async"
                                 width="800"
                                 height="600"
                                 fetchpriority="high">
                        </div>
                        @if($product->image_two == null OR $product->image_two =="0")

                        @else
                        <div class="item">
                            <img src="{{url('/')}}/uploads/products/{{$product->image_two}}" 
                                 class="img-fluid product-image" 
                                 alt="{{$product->name}} - Quick-Step Flooring"
                                 loading="lazy"
                                 decoding="async"
                                 width="800"
                                 height="600">
                        </div>
                        @endif

                        @if($product->image_three == null OR $product->image_three =="0")

                        @else
                        <div class="item">
                            <img src="{{url('/')}}/uploads/products/{{$product->image_three}}" 
                                 class="img-fluid product-image" 
                                 alt="{{$product->name}} - Quick-Step Flooring"
                                 loading="lazy"
                                 decoding="async"
                                 width="800"
                                 height="600">
                        </div>
                        @endif
                    </div>
                </div>
                <div class="pq-portfolio-info-box pq-mb-45">
                    <div class="pq-portfolio-info">
                        <ul class="pq-info-list">
                            <li>
                                <h5>Thickness</h5>
                                <span>{{$product->thickness}}</span>
                            </li>
                            <li>
                                <h5>Dimensions</h5>
                                <span>{{$product->dimensions}}</span>
                            </li>
                            <li>
                                <h5>AC Ratings</h5>
                                <span>{{$product->a_c_ratings}}</span>
                            </li>
                            <li>
                                <h5>Species</h5>
                                <span>{{$product->species}}</span>
                            </li>
                            <li>
                                <h5>Color</h5>
                                <span>{{$product->color}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h3>{{$product->name}}</h3>
                {{-- <p>{!!html_entity_decode(str_replace($product->meta, "<p>&nbsp;</p>", ""))!!}</p> --}}
                <p>{!!html_entity_decode(str_replace("<p>&nbsp;</p>", "", $product->meta))!!}</p>
                <div class="divider pq-right-border pq-45"></div>
                {{-- <p>{!!html_entity_decode($product->content)!!}</p> --}}
                <p>{!!html_entity_decode(str_replace("<p>&nbsp;</p>", "", $product->content))!!}</p>
            </div>
        </div>
    </div>
    {{-- <div class="pq-portfolio-bg-img"></div> --}}
</section>
<!-- Portfolio Single -->
@endforeach



@endsection
