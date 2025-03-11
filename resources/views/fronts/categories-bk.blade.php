@extends('front.master')

@section('content')
@foreach ($Categories as $Category)
{{--  --}}
<div class="product_version">
    <span class="product_verion_link">
        <a href="{{url('/')}}"
            >Home <ion-icon name="chevron-forward-outline"></ion-icon
        ></a>

        <a href="{{url('/')}}">{{$Category->title}}</a>
    </span>

    <h2 class="product_version_h2">{{$Category->title}}</h2>

    <h3 class="product_version_h3">
        {!!html_entity_decode($Category->meta)!!}
    </h3>
    <h3 class="product_version_h3_2">
        {!!html_entity_decode($Category->heading_two)!!}
    </h3>

    <div class="product_version_div_one">
        <div class="product_version_div_one_left">
            <img src="{{url('/')}}/uploads/categories/{{$Category->image}}" alt="{{$Category->title}}" />
        </div>
        <div class="product_version_div_one_right">
            <div class="product_version_div_one_right_header">
                <img src="{{asset('version/assets/images/rocky.png')}}" alt="" />
                <h3>
                    {!!html_entity_decode($Category->heading_two_section)!!}
                </h3>
            </div>

            <div class="product_version_div_one_right_body">
                {{-- <div class="product_version_div_one_right_body_left">
                    <h4>1</h4>
                </div> --}}
                <div class="product_version_div_one_right_body_right">
                    <h4>
                        {!!html_entity_decode($Category->content)!!}
                    </h4>
                </div>
            </div>



        </div>
    </div>
    <?php
        $Extras = DB::table('extras')->where('category_id',$Category->id)->get();
        $Order = 1;
    ?>
    @if($Extras->isEmpty())

    @else
    <h3 class="product_version_h_link" style="text-transform: uppercase">
        WHY YOU WOULD LIKE OUR {{$Category->title}}
    </h3>

    @foreach ($Extras as $extra)
      @if($Order % 2 == 0)
      <div class="product_version_before_slider" style="background-color: #ffffff !important">
        <div class="product_version_before_slider_left">
            <div class="great_order">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <div class="slides">
                            <img
                                src="{{url('/')}}/uploads/extras/{{$extra->image}}"
                                alt="Image 1"
                            />
                        </div>

                        <!-- Add more slide elements with appropriate images -->
                    </div>

                    <div class="preview">
                        <!-- Preview images will be generated dynamically through JavaScript -->
                    </div>
                </div>
            </div>
        </div>
        <div class="product_version_before_slider_right">
            <h3 class="product_version_before_slider_right_h3">
                {{$extra->title}}
            </h3>
            <p class="text-black">
                {!!html_entity_decode($extra->content)!!}
            </p>
        </div>
      </div>
        @else
        <div class="product_version_before_slider" >
            <div class="product_version_before_slider_left">
                <div class="great_order">
                    <div class="slider-container" id="slider1">
                        <div class="slider">
                            <div class="slides">
                                <img
                                    src="{{url('/')}}/uploads/extras/{{$extra->image}}"
                                    alt="Image 1"
                                />
                            </div>

                            <!-- Add more slide elements with appropriate images -->
                        </div>

                        <div class="preview">
                            <!-- Preview images will be generated dynamically through JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_version_before_slider_right">
                <h3 class="product_version_before_slider_right_h3">
                    {{$extra->title}}
                </h3>
                <p class="text-black">
                    {!!html_entity_decode($extra->content)!!}
                </p>
            </div>
        </div>
        @endif

        <?php $Order = $Order+1; ?>

    @endforeach
    @endif

    <div class="preview_laminate_thickness">
        <div class="preview_laminate_thickness_left">
            <h3>The {{$Category->title}} Thicknesses</h3>
            <p>
                {!!html_entity_decode($Category->thicknesses)!!}
            </p>

            <div>
                <button>More Thickness Introduction</button>
                <button onclick="window.location.href='/contact-us'">Get Free Sample</button>
            </div>
        </div>
        <div class="preview_laminate_thickness_right">
            <?php
                $Thickness = DB::table('thicknesses')->where('category_id',$Category->id)->get();
            ?>
            @foreach ($Thickness as $Thick)
            <div class="preview_laminate_thickness_right_div may">
                <img src="{{asset('version/assets/images/gret.png')}}" alt="Image 3" />
                <p>{{$Thick->title}}</p>
                <div class="preview_laminate_thickness_right_div_div">
                    <h1>
                        <a href="{{url('/')}}/products/thickness/{{$Category->slung}}/{{$Thick->title}}"
                            ><ion-icon name="eye-outline"></ion-icon
                        ></a>
                    </h1>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="preview_laminate_thickness">
        <div class="preview_laminate_thickness_left preview_ac_thickness_left">
            <h3>The AC Rating</h3>
            <p>
                {!!html_entity_decode($Category->a_c_ratings)!!}
            </p>

            <div class="ac-btns">
                <button>More AC Rating</button>
                <button onclick="window.location.href='/contact-us'">Get Free Sample</button>
            </div>
        </div>
        <div class="preview_laminate_thickness_right">
            <?php
              $AC = DB::table('a_c_ratings')->where('category_id',$Category->id)->get();
            ?>
            @foreach ($AC as $ac)
                <div class="preview_laminate_thickness_right_div jan">
                    <img src="{{url('/')}}/uploads/ac_ratings/{{$ac->image}}" alt="Image 3" />
                        <p class="ac-text">
                            <a href="{{url('/')}}/products/ac-rating/{{$Category->slung}}/{{$ac->slung}}">{{$ac->title}}</a>
                        </p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="wood_color_species">
        <div class="buttons">
            <button class="slider-btn_version" data-slide="slide1">
                Wood color
            </button>
            <button class="slider-btn_version" data-slide="slide2">
                Species
            </button>
        </div>

        <div class="slider-container_version">
            <div class="slider-content_version" id="slide1">
                <div class="slider-content_version_left">
                    <h3>Selection Of Color</h3>
                    <p>
                        {!!html_entity_decode($Category->color)!!}
                    </p>
                </div>
                <div class="slider-content_version_right">
                    <?php
                        $Color = DB::table('colors')->where('category_id',$Category->id)->get();
                    ?>
                    @foreach ($Color as $color)
                    <div>
                        <div>
                            <img src="{{url('/')}}/uploads/colors/{{$color->image}}" alt="" />
                        </div>
                        <p>
                            <a href="{{url('/')}}/products/color/{{$Category->slung}}/{{$color->title}}">{{$color->title}}</a>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="slider-content_version hidden" id="slide2">
                <div class="slider-content_version_left">
                    <h3>Selection Of Species</h3>
                    <p>
                        {!!html_entity_decode($Category->species)!!}
                    </p>
                </div>
                <div class="slider-content_version_right">
                    <?php
                    $Specie = DB::table('species')->where('category_id',$Category->id)->get();
                    ?>
                    @foreach ($Specie as $species)
                    <div>
                        <div>
                            <img src="{{url('/')}}/uploads/species/{{$species->image}}" alt="" />
                        </div>
                        <p>
                            <a href="{{url('/')}}/products/species/{{$Category->slung}}/{{$species->title}}">{{$species->title}}</a>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="custom_color">
        <div class="custom_color_content">
            <h3>Are you looking for custom colors?</h3>
            <p>
                We're happy to work with your designer to make the right
                color. Send us contact form and we will contact you!
            </p>
            <a href="#">Get Free Sample</a>
        </div>
    </div>

    <div class="real_scene_title">
        <h3>Real Scenes Portfolio</h3>
    </div>

    <div class="real_scene">
        <?php
           $Portfolio = DB::table('portfolios')->where('category_id',$Category->id)->get();
        ?>
        @foreach ($Portfolio as $portfolio)
        <div>
            <img src="{{url('/')}}/uploads/portfolios/{{$portfolio->image_one}}" alt="" />
        </div>
        @endforeach
    </div>

    <div class="scene-map">
        <div>
            <img src="{{asset('version/assets/images/shipimp.jpg')}}" alt="" />
        </div>
        <div>
            <h3>Ship to anywhere you want</h3>
        </div>
    </div>
</div>
@include('script.map')
<div id="map"></div>
{{--  --}}
@endforeach
@endsection
