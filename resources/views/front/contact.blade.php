@extends('front.master')


@section('content')
 <!-- Breadcrumb -->
 <div class="pq-breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pq-breadcrumb-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="pq-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="fas fa-home me-2"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb -->

<!-- Contact Us -->
<section class="contact-us pb-xl-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="pq-section-title pq-style-1 pq-mb-30">
                    <span class="pq-section-sub-title">our contact</span>
                    <h5 class="pq-section-main-title">Get in touch with us</h5>
                    <p class="pq-section-description">
                        Decomagna Ltd, the official distributor of Quick-Step flooring in Kenya. We specializing in laminate flooring, engineered wood, and click vinyl, made in Belgum. In addition, we proudly present Elora bespoke wood textile luxury cabinets, adding a touch of elegance to your space.
                    </p>
                </div>
                <div class="pq-icon-box pq-style-3">
                    <div class="pq-icon">
                        <i class="ion ion-ios-home"></i>
                    </div>
                    <div class="pq-icon-box-content">
                        <h6>Visit A Office</h6>
                        <p class="mb-0">
                            Tumbili rd. Karen Hardy near the Giraffe Centre off Tumbili rd Navy Blue gate written quick-step , Nairobi, Kenya
                        </p>
                    </div>
                </div>
                <div class="divider pq-my-15"></div>
                <div class="pq-icon-box pq-style-3">
                    <div class="pq-icon">
                        <i class="ion ion-ios-telephone"></i>
                    </div>
                    <div class="pq-icon-box-content">
                        <h6>Contact-Us</h6>
                        <p class="mb-0"> (+254) 79-611-0511<br>+ (+254) 79-611-0511</p>
                    </div>
                </div>
                <div class="divider pq-my-15"></div>
                <div class="pq-icon-box pq-style-3">
                    <div class="pq-icon">
                        <i class="ion ion-ios-email"></i>
                    </div>
                    <div class="pq-icon-box-content">
                        <h6>Email-Us</h6>
                        <p class="mb-0">sales@decomagna.com<br>info@decomagna.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 p-xl-0">
                <div class="pq-map pq-me-330">
                    <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.645113886492!2d36.7433605!3d-1.3798952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f05afa2b62b47%3A0xe62322a0792f128b!2sQuick-Step%20flooring%20Kenya%20-%20Decomagna%20ltd!5e0!3m2!1sen!2ske!4v1709728206020!5m2!1sen!2ske" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us -->

<!-- Contact Us Form -->
<section class="contact-form pt-0 pb-xl-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-xl-0">
                <div class="pq-contact-img">
                    <img src="{{asset('html/images/portfolio/1.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 ps-xl-5">
                <div class="pq-section-title pq-style-1 pq-mb-30">
                    <h5 class="pq-section-main-title">How Can We Help You ?</h5>
                    <p class="pq-section-description">Please feel free to get in touch using the form below. We’d love to hear for you.</p>
                </div>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif

                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form action="{{route('contact-form')}}" class="pq-contact-form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="phone_number" placeholder="Phone Number">
                        </div>

                        <div class="col-md-12">
                            <textarea name="message" cols="40" rows="10" placeholder="Write Your Message"></textarea>
                        </div>
                        {{--  --}}
                        <?php
                        $ops = array('-', '+');
                        $answer = -1;

                        $num1 = rand(0, 50);
                        $num2 = rand(0, 15);

                        $answer = $num1 + $num2;

                    ?>
                    <hr>
                     <input type="hidden" name="correct_answer" id="correct_answer" value="{{$answer}}">
                     <input required class="form-control" value="{{$answer}}" type="hidden" id="verify_contact" name="verify_contact">
                         <div class="row">


                             <div class="col-md-12">
                                 <label>Are you human? {{$num1}} + {{$num2}} =</label>
                                 <div class="form-grp">

                                     <input required class="form-control" value="" type="text" id="verify_contact" name="verify_contact_input">
                                 </div>
                             </div>
                         </div>
                     <hr>
                        {{--  --}}
                        <div class="col-md-12">
                            <button type="submit" class="pq-button" href="#">
                                <div class="pq-button-block">
                                    <span class="pq-button-text me-0">SEND NOW</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Form -->
@endsection
