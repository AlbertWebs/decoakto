@extends('front.master')


@section('content')

 <!-- Breadcrumb -->
<br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <h5 class="pq-section-main-title">Search Results For {{$search}}</h5>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="divider pq-right-border pq-45"></div>
            </div>
        </div>
    </div>

<!-- Breadcrumb -->



<!-- 1-column-blog -->
<section class="1-column-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-blog pq-blog-col-3">
                    <div class="row">
                        @foreach ($Products as $products)
                            <div class="col-lg-4">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{url('/')}}/uploads/products/{{$products->image_one}}" alt="{{$products->name}}" style="height:409px">
                                        <div class="pq-post-category" style="background-color: {{$products->color}}">
                                            <a style="background-color: {{$products->color}}" href="{{url('/')}}/product/{{$products->slung}}">{{$products->color}}</a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <h5 class="pq-blog-title">
                                            <a href="{{url('/')}}/product/{{$products->slung}}">
                                                {{$products->name}}
                                            </a>
                                        </h5>

                                        <div class="pq-btn-container">
                                            <a href="{{url('/')}}/product/{{$products->slung}}" class="pq-button pq-button-flat">
                                                <div class="pq-button-block">
                                                    <span class="pq-button-text">Explore  </span>
                                                    <span class="pq-button-line-right"></span>
                                                    <i class="ion ion-ios-arrow-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="pq-pagination">
                            <nav aria-label="Page navigation">
                                {{-- <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="next page-numbers">Next page</a></li>
                                </ul> --}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1-column-blog -->

@endsection
