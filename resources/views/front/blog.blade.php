@extends('front.master')


@section('content')

<style>
    /* Mobile optimization for blog grid */
    @media (max-width: 576px) {
        .pq-blog .row {
            margin-left: -8px;
            margin-right: -8px;
        }
        
        .pq-blog .col-6 {
            padding-left: 8px;
            padding-right: 8px;
            margin-bottom: 16px;
        }
        
        .pq-blog-post {
            margin-bottom: 0;
            overflow: hidden;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .pq-post-media.blog-img {
            margin-bottom: 12px;
            width: 100% !important;
            height: 0 !important;
            overflow: hidden;
            border-radius: 8px 8px 0 0;
            position: relative;
            padding-top: 100% !important; /* 1:1 square aspect ratio */
            aspect-ratio: 1 / 1 !important; /* Modern CSS for square */
            background: #f5f5f5;
            flex-shrink: 0;
        }
        
        .pq-post-media.blog-img img {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            object-position: center !important;
            border-radius: 8px 8px 0 0;
            display: block;
            max-width: 100% !important;
            max-height: none !important;
        }
        
        .pq-blog-contain {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 0 12px 12px 12px;
        }
        
        .pq-blog-title {
            margin-bottom: 8px;
        }
        
        .pq-blog-title a {
            font-size: 12px !important;
            line-height: 1.3 !important;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-weight: 600;
        }
        
        .pq-post-meta {
            margin-bottom: 6px;
        }
        
        .pq-post-meta a {
            font-size: 10px !important;
        }
        
        .pq-btn-container {
            margin-top: 8px;
        }
        
        .pq-button {
            padding: 6px 12px !important;
            font-size: 11px !important;
        }
        
        .pq-button .pq-button-text {
            font-size: 11px !important;
            line-height: 1.2;
        }
        
        .pq-button-block {
            padding: 0 !important;
        }
        
        .pq-button i {
            font-size: 12px !important;
        }
        
    }
    
    @media (min-width: 577px) and (max-width: 767.98px) {
        .pq-blog .col-md-6 {
            margin-bottom: 24px;
        }
        
        .pq-post-media.blog-img {
            padding-top: 75%; /* 4:3 aspect ratio */
            overflow: hidden;
            border-radius: 8px;
        }
        
        .pq-post-media.blog-img img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    }
    
    /* Ensure blog post container maintains structure */
    .pq-blog-post {
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .pq-post-media.blog-img {
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
    }
    
    /* Fix for all screen sizes */
    .pq-post-media.blog-img img {
        max-width: 100%;
        display: block;
    }
    
    /* Force square on mobile - override any other styles */
    @media (max-width: 576px) {
        .pq-post-media.blog-img::before {
            content: '';
            display: block;
            padding-top: 100%;
        }
        
        .pq-post-media.blog-img {
            height: auto !important;
        }
    }
    
    /* Desktop image styling */
    @media (min-width: 992px) {
        .pq-post-media.blog-img {
            padding-top: 0;
            height: auto;
        }
        
        .pq-post-media.blog-img img {
            position: static;
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 250px;
        }
    }
</style>


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
                            <div class="col-6 col-md-6 col-lg-4">
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
