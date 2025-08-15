@extends('front.master')


@section('content')


 <!-- Breadcrumb -->
 <div class="pq-breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h1>Blogs</h1>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}"><i class="fas fa-home me-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Blogs</li>
                        </ol>
                    </div>
                </nav>
            </div>
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
                        @foreach ($Blog as $blog)
                            <div class="col-lg-4">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media blog-img">
                                        <img decoding="async" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="blog-image">
                                    </div>
                                    <div class="pq-blog-contain">
                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-meta">
                                                    <a href="{{url('/')}}/blogs/{{$blog->slung}}">{{ date('M d,Y', strtotime($blog->created_at)) }} </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <h5 class="pq-blog-title">
                                            <a href="{{url('/')}}/blogs/{{$blog->slung}}">{{$blog->title}}</a>
                                        </h5>
                                        {{-- <p>{{$blog->meta}}</p> --}}
                                        <div class="pq-btn-container">
                                            <a href="{{url('/')}}/blogs/{{$blog->slung}}" class="pq-button pq-button-flat">
                                                <div class="pq-button-block">
                                                    <span class="pq-button-text">Read More  </span>
                                                    <span class="pq-button-line-right"></span>
                                                    <i class="ion ion-ios-arrow-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="pq-pagination">
                            <nav aria-label="Page navigation">
                                <ul class="page-numbers">
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="next page-numbers">Next page</a></li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1-column-blog -->

@endsection
