@extends('front.master')

@section('content')
{{-- --}}
<main>
    <article>
        <!--
      - #HERO
    -->

        <div class="container_slider">
            <div class="slideshow">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        @foreach ($Slider as $slider)
                        <div class="slide">
                            <img src="{{url('/')}}/uploads/slider/{{$slider->image}}" />
                            <div>
                                <div>
                                    <img src="{{asset('version/assets/images/Artboard-82.png')}}" width="160"
                                        height="50" loading="lazy" alt="grilli home" />
                                </div>
                                <h3>ELEVATE YOUR SPACE, PREMIUM FLOORS</h3>
                                <h5>lorem ipsum</h5>
                                <a href="#">discover more</a>
                            </div>
                        </div>
                        @endforeach
                        <!-- Add more slide elements with appropriate images -->
                    </div>

                    <div class="bottom-dome"></div>

                    <div class="preview prev_force">
                        <!-- Preview images will be generated dynamically through JavaScript -->
                    </div>
                </div>





                <a href="#intro" class="scroll-down control">
                    <img src="{{asset('version/assets/images/scroll-down.svg')}}" width="40" height="66" loading="lazy"
                        alt="mouse scroll" />
                </a>
            </div>
        </div>

        <!--
      - #SERVICE
    -->
        <?php
          $About = DB::table('abouts')->get();
      ?>
        {{-- <section class="section service service-white text-center" aria-label="service"
            style="background-color:#D9D9D9"> --}}

            <section id="intro" class="section service service-white text-center" aria-label="service">
                <div class="container">
                    @foreach ($About as $about)
                    <h2 class="headline-intro">{{$about->title}}</h2>
                    <p>
                        <font color="#676767">
                            <span style=" line-height: 1.6;">
                                {!!html_entity_decode($about->content)!!}
                            </span>
                        </font>
                    </p>
                    @endforeach

                    <div class="royaly owl-carousel margin-top-100">
                        <?php $Categories = DB::table("categories")->get(); ?>
                        @foreach ($Categories as $cat)
                        <div class="royalty_child">
                            <img src="{{url('/')}}/uploads/categories/{{$cat->image}}" alt="{{$cat->title}}"
                                class="w-100" />

                            <a class="category-title" href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->title}}</a>

                            <div>
                                <a href="{{url('/')}}/products/{{$cat->slung}}">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </a>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <img src="{{asset('version/assets/images/OIP__1_-removebg-preview.png')}}" width="246" height="412"
                        loading="lazy" alt="shape" class="shape shape-1 move-anim" />
                </div>

                <a href="product.html" class="btn btn-primary centy">
                    <span class="text text-1">View all products</span>

                    <span class="text text-2" aria-hidden="true">View all products</span>
                </a>
            </section>

            <!--
      - #ABOUT
    -->
            <?php $SectionHome = DB::table("sections")
          ->where("page", "home")
          ->where("position", "1st_banner")
          ->get(); ?>
            @foreach ($SectionHome as $sectionhome)
            <section class="section about" aria-labelledby="about-label" id="about">
                <div class="container">
                    <div class="about-content">
                        <h3 class="product-intro-title section-title text-center">
                            {{$sectionhome->name}}
                        </h3>

                        <p class="section-text">
                            {!!html_entity_decode($sectionhome->content)!!}
                        </p>

                        <a href="{{$sectionhome->action}}" class="btn btn-primary">
                            <span class="text text-1">{{$sectionhome->action_name}}</span>

                            <span class="text text-2" aria-hidden="true">{{$sectionhome->action_name}}</span>
                        </a>
                    </div>

                    <figure class="about-banner">
                        <img src="{{url('/')}}/uploads/sections/{{$sectionhome->image}}" width="670" height="570"
                            loading="lazy" alt=" {{$sectionhome->name}}" class="w-100s" data-parallax-item
                            data-parallax-speed="1" />

                        <div class="youtube-div">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/rw34dko8ty8">

                            </iframe>
                        </div>
                    </figure>
                </div>


            </section>
            @endforeach


            <!--
      - #SPECIAL DISH
    -->

            <?php $SectionHome = DB::table("sections")
        ->where("page", "home")
        ->where("position", "2nd_banner")
        ->get(); ?>
            @foreach ($SectionHome as $sectionhome)

            <section class="special-dish text-center" aria-labelledby="dish-label">
                <div class="special-dish-banner">
                    <img src="{{url('/')}}/uploads/sections/{{$sectionhome->image}}" width="670" height="570"
                        loading="lazy" alt="{{$sectionhome->name}}" class="img-covers" />
                </div>

                <div class="special-dish-content bg-black-10 text-center">
                    <div class="container">
                        <img src="{{asset('version/assets/images/badge-1.png')}}" width="28" height="41" loading="lazy"
                            alt="badge" class="abs-img" />

                        <h3 class="product-intro-title section-title text-center margin-top-100">{{$sectionhome->name}}
                        </h3>


                        <p class="section-text text-center info-texts">
                            {!!html_entity_decode($sectionhome->content)!!}
                        </p>

                        <a href="#" class="btn btn-primary">
                            <span class="text text-1">{{$sectionhome->action_name}}</span>

                            <span class="text text-2" aria-hidden="true">{{$sectionhome->action_name}}</span>
                        </a>
                    </div>
                </div>
            </section>

            @endforeach

            <!--
      - #MENU
    -->

            <section class="section menu" aria-label="menu-label" id="menu">
                <h2 class="headline-1 section-title text-center">Our gallery</h2>
                <div class="image-grid">
                    <?php
            $Portfolio = DB::table('portfolios')->where('home','1')->where('big','1')->limit('1')->get();
          ?>
                    @foreach ($Portfolio as $Portfolio)
                    <div class="image-grid-col-2 image-grid-row-2 image-curve">
                        <div class="containerm">
                            <div class="card">
                                <div class="front">
                                    <img class="image-curve"
                                        src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}"
                                        alt="{{$Portfolio->name}}" />
                                </div>
                                <div class="back"
                                    style="padding: 20px 10px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                    <h1 style="margin-top: 10px;">{{$Portfolio->name}}</h1>
                                    <p style="max-width:500px; max-height: 80%; overflow:scroll; margin-top: 10px;">
                                        {!!html_entity_decode($Portfolio->meta)!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <?php
            $Portfolio = DB::table('portfolios')->where('home','1')->where('big','0')->limit('4')->get();
            ?>
                    @foreach ($Portfolio as $Portfolio)
                    <div class="image-grid-col-1 image-curve">
                        <div class="containerm">
                            <div class="card">
                                <div class="front">
                                    <img class="image-curve"
                                        src="{{url('/')}}/uploads/portfolios/{{$Portfolio->image_one}}"
                                        alt="{{$Portfolio->name}}" />
                                </div>
                                <div class="back" style="max-height: 100%; overflow:scroll;">
                                    <h1>{{$Portfolio->name}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="#" class="btn btn-primary">
                    <span class="text text-1">Visit gallery</span>

                    <span class="text text-2" aria-hidden="true">Visit gallery</span>
                </a>
            </section>

            <!--
      - #TESTIMONIALS
    -->

            <?php $SectionHome = DB::table("sections")
        ->where("page", "home")
        ->where("position", "3rd_banner")
        ->get(); ?>
            @foreach ($SectionHome as $sectionhome)
            <section class="section testi text-center has-bg-image"
                style="background-image: url('{{asset('uploads/sections/')}}/{{$sectionhome->image}}')"
                aria-label="testimonials">
                <div class="container">
                    {{-- <div class="quote trans360">”</div> --}}
                    <p class="headline-2 testi-text">

                        {!!html_entity_decode($sectionhome->content)!!}
                    </p>
                    {{-- <div class="quote">”</div> --}}
                </div>
                <div class="margin-center margin-top-50">
                    <center>
                        <a href="{{$sectionhome->action}}" class="btn btn-secondary margin-center">
                            <span class="text text-1">{{$sectionhome->action_name}}</span>
                            <span class="text text-2" aria-hidden="true">{{$sectionhome->action_name}}</span>
                        </a>
                    </center>
                </div>
            </section>
            @endforeach

            <!--
      - #RESERVATION
    -->

            <section class="reservation">
                <div class="container pad-container-bottom">
                    <div class="form reservation-form bg-black-10">
                        <form action="" class="form-left">
                            <div class="input-wrapper">
                                <input type="text" name="name" placeholder="Your Name" autocomplete="off"
                                    class="input-field" />

                                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off"
                                    class="input-field" />
                            </div>

                            <input type="email" name="email" placeholder="Place your email" autocomplete="off"
                                class="input-field" />

                            <textarea name="message" placeholder="Message" autocomplete="off"
                                class="input-field"></textarea>

                            <button type="submit" class="btn btn-secondary">
                                <span class="text text-1">Contact us</span>

                                <span class="text text-2" aria-hidden="true">Contact us</span>
                            </button>
                        </form>

                        <div class="form-right text-center"
                            style="background-image: url('{{asset('version/assets/images/pexels-photo-1250283.jpeg')}}');">
                            <h2 class="headline-1 text-center">Contact Us</h2>

                            <p class="contact-label">Make a call</p>

                            <a href="tel:+254 796 110511" class="body-1 contact-number hover-underline">+254 796
                                110511</a>

                            <div class="separator"></div>

                            <p class="contact-label">Location</p>

                            <address class="body-4">Nairobi, Kenya</address>
                        </div>
                    </div>
                </div>
            </section>

            <!--
      - #FEATURES
    -->

            <section class="section features text-center bg-white-whity" aria-label="features">
                <div class="container">
                    <h2 class="headline-1 section-title text-black-blacky">Decomagna Satisfied Clients</h2>
                    <ul class="grid-list gridme owl-carousel">
                        <?php $Partners = DB::table("partners")->get(); ?>
                        @foreach ($Partners as $partners)
                        <li class="feature-item">
                            <div class="feature-card">
                                <div class="card-icon">
                                    <img src="{{url('/')}}/uploads/partners/{{$partners->image}}" loading="lazy"
                                        alt="{{$partners->name}}" />
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <a href="#" class="btn btn-primary centy">
                    <span class="text text-1">View all clients</span>

                    <span class="text text-2" aria-hidden="true">View all clients</span>
                </a>
            </section>

            <!--
      - #EVENT
    -->

            <?php $Blog = DB::table("blogs")->get(); ?>


            <section class="section event blogd" aria-label="event">
                <div class="container">
                    <h2 class="section-title headline-1 text-center">Quick-Step Flooring Kenya - Decomagna Limited Blogs
                    </h2>

                    <ul class="grid-list gridblog owl-carousel">
                        @foreach ($Blog as $blog)
                        <li>
                            <div class="event-card has-before hover:shine">
                                <div class="card-banner img-holder" style="--width: 350; --height: 450">
                                    <a href="{{url('/')}}/blogs/{{$blog->slung}}" class="nzula">
                                        <img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" width="350"
                                            height="450" loading="lazy" alt="{{$blog->title}}" class="img-cover" />
                                    </a>

                                    <time class="publish-date label-2" datetime="2022-09-15">
                                        {{ date('d/m/Y', strtotime($blog->created_at)) }}
                                    </time>
                                </div>

                                <div class="card-content">
                                    <p class="card-subtitle label-2 text-center">
                                        Decomagna
                                    </p>

                                    <h3 class="card-title title-2 text-center">
                                        {{$blog->title}}
                                    </h3>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>

                    <a href="{{url('/')}}/blogs" class="btn btn-primary">
                        <span class="text text-1">View Our Blog</span>

                        <span class="text text-2" aria-hidden="true">View Our Blog</span>
                    </a>
                </div>
            </section>

            <section class="section event bg-white-whity" aria-label="event">
                <div class="container">
                    <h2 class="headline-1 section-title text-black-blacky text-center">Frequently asked questions</h1>
                        <div class="faq-law">
                            <div class="text-black-blacky">
                                <h3 class="marg-left">Can you buy high quality but cheap waterproof laminate flooring
                                    here?</h3>
                                <p>If you are looking for high-quality but cheap waterproof laminate flooring​, you have
                                    come to the right place. We are a leading supplier of cheap waterproof laminate
                                    flooring, and we are committed to ...</p>
                                <a href="#">
                                    <span>06/08</span>
                                    <span>2023</span>
                                </a>
                            </div>
                            <div class="text-black-blacky">
                                <h3>How can AC rating laminate floorings be chosen and purchased effectively?</h3>
                                <p>If you are looking for high-quality but cheap waterproof laminate flooring​, you have
                                    come to the right place. We are a leading supplier of cheap waterproof laminate
                                    flooring, and we are committed to ...</p>
                                <a href="#">
                                    <span>05/11</span>
                                    <span>2023</span>
                                </a>
                            </div>
                            <div class="text-black-blacky">
                                <h3>Is high gloss laminate flooring waterproof?</h3>
                                <p>With the increasing trend of modern decoration, people have higher and higher
                                    requirements for indoor floor materials. One popular indoor flooring material is a
                                    high gloss waterproof flooring​. While ...</p>
                                <a href="#">
                                    <span>04/13</span>
                                    <span>2023</span>
                                </a>
                            </div>
                            <div class="text-black-blacky">
                                <h3>Is High Gloss Laminate Flooring Durable?</h3>
                                <p>When it comes to enhancing your home's interior design, high gloss laminate flooring​
                                    is a great option. High gloss laminate flooring is a type of floor covering that
                                    offers elegance and beauty with i...</p>
                                <a href="#">
                                    <span>03/23</span>
                                    <span>2023</span>
                                </a>
                            </div>
                        </div>
                </div>
            </section>
    </article>
</main>
{{-- --}}
@endsection
