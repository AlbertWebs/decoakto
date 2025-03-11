@extends('front.master')


@section('content')

 <!-- Breadcrumb -->
<br><br><br><br><br><br>
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
                <div class="sidebar">



                    <div class="widget widget_block" style="height:309px;">
                        <h2>Color</h2>
                        <p class="wp-block-tag-cloud">
                            <?php
                                $Color = DB::table('colors')->where('category_id','1')->get();
                            ?>
                            @foreach ($Color as $color)

                             @if($color->title == "White")
                                 <a style="background-color: {{$color->title}}; color:#000000; font-weight:600; width:70px;" href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}" class="tag-cloud-link pq-post-category">{{$color->title}}</a>
                             @else
                                 <a style="background-color: {{$color->title}}; color:#ffffff; font-weight:600; width:70px;" href="{{url('/')}}/products/color/original-laminate-flooring/{{$color->title}}" class="tag-cloud-link pq-post-category">{{$color->title}}</a>
                             @endif

                            @endforeach
                    </div>

                    <div class="widget widget_block">
                        <h2>Search Filter</h2>
                        <div class='filterComponent form-white'>
                            <form class="form-white" method="get" action="{{url('/')}}/search-filter">
                                {{-- <input type="search" placeholder="Search floor" /> --}}

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Class</label>
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
                                    <label for="exampleFormControlSelect1">Subclass</label>
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

                    <div class="widget widget_block">
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
                            <div class="col-lg-4">
                                <div class="pq-blog-post">
                                    <div class="pq-post-media">
                                        <img decoding="async" src="{{url('/')}}/uploads/products/{{$products->image_one}}" alt="{{$products->name}}" style="height:309px">
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

@endsection
