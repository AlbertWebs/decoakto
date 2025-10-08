@extends('front.master-about')


@section('content')
@foreach ($About as $about)
<!-- Breadcrumb -->
 <div class="pq-breadcrumb" style="background-image: url('{{url('/')}}/uploads/about/{{$about->image_one}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h1>About Us</h1>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}"><i class="fas fa-home me-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb -->




 <section class="blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin:0 auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pq-blog-post">

                            <div class="pq-blog-contain">

                                <p>
                                    {!!html_entity_decode($about->content)!!}
                                </p>


                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Single
    @endforeach

@endsection
