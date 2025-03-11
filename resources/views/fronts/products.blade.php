@extends('front.master')

@section('content')
<main>
    <div class="product_version">
        <span class="product_verion_link">
            <a href="{{url('/')}}"
                >Home <ion-icon name="chevron-forward-outline"></ion-icon
            ></a>
            <a href="{{url('/')}}/products/{{$CategorySlung}}">
                {{$CategoryTitle}}
                <ion-icon name="chevron-forward-outline"></ion-icon
            </a>
            <a href="#">{{$PageTitle}}</a>
        </span>

        <h2 class="product_version_h2">{{$PageTitle}}</h2>

        <div class='filterComponent'>
            <input type="search" placeholder="Search floor" />

            <select>
                <option value="">Select color</option>
                <option value="Red">Red</option>
            </select>

            <select>
                <option value="">Select thickness</option>
                <option value="7mm">7mm</option>
            </select>

            <select>
                <option value="">Select AC rating</option>
                <option value="AC1">AC1</option>
            </select>

            <button>SEARCH</button>
        </div>

        <div class="commercial_laminate">
            @foreach ($Products as $products)
            <div class="">
                <div>
                    <img src="{{url('/')}}/uploads/products/{{$products->image_one}}" width="160"  height="50"  loading="lazy"  alt="{{$products->name}}" />
                </div>
               <h3 class="ac-text">{{$products->name}}</h3>
                <p class="ac-text">{{$products->sku}}</p>
                <a class="text-center" href="{{url('/')}}/product/{{$products->slung}}">Explore More</a>
            </div>
            @endforeach

            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g2.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">Commercial 8.3mm E0 AC3 Embossed Oak Waterproof</h3>
                <p class="ac-text">E8030</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g3.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">12.3mm HDF AC3 Embossed Cherry Waterproof Vinyl Laminate Laminated Flooring</h3>
                <p class="ac-text">E8303</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/pro.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">Oak laminate flooring</h3>
                <p class="ac-text">E9072</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g4.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">V Groove HDF AC4 Imported Paper Vinyl Engineered Wood Wooden Laminated Laminate Flooring</h3>
                <p class="ac-text">E9090</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g5.png')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">Oak laminate floor</h3>
                <p class="ac-text">E9072</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g6.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">HDF waterproof laminate flooring for bathrooms</h3>
                <p class="ac-text">E6072</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img  src="{{asset('version/assets/images/g7.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">HDF waterproof laminated floor</h3>
                <p class="ac-text">E9801</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            {{--  --}}
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g1.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">Commercial HDF Embossed Oak V-Grooved Waterproof Laminate Flooring</h3>
                <p class="ac-text">E1606</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g2.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">Commercial 8.3mm E0 AC3 Embossed Oak Waterproof</h3>
                <p class="ac-text">E8030</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/g3.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">12.3mm HDF AC3 Embossed Cherry Waterproof Vinyl Laminate Laminated Flooring</h3>
                <p class="ac-text">E8303</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
            <div class="">
                <div>
                    <img
                        src="{{asset('version/assets/images/pro.jpg')}}"
                        width="160"
                        height="50"
                        loading="lazy"
                        alt="grilli home"
                    />
                </div>
               <h3 class="ac-text">Oak laminate flooring</h3>
                <p class="ac-text">E9072</p>
                <a class="text-center" href="{{url('/')}}/product/slung">Explore More</a>
            </div>
        </div>


    </div>
</main>
@endsection
