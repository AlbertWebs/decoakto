@extends('front.master-flooring')


@section('content')

<style>
    /* Fix header overlap issue - Add padding-top to content wrapper */
    .content-wrapper {
        padding-top: 150px !important;
        display: block !important;
    }
    
    @media (max-width: 767px) {
        .content-wrapper {
            padding-top: 30px !important;
        }
    }
    
    @media (min-width: 768px) {
        .content-wrapper {
            padding-top: 200px !important;
        }
    }
    
    @media (min-width: 992px) {
        .content-wrapper {
            padding-top: 220px !important;
        }
    }
    
    /* Ensure content section is below header */
    section[class*="content"],
    .pq-section-title,
    .pq-section-main-title {
        position: relative !important;
        z-index: 1 !important;
    }
    
    /* Ensure header doesn't overlap */
    #pq-header {
        z-index: 999 !important;
    }
    
    /* Mobile Header Improvements */
    @media (max-width: 576px) {
        /* Header Section - Make it stand out */
        .pq-section-title {
            margin-bottom: 20px !important;
            text-align: center !important;
        }
        
        .pq-section-main-title {
            font-size: 24px !important;
            font-weight: 700 !important;
            line-height: 1.3 !important;
            color: #1c186c !important;
            margin-bottom: 16px !important;
            padding: 0 !important;
            letter-spacing: -0.5px !important;
        }
        
        /* Button alignment and styling */
        .button-align {
            text-align: center !important;
            margin-bottom: 24px !important;
        }
        
        .pq-button {
            display: inline-block !important;
            padding: 12px 24px !important;
            background-color: #1c186c !important;
            color: #fff !important;
            border-radius: 8px !important;
            transition: all 0.3s ease !important;
            box-shadow: 0 2px 8px rgba(28, 24, 108, 0.2) !important;
        }
        
        .pq-button:hover {
            background-color: #15125a !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 4px 12px rgba(28, 24, 108, 0.3) !important;
        }
        
        .pq-button-text {
            font-size: 14px !important;
            font-weight: 600 !important;
            color: #fff !important;
        }
        
        .pq-button-line-right {
            display: none !important;
        }
        
        .pq-button i {
            margin-left: 8px !important;
            font-size: 14px !important;
        }
        
        /* Container spacing - reduced padding */
        .container {
            padding-left: 12px !important;
            padding-right: 12px !important;
            padding-top: 4px !important;
            padding-bottom: 4px !important;
            margin-top: 0 !important;
        }
        
        /* Row spacing - reduced margins */
        .row {
            margin-left: -8px !important;
            margin-right: -8px !important;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
        
        .row > div[class*="col"] {
            margin-bottom: 8px !important;
            margin-top: 0 !important;
            padding-left: 8px !important;
            padding-right: 8px !important;
            padding-top: 0 !important;
        }
        
        /* Section title spacing */
        .pq-section-title {
            margin-bottom: 8px !important;
            margin-top: 0 !important;
            padding: 0 !important;
        }
        
        .pq-section-main-title {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        
        /* Button alignment spacing */
        .button-align {
            margin-bottom: 12px !important;
            margin-top: 0 !important;
            padding: 0 !important;
        }
        
        /* Divider - reduced margin */
        .divider {
            margin: 8px 0 !important;
        }
    }
    
    /* Mobile optimization for products grid */
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
        
        .pq-post-media {
            margin-bottom: 12px;
            width: 100% !important;
            height: 0 !important;
            overflow: hidden !important; /* Clip image to container */
            border-radius: 8px 8px 0 0;
            position: relative !important;
            padding-top: 100% !important; /* 1:1 square aspect ratio */
            aspect-ratio: 1 / 1 !important; /* Modern CSS for square */
            background: #f5f5f5;
            flex-shrink: 0;
        }
        
        .pq-post-media img,
        .pq-post-media .prod-img {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            object-position: center !important;
            border-radius: 8px 8px 0 0;
            display: block !important;
            max-width: 100% !important;
            max-height: 100% !important;
            min-width: 100% !important;
            z-index: 1;
        }
        
        /* Ensure badge is positioned relative to container, not clipped */
        .pq-post-media .pq-post-category {
            position: absolute !important;
            top: 8px !important;
            bottom: auto !important;
            left: 8px !important;
            right: auto !important;
            z-index: 20 !important;
            pointer-events: auto !important;
        }
        
        /* Badge positioning - top left on mobile */
        .pq-post-category {
            position: absolute !important;
            top: 8px !important;
            bottom: auto !important;
            left: 8px !important;
            right: auto !important;
            z-index: 20 !important; /* Higher than image */
            padding: 4px 8px !important;
            border-radius: 4px !important;
            font-size: 9px !important;
            margin: 0 !important;
            display: inline-block !important;
            line-height: 1.2 !important;
            max-width: calc(100% - 16px) !important;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
        }
        
        /* Ensure badge is within image container */
        .pq-post-media .pq-post-category {
            position: absolute !important;
            top: 8px !important;
            bottom: auto !important;
            left: 8px !important;
            right: auto !important;
            z-index: 20 !important;
        }
        
        .pq-post-category a {
            font-size: 9px !important;
            padding: 0 !important;
            margin: 0 !important;
            display: block !important;
            color: inherit !important;
            text-decoration: none !important;
            line-height: 1.2 !important;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
        }
        
        .pq-blog-contain {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 0 12px 12px 12px;
            padding-top: 8px !important;
        }
        
        .pq-blog-title,
        .product-name {
            margin-bottom: 8px;
        }
        
        .pq-blog-title a,
        .product-name a {
            font-size: 12px !important;
            line-height: 1.3 !important;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-weight: 600;
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
        
        /* Hide sidebar on mobile */
        .col-lg-3.sidebar,
        .col-lg-3.mt-4.mt-lg-0,
        .sidebar,
        div[class*="col-lg-3"]:has(.sidebar),
        .row > .col-lg-3:first-child {
            display: none !important;
            visibility: hidden !important;
            height: 0 !important;
            overflow: hidden !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        
        .col-lg-9 {
            width: 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
        
        /* Hide sidebar widgets */
        .widget.widget_block,
        .widget {
            display: none !important;
        }
        
        /* Ensure main content takes full width */
        .row > div:last-child {
            width: 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }
    }
    
    @media (min-width: 577px) and (max-width: 767.98px) {
        .pq-blog .col-md-6 {
            margin-bottom: 24px;
        }
        
        .pq-post-media {
            padding-top: 100% !important; /* 1:1 square aspect ratio - same as mobile and desktop */
            aspect-ratio: 1 / 1 !important;
            overflow: hidden !important;
            border-radius: 8px 8px 0 0;
            position: relative !important;
            height: 0 !important;
        }
        
        .pq-post-media img,
        .pq-post-media .prod-img {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            object-position: center !important;
            border-radius: 8px 8px 0 0;
            display: block !important;
            max-width: 100% !important;
            min-width: 100% !important;
            max-height: 100% !important;
        }
    }
    
    /* Ensure product post container maintains structure */
    .pq-blog-post {
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .pq-post-media {
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
        padding-top: 100% !important; /* 1:1 square aspect ratio - consistent across all devices */
        aspect-ratio: 1 / 1 !important;
        height: 0 !important;
    }
    
    .pq-post-media img,
    .pq-post-media .prod-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        max-width: 100% !important;
        min-width: 100% !important;
        max-height: 100%;
    }
    
    /* Color badge styling for all screen sizes */
    .pq-post-category {
        position: absolute;
        top: 10px;
        bottom: auto;
        left: 10px;
        right: auto;
        z-index: 10;
        padding: 3px 8px;
        border-radius: 4px;
        font-size: 9px;
        font-weight: 600;
        display: inline-block;
        line-height: 1.2;
    }
    
    .pq-post-category a {
        display: block;
        color: #333 !important;
        text-decoration: none;
        padding: 0;
        margin: 0;
        line-height: 1.2;
        font-weight: 600;
    }
    
    /* Ensure badge text is visible - override inline styles */
    .pq-post-category a[style*="color"] {
        color: #333 !important;
    }
    
    /* Override any inline color styles */
    .pq-post-category a {
        color: #333 !important;
    }
    
    /* Dark backgrounds get white text - handle various color name formats */
    .pq-post-category[style*="background-color: Black"] a,
    .pq-post-category[style*="background-color: Brown"] a,
    .pq-post-category[style*="background-color: black"] a,
    .pq-post-category[style*="background-color: brown"] a,
    .pq-post-category[style*="background-color:Black"] a,
    .pq-post-category[style*="background-color:Brown"] a {
        color: #fff !important;
    }
    
    /* Light backgrounds get dark text */
    .pq-post-category[style*="background-color: White"] a,
    .pq-post-category[style*="background-color: Gold"] a,
    .pq-post-category[style*="background-color: Gray"] a,
    .pq-post-category[style*="background-color: Red"] a,
    .pq-post-category[style*="background-color: white"] a,
    .pq-post-category[style*="background-color: gold"] a,
    .pq-post-category[style*="background-color: gray"] a,
    .pq-post-category[style*="background-color: red"] a {
        color: #333 !important;
    }
    
    @media (max-width: 576px) {
        .pq-post-category {
            top: 8px !important;
            bottom: auto !important;
            left: 8px !important;
            right: auto !important;
            padding: 4px 8px !important;
            font-size: 9px !important;
        }
    }
    
    /* Desktop badge positioning */
    @media (min-width: 992px) {
        .pq-post-media {
            position: relative !important;
            overflow: hidden !important; /* Keep hidden for consistent image sizing */
            padding-top: 100% !important; /* 1:1 square aspect ratio - same as mobile */
            aspect-ratio: 1 / 1 !important;
            height: 0 !important;
        }
        
        .pq-post-media img,
        .pq-post-media .prod-img {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            object-position: center !important;
            max-width: 100% !important;
            min-width: 100% !important;
            max-height: 100% !important;
        }
        
        .pq-post-category {
            top: 10px !important;
            bottom: auto !important;
            left: 10px !important;
            right: auto !important;
            position: absolute !important;
            padding: 5px 10px !important;
            font-size: 11px !important;
            z-index: 20 !important;
        }
        
        .pq-post-category a {
            font-size: 11px !important;
        }
    }
    
    /* Fix for all screen sizes */
    .pq-post-media img,
    .pq-post-media .prod-img {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 100% !important;
        display: block;
    }
    
    /* Force square on mobile - override any other styles */
    @media (max-width: 576px) {
        .pq-post-media::before {
            content: '';
            display: block;
            padding-top: 100%;
        }
        
        .pq-post-media {
            height: auto !important;
        }
    }
    
    /* Desktop image styling */
    @media (min-width: 992px) {
        .pq-post-media {
            padding-top: 0;
            height: auto;
        }
        
        .pq-post-media img,
        .pq-post-media .prod-img {
            position: static;
            width: 100% !important;
            min-width: 100% !important;
            max-width: 100% !important;
            height: auto;
            object-fit: cover;
            max-height: 250px;
        }
    }
</style>

 <!-- Breadcrumb -->
<div class="content-wrapper">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <h5 class="pq-section-main-title">{{$PageTitle}}</h5>
                </div>
            </div>
            <div class="col-lg-4 wow animated fadeInRight">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="{{url('/')}}/products/explore/{{$catslung}}">
                        <div class="pq-button-block">
                        <span class="pq-button-text">Explore More </span>
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



<!-- 1-column-blog -->
<section class="1-column-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="sidebar ">



                    <div class="widget widget_block" style="height:309px;">
                        <!-- <h2>Color</h2> -->
                        <p class="wp-block-tag-cloud">
                            <?php
                                $Color = DB::table('colors')->where('category_id','1')->get();
                            ?>
                            @foreach ($Color as $color)

                             @if($color->title == "Black" || $color->title == "Brown" || $color->title == "Green")
                                 <a style="background-color: {{$color->title}}; color:#ffffff; font-weight:600; width:70px;" href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}" class="tag-cloud-link pq-post-category">{{$color->title}}</a>
                             @else
                                 <a style="background-color: {{$color->title}}; color:#000000; font-weight:600; width:70px;" href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}" class="tag-cloud-link pq-post-category">{{$color->title}}</a>
                             @endif

                            @endforeach
                    </div>

                    <div class="widget widget_block hide-mobile">
                        <h2>Search Filter</h2>
                        <div class='filterComponent form-white'>
                            <form class="form-white" method="get" action="{{url('/')}}/search-filter">
                                {{-- <input type="search" placeholder="Search floor" /> --}}

                                <div class="form-group">
                                    <label for="cat">Select Class</label>
                                    <?php
                                        $Class = DB::table('classifications')->get();
                                    ?>

                                    <select name="class" id="cat" class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        @foreach ($Class as $class)
                                        <option value="{{$class->slung}}" >{{$class->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group sub_cat_holder">
                                    <label for="sub_cat">Subclass</label>
                                    <select name="child"  id="sub_cat" class="form-control form-control-sm" id="exampleFormControlSelect1">

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Color</label>
                                    <select name="color" class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        @foreach ($Color as $color)
                                        <option  value="{{$color->title}}" value="">{{$color->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mb-2">Apply FIlter</button>
                            </form>
                        </div>
                    </div>

                    <div class="widget widget_block hide-mobile" >
                        <div class="is-layout-constrained wp-block-group">
                            <?php
                                $Classifications = DB::table('classifications')->get();
                            ?>
                            @foreach ($Classifications as $classifications)
                                <div class="wp-block-group__inner-container">
                                    <a href="{{url('/')}}/class/{{$classifications->slung}}">
                                        <h2>{{$classifications->title}}</h2>
                                    </a>
                                    <ul class="wp-block-categories-list wp-block-categories">
                                        <?php
                                            $SubClassifications = DB::table('sub_classifications')->where('classification_id',$classifications->id)->get();
                                        ?>
                                        @foreach ($SubClassifications as $sub)
                                        <li class="cat-item">
                                            <a style="font-size:13px" href="{{url('/')}}/child/{{$sub->slung}}">{{$sub->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="divider pq-right-border pq-10"></div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-9">
                <div class="pq-blog pq-blog-col-3">
                    <div class="row">
                        @foreach ($Products as $products)
                            <div class="col-6 col-md-6 col-lg-4">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{url('/')}}/uploads/products/{{$products->image_one}}" alt="{{$products->name}}" class="prod-img">
                                        <div class="pq-post-category" style="background-color: {{$products->color}}">
                                            <a style="background-color: {{$products->color}}" href="{{url('/')}}/product/{{$products->slung}}">{{$products->color}}</a>
                                        </div>
                                    </div>
                                    <div class="pq-blog-contain">
                                        <p class="pq-blog-title product-name">
                                            <a href="{{url('/')}}/product/{{$products->slung}}">
                                                {{$products->name}}
                                            </a>
                                        </p>

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        $(document).ready(function (e) {
            $('.sub_cat_holder').hide();
            $('#cat').on('change', e => {
                var val = $('#cat').val();
                var root = location.protocol + '//' + location.host;
                $('#sub_cat').empty()
                $.ajax({
                    url: `${root}/get-subcategories/${val}`,
                    success: function(data){
                        $('.sub_cat_holder').show();
                            var toAppend = '';
                            $.each(data,function(i,o){
                            toAppend += '<option class="circle" value="'+o.slung+'">'+o.title+'</option>';
                        });
                        $('#sub_cat').append(toAppend);
                        $('#sub_cat').empty();
                        $('#sub_cat').append(toAppend);
                        $("#sub_cat").material_select()

                        }
                })
            })
        })
    </script>
</div>
@endsection
