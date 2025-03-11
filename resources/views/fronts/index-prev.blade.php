@extends('front.master')

@section('content')
<main>
    <article>
      <!--
      - #HERO
    -->
      @foreach ($Slider as $slider)
      <section class="section hero" id="home" style="min-height: 100vh;     background: url('{{url('/')}}/uploads/slider/{{$slider->image}}') no-repeat;    background-size: cover;   background-position: center;">
        <div class="container">
          <div class="hero-content">
            <img src="{{asset('theme/assets/images/image%201.png')}}" alt="" />
            <h3 class="h1 hero-title">{{$slider->name}}</h3>
            <div class="gotoro">
              <h4 class="wrapper">
                <strong class="strong" data-letter-effect
                  >Made in Belgium</strong
                >
                <strong class="strong" data-letter-effect
                  >Nothing beats the feel of hardwood floors!</strong
                >
                <strong class="strong" data-letter-effect
                  >Making your houses more beautiful.</strong
                >
                <strong class="strong" data-letter-effect
                  >We provide all kinds of flooring services.</strong
                >
                <strong class="strong" data-letter-effect
                  >Quality floors that will remain a lifetime.</strong
                >
              </h4>
            </div>
            <a href="#intro">
              <button>
                {{$slider->action_name}}
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button>
            </a>
            <img src="{{asset('theme/assets/images/logo-removebg-preview%201.png')}}" alt="" />
          </div>

          <div class="hero-banner"></div>
        </div>
      </section>
      @endforeach

      <!--intro about-->
      <section class="section blog" id="intro">
        <h2>OUR PRODUCTS</h2>
        <div class="container">
          <ul class="blog-list has-scrollbar">
            <?php
                 $Categories = DB::table('categories')->get();
            ?>
            @foreach ($Categories as $cat)
            <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="#">
                      <img
                        src="{{url('/')}}/uploads/categories/{{$cat->image}}"
                        alt="{{$cat->title}}"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="#" class="btnty card-badge">{{$cat->title}}</a>
                  </figure>
                </div>
              </li>
            @endforeach


            <li class="card-rel">
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/Rectangle%209.png')}}"
                      alt="Laminate flooring"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="#" class="btnty card-badge">Asili Doors</a>
                </figure>
              </div>

              <img
                src="{{asset('theme/assets/images/made-in-kenya%202.png')}}"
                alt="Laminate flooring"
                loading="lazy"
                class="card-abs"
              />
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/2021-01-12%201.png')}}"
                      alt="Hybrid flooring"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="#" class="btnty card-badge">Accessories</a>
                </figure>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/HPUCP40167_Interior01-1-300x300.jpg')}}"
                      alt="Vinyl flooring"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="#" class="btnty card-badge">Vinyl flooring</a>
                </figure>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/ABWAUS_Interior01-2-300x300.jpg')}}"
                      alt="Bamboo flooring"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="#" class="btnty card-badge">Bamboo flooring</a>
                </figure>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!--Intro second-->
      <!--
        - Gallery
      -->
      <section class="section featured-car featured-cary" id="featured-car">
        <div class="container">
          <div class="quick_step">
            <?php
               $banner = DB::table('banners')->where('section','home_proffesional')->get();
            ?>
            @foreach($banner as $banner)
                <img class="image-curve"  src="{{url('/')}}/uploads/banners/{{$banner->image}}"  alt="architecture" />

                <div class="quick_step_amato">
                <h1>{{$banner->title}}</h1>
                    {!!html_entity_decode($banner->content)!!}
                <h3>
                    More information
                    <span
                    ><ion-icon name="arrow-forward-outline"></ion-icon
                    ></span>
                </h3>
                </div>
            @endforeach
          </div>
        </div>
      </section>

      <!--- #BLOG  -->

      <section class="section blog" id="blog">
        <div class="container">
          <h2 class="h2 section-title">Get in the Trend</h2>
          <h4>With our latest shades</h4>

          <ul class="blog-list has-scrollbar">
            <?php
                $Products = DB::table('products')->where('trending','1')->get();
            ?>
            @foreach ($Products as $product)
            <li>
                <div class="blog-card">
                  <figure class="card-banner">
                    <a href="{{url('/')}}/products/{{$product->slung}}">
                      <img
                        src="{{url('/')}}/uploads/products/{{$product->image_one}}"
                        alt="Opening of new offices of the company"
                        loading="lazy"
                        class="w-100"
                      />
                    </a>

                    <a href="{{url('/')}}/products/{{$product->slung}}" class="penz">
                      <img
                        src="{{asset('theme/assets/images/R%20(3)%201.png')}}"
                        alt="Opening of new offices of the company"
                        loading="lazy"
                        class=""
                    /></a>
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <a href="{{url('/')}}/products/{{$product->slung}}">{{$product->name}}</a>
                    </h3>

                    <div class="card-meta">
                      <div class="publish-date">
                        <time datetime="2022-01-14">{{$product->meta}}</time>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            @endforeach


            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/WBO0101_Topshot-300x300.jpg')}}"
                      alt="What cars are most vulnerable"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="single_product.html" class="penz">
                    <img
                      src="{{asset('theme/assets/images/R%20(3)%201.png')}}"
                      alt="Opening of new offices of the company"
                      loading="lazy"
                      class=""
                  /></a>
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Quick-Step Pulse Hybrid</a>
                  </h3>

                  <div class="card-meta">
                    <div class="publish-date">
                      <time datetime="2022-01-14">Pure Oak Blush</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/WBO6008_Topshot-300x300.jpg')}}"
                      alt="Statistics showed which average age"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="single_product.html" class="penz">
                    <img
                      src="{{asset('theme/assets/images/R%20(3)%201.png')}}"
                      alt="Opening of new offices of the company"
                      loading="lazy"
                      class=""
                  /></a>
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Quick-Step Classic</a>
                  </h3>

                  <div class="card-meta">
                    <div class="publish-date">
                      <time datetime="2022-01-14">Warm Brown Oak</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/INT4097_Topshot-300x300.jpg')}}"
                      alt="What´s required when making a floor?"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="single_product.html" class="penz">
                    <img
                      src="{{asset('theme/assets/images/R%20(3)%201.png')}}"
                      alt="Opening of new offices of the company"
                      loading="lazy"
                      class=""
                  /></a>
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Quick-Step Perspective Nature</a>
                  </h3>

                  <div class="card-meta">
                    <div class="publish-date">
                      <time datetime="2022-01-14">Painted Oak Black</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img
                      src="{{asset('theme/assets/images/PAL4118_Topshot-300x300.jpg')}}"
                      alt="New rules for handling our floors"
                      loading="lazy"
                      class="w-100"
                    />
                  </a>

                  <a href="single_product.html" class="penz">
                    <img
                      src="{{asset('theme/assets/images/R%20(3)%201.png')}}"
                      alt="Opening of new offices of the company"
                      loading="lazy"
                      class=""
                  /></a>
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Eco forest</a>
                  </h3>

                  <div class="card-meta">
                    <div class="publish-date">
                      <time datetime="2022-01-14">KENNA CORK PLANK</time>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!--
        - Gallery
      -->
      <section class="section featured-car" id="featured-car">
        <div class="container">
          <div class="title-wrapper">
            <h2 class="h2 section-title">Gallery</h2>
          </div>

          <div class="image-grid">
            <div class="image-grid-col-2 image-grid-row-2 image-curve">
              <div class="containerm">
                <div class="card">
                  <div class="front">
                    <img
                      class="image-curve"
                      src="{{asset('theme/assets/images/real/Quick-Step_laminate_floor_sample%20(1).jpg')}}"
                      alt="architecture"
                    />
                  </div>
                  <div class="back">
                    <h1>Resilient floors</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-grid-col-1 image-curve">
              <div class="containerm">
                <div class="card">
                  <div class="front">
                    <img
                      class="image-curve"
                      src="{{asset('theme/assets/images/HPUCP40167_Interior01-1-300x300.jpg')}}"
                      alt="architecture"
                    />
                  </div>
                  <div class="back">
                    <h1>Attached pad</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-grid-col-1 image-curve">
              <div class="containerm">
                <div class="card">
                  <div class="front">
                    <img
                      class="image-curve"
                      src="{{asset('theme/assets/images/category-fixtures-vanities-tops.jpg')}}"
                      alt="architecture"
                    />
                  </div>
                  <div class="back">
                    <h1>Stone look</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-grid-col-1 image-curve">
              <div class="containerm">
                <div class="card">
                  <div class="front">
                    <img
                      class="image-curve"
                      src="{{asset('theme/assets/images/top-nav-v2-02-2019-vinyl-waterproof.jpg')}}"
                      alt="architecture"
                    />
                  </div>
                  <div class="back">
                    <h1>Water resistant</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-grid-col-1 image-curve">
              <div class="containerm">
                <div class="card">
                  <div class="front">
                    <img
                      class="image-curve"
                      src="{{asset('theme/assets/images/HPUCP40167_Interior01-1-300x300.jpg')}}"
                      alt="architecture"
                    />
                  </div>
                  <div class="back">
                    <h1>Pet friendly</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="gallery.html" class="view_all_product"
            ><button>
              Visit gallery
              <ion-icon name="arrow-forward-outline"></ion-icon></button
          ></a>
        </div>
      </section>
    </article>

    <section class="section blog" id="blog">
      <div class="container">
        <div class="our-partner">
          <h3 class="partner-title">
            We Work With Our Partners To Provide Project To Perfection,
          </h3>

          <h1>Our Partners</h1>

          <div class="row">
            <div class="column">
                <?php
                   $Partners = DB::table('partners')->get();
                ?>
                @foreach ($Partners as $partners)
                <div class="zoom">
                    <img
                      src="{{url('/')}}/uploads/partners/{{$partners->image}}" style="width: 100%"
                    />
                  </div>
                @endforeach


            </div>

            <a href="partner.html">
              <button class="col-button">
                <ion-icon name="expand-outline"></ion-icon> All partners
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
