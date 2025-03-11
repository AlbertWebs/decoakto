@extends('front.master')

@section('content')
{{-- --}}
<main>
    <article>


            <?php $SectionHome = DB::table("sections")
        ->where("page", "home")
        ->where("position", "3rd_banner")
        ->get(); ?>
            @foreach ($SectionHome as $sectionhome)
            <section class="section testi text-center has-bg-image"
                style="background-image: url('{{asset('uploads/sections/')}}/{{$sectionhome->image}}')"
                aria-label="testimonials">
                <div class="container">
                    <div class="" style="background-color: rgba(255,255,255,.6); padding: 20px; margin-top: 100px">
                        <p class="headline-2 testi-text">

                            {!!html_entity_decode($sectionhome->content)!!}
                        </p>
                    </div>
                </div>
                <div class="margin-center margin-top-50">
                    <center>
                        <p class="btn btn-secondary margin-center">
                            <span class="text text-1">{{$sectionhome->action_name}}</span>
                            <span class="text text-2" aria-hidden="true">{{$sectionhome->action_name}}</span>
                        </p>
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

                            <p class="contact-label">Give Us a Call</p>

                            <a href="tel:+254 796 110511" class="body-1 contact-number hover-underline">+254 796
                                110511</a>

                            <div class="separator"></div>

                            <p class="contact-label">Location</p>

                            <address class="body-4">Nairobi, Kenya</address>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section features text-center bg-white-whity" aria-label="features" style="padding: 0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127641.17044270245!2d36.76499579038322!3d-1.3030359783078311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1705604772534!5m2!1sen!2ske" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

                                <div class='card-content'>
                                    <h4>{{$partners->name}}</h4>
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


            <section class="section event bg-white-whity" aria-label="event">
                <div class="container">
                    <h2 class="headline-1 section-title text-black-blacky text-center">Frequently asked questions</h1>
                        <div class="faq-law">
                            <?php
                                $Faq = DB::table('faq')->limit('4')->get();
                            ?>
                            @foreach ($Faq as $faq)
                            <div class="text-black-blacky">
                                <h3 class="marg-left">{{$faq->title}}</h3>
                                <p>{!!html_entity_decode($faq->meta)!!}</p>
                                <a href="{{url('/')}}/frequently-asked-questions/{{$faq->slung}}">
                                    <span>{{date('d/m', strtotime($faq->created_at))}}</span>
                                    <span>{{date('Y', strtotime($faq->created_at))}}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                </div>
            </section>
    </article>
</main>
{{-- --}}
@endsection
