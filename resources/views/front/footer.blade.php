<footer id="pq-footer">
    <div class="pq-footer-style-1" style="background-color:rgba(0, 0, 0,0.3);">
        <div class="container">
            <div class="pq-subscribe align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12" style="margin:0 auto">
                            <div class="pq-subscribe-bg">
                                <div class="row align-items-center" style="margin:0 auto">
                                    <div class="col-lg-6 col-md-6" style="margin:0 auto">
                                        <div class="pq-footer-logo">
                                            <img src="{{url('/')}}/uploads/logo/decomagna-Logos-Trans-15.png" class="pq-footer-logo"
                                                alt="Decomagna-footer-logo">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6 align-self-center">
                                        <div class="pq-subscribe-from">
                                            <form action="/subscribe" method="POST">
                                                @csrf

                                                <div class="subscribe-form">
                                                    <input type="email" name="email" placeholder="Your email address"
                                                        class="form-control" required="">
                                                    <input class="submit" type="submit" value="Sign up">
                                                    <i class="ion-ios-paperplane"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Professional & Reliable Flooring Installation Services</h4>
                            <p>
                                We take our client satisfaction very seriously...  that’s why we have perfected the art of flooring installations with our team of seasoned technicians across Kenya.
                            </p>
                            <ul>
                                <li>
                                    <a href="tel:+254 79 611 0511"><i class="fas fa-phone-alt"></i>
                                    <span> &nbsp; &nbsp; +254 79 611 0511</span>
                                    </a>
                                </li>
                                <li>
                                <a href="mailto:info@decomagna.com"><i class="fas fa-envelope"></i>
                                <span> &nbsp; &nbsp; info@decomagna.com </span>
                                </a>
                                </li>
                            </ul>
                        </div>
                        </div>

                        <div class="col-lg-2  col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="menu-product-menu-container">
                                <ul id="menu-product-menu" class="menu">

                                    <li class="menu-item">
                                    <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="menu-item">
                                    <a href="{{url('/')}}/#about">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                    <a href="{{url('/')}}/portfolio">Our Portfolio</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-2  col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Our Solutions</h4>
                            <div class="menu-product-menu-container">
                                <ul id="menu-product-menu" class="menu">
                                <?php
                                    $Category = DB::table('categories')->get();
                                ?>
                                @foreach($Category as $category)
                                    <li class="menu-item">
                                    <a href="{{url('/')}}/products/{{$category->slung}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-4  col-md-6">
                        <div class="widget widget-port-1">
                            <h4 class="footer-title">Our showroom</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="pq-contact">
                                    <li>
                                        <i class="fas fa-map-marker"></i>
                                        <span>
                                        Tumbili rd. Karen Hardy near the Giraffe Centre off Tumbili rd Navy Blue gate written quick-step , Nairobi, Kenya
                                        </span>
                                    </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pq-copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                    <span class="pq-copyright">
                        Copyright &copy; {{date('Y')}} Quick-Step Flooring Kenya - Decomagna Limited
                        . All Rights Reserved | Powered by
                        <a href="https://designekta.com/" target="_blank" class="link">Designekta studios</a> | <a href="#" target="_blank" class="link">Sitemaps</a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
