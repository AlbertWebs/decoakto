@extends('front.master')


@section('content')

  <!-- Breadcrumb -->
  <div class="pq-breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h1>Our Portfolio</h1>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}"><i class="fas fa-home me-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Our Portfolio</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb -->

<!-- Masnory -->
<section class="masonry gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-grid-container">

                    <div class="pq-masonry" data-next_items="3" data-initial_items="6">
                        <div class="grid-sizer pq-col-4"></div>
                        <?php
                            $Portfolio = DB::table('portfolios')->get();
                        ?>
                        @foreach ($Portfolio as $Portfolio)
                            <div class="item pq-masonry-item pq-filter-items  ipt-lg-4 style_2 59 ">
                                <div class="pq-portfoliobox-1">
                                    <div class="pq-portfolio-block">
                                        <a href="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}">
                                            <img style="width:100%; height:433px;" src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}" alt="{{$Portfolio->name}}">
                                        </a>
                                        <div class="pq-portfolio-info">
                                            <h5><a href="">{{$Portfolio->name}}</a></h5>
                                            <?php
                                                $Categories = \App\Models\Category::find($Portfolio->category_id);
                                            ?>
                                            <span><a href="">{{$Categories->title}}</a></span>
                                        </div>
                                        <div class="pq-btn-container">
                                            <a href="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}" class="pq-button pq-button-link">
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
                    </div>
                </div>
                <div class="text-center pq-mt-30">
                    <a id="showMore" class="pq-button pq-button-flat" href="#">
                        <div class="pq-button-block">
                            <span class="pq-btn-text">load More</span>
                            <span class="pq-button-line-right"></span>
                            <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Masnory -->

@endsection
