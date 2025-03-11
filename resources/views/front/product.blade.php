@extends('front.master-product')


@section('content')

@foreach ($Products as $product)

<!-- Portfolio Sinlge -->
<section class="single-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-portfolio-slider">
                    <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="0">
                        <div class="item" style="max-height:520px">
                            <img style="width: 100%;  height: 100%; object-fit: contain" src="{{url('/')}}/uploads/products/{{$product->image_one}}" class="img-fluid" alt="">
                        </div>
                        @if($product->image_two == null OR $product->image_two =="0")

                        @else
                        <div class="item" style="max-height:520px">
                            <img style="width: 100%;  height: 100%; object-fit: contain" src="{{url('/')}}/uploads/products/{{$product->image_two}}" class="img-fluid" alt="">
                        </div>
                        @endif

                        @if($product->image_three == null OR $product->image_three =="0")

                        @else
                        <div class="item" style="max-height:520px">
                            <img style="width: 100%;  height: 100%; object-fit: contain" src="{{url('/')}}/uploads/products/{{$product->image_three}}" class="img-fluid" alt="">
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
