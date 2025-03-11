@extends('front.master')

@section('content')
@foreach ($Products as $product)
<main>
    <div class="product_version">
        <div class="sing_single_product">
            <div class="bank_man divHalf">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <div class="slide">
                            <img
                                src="{{url('/')}}/uploads/products/{{$product->image_one}}"
                                alt="{{$product->name}}"
                                class="imgHalf"
                            />
                        </div>
                        <div class="slide">
                            <img
                                src="{{url('/')}}/uploads/products/{{$product->image_one}}"
                                alt="{{$product->name}}"
                                class="imgHalf"
                            />
                        </div>
                        <div class="slide">
                            <img
                            src="{{url('/')}}/uploads/products/{{$product->image_one}}"
                            alt="{{$product->name}}"
                            class="imgHalf"
                        />
                        </div>
                        <!-- Add more slide elements with appropriate images -->
                    </div>

                    <div class="preview">
                        <!-- Preview images will be generated dynamically through JavaScript -->
                    </div>
                </div>
            </div>

            <div class="sing_single_product_overlay">
                <div>
                    <h4>
                        {{$product->name}}
                    </h4>

                    {{-- <div>
                        <img src="{{asset('version/assets/images/email.png')}}" alt="" />
                        <h4>Email us: <span>info@decomana.com</span></h4>
                    </div> --}}

                    <div>
                        <img src="{{asset('version/assets/images/rocky.png')}}" alt="" />
                        <h4>SKU: {{$product->sku}}</h4>
                    </div>

                    <h4>Product description</h4>
                    <p>{!!html_entity_decode($product->meta)!!}</p>
                    <a href="{{url('/contact-us')}}">
                        Request Quotation
                    </a>
                </div>
            </div>
        </div>

        <div class="left_side_bar_products">
            <div class="left_side_bar_products_left">
                <h5>
                    <a href="{{url('/')}}"> Home </a>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="{{url('/')}}/products">Products</a>
                </h5>

                <div class="sidebar">
                    {{--  --}}
                    <?php
                       $Categories = DB::table('categories')->get();
                    ?>
                    @foreach ($Categories as $categories)
                    <span><strong>{{$categories->title}}</strong></span>
                    <ul class="main-list">
                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Thickness
                            </a>
                            <ul class="sub-menu">
                                <?php
                                  $Thickness = App\Models\Product::select('thickness')->distinct()->where('category',$categories->id)->get();
                                ?>
                                @foreach ($Thickness as $thick)
                                <li><a href="{{url('/')}}/products/thickness/{{$categories->slung}}/{{$thick->thickness}}">{{$thick->thickness}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                Color
                            </a>
                            <ul class="sub-menu">
                                <?php
                                  $Color = App\Models\Product::select('color')->distinct()->where('category',$categories->id)->get();
                                ?>
                                @foreach ($Color as $color)
                                <li><a href="{{url('/')}}/products/color/{{$categories->slung}}/{{$color->color}}">{{$color->color}}</a></li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="nav-item with-submenu">
                            <a href="#">
                                <ion-icon
                                    name="chevron-forward-outline"
                                ></ion-icon>
                                AC Ratings
                            </a>
                            <ul class="sub-menu">
                                <?php
                                  $ACs = App\Models\Product::select('a_c_ratings')->distinct()->where('category',$categories->id)->get();
                                ?>
                                @foreach ($ACs as $acs)
                                <li><a target="new" href="{{url('/')}}/products/ac-rating/{{$categories->slung}}/{{$acs->a_c_ratings}}">
                                    <?php
                                        $ACRatings = DB::table('a_c_ratings')->where('slung',$acs->a_c_ratings)->get();
                                    ?>
                                    @foreach ($ACRatings as $acRatings)
                                    {{$acRatings->title}}
                                    @endforeach
                                </a></li>
                                @endforeach
                            </ul>
                        </li>




                    </ul>
                    {{--  --}}
                    @endforeach
                </div>
            </div>

            <div class="left_side_bar_products_right">
                <h2>Product overview</h2>

                <p>
                    {!!html_entity_decode($product->content)!!}
                </p>


                {{-- <h3>Dimension</h3>

                <p>Length</p>

                <div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                    <div class="diti">
                        <h4>2250mm</h4>
                    </div>
                </div>

                <p>Width(MM)</p>

                <div>
                    <div class="rifi">
                        <h4>240mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>197mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>165mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>145mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>126mm</h4>
                    </div>
                    <div class="rifi">
                        <h4>101mm</h4>
                    </div>
                </div>

                <p>Thickness(MM)</p>

                <div>
                    <div class="diti">
                        <h4>8mm</h4>
                    </div>
                    <div class="diti">
                        <h4>10mm</h4>
                    </div>
                    <div class="diti">
                        <h4>12mm</h4>
                    </div>
                </div>

                <h3>More details</h3>

                <div class="more_diti">
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                    <div>
                        <p>SURFACE TEXTURE: Emboss in Register(EIR)</p>
                    </div>
                    <div>
                        <p>COLOR/FINISH FAMILY: Yellow</p>
                    </div>
                    <div>
                        <p>COLOR CODE: E1606</p>
                    </div>
                </div>

                <div class="dra_dagger">
                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/kitten.jpg')}}" alt="" />
                        </div>
                        <p>Kid and pet friendly</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/fade.jpg')}}" alt="" />
                        </div>
                        <p>Fade and stain resistant</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/green.jpg')}}" alt="" />
                        </div>
                        <p>Green</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/scratch.jpg')}}" alt="" />
                        </div>
                        <p>Scratch resistant</p>
                    </div>

                    <div>
                        <div>
                            <img
                                src="{{asset('version/assets/images/spillshiel.jpg')}}"
                                alt=""
                            />
                        </div>
                        <p>Spillshiel plus waterproof technology</p>
                    </div>

                    <div>
                        <div>
                            <img src="{{asset('version/assets/images/fire.jpg')}}" alt="" />
                        </div>
                        <p>Fire prevention</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</main>
@endforeach
@endsection
