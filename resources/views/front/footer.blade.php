<style>
    /* Footer Redesign - Elegant & Compact */
    #pq-footer {
        background: linear-gradient(135deg, #1c186c 0%, #2a2478 100%);
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    #pq-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.2) 0%, transparent 100%);
    }
    
    .pq-footer-style-1 {
        background: transparent !important;
        padding: 40px 0 0;
    }
    
    /* Footer Logo Section - Compact & Elegant */
    .pq-subscribe {
        padding: 20px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        margin-bottom: 30px;
    }
    
    .pq-subscribe-bg {
        background: rgba(255, 255, 255, 0.02);
        border-radius: 6px;
        padding: 15px 20px;
        backdrop-filter: blur(3px);
        border: 1px solid rgba(255, 255, 255, 0.06);
        max-width: 400px;
        margin: 0 auto;
    }
    
    .pq-footer-logo img {
        max-height: 40px;
        width: auto;
        filter: brightness(0) invert(1);
        transition: transform 0.3s ease;
        opacity: 0.9;
    }
    
    .pq-footer-logo:hover img {
        transform: scale(1.05);
        opacity: 1;
    }
    
    /* Footer Top Section - Compact & Elegant */
    .pq-footer-top {
        padding-bottom: 25px;
    }
    
    .pq-footer-top .widget {
        margin-bottom: 20px;
    }
    
    .footer-title {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        position: relative;
        letter-spacing: 0.2px;
        text-transform: uppercase;
    }
    
    .footer-title::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 30px;
        height: 1px;
        background: rgba(255, 255, 255, 0.6);
    }
    
    .pq-footer-top .widget p {
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.7;
        font-size: 14px;
        margin-bottom: 12px;
    }
    
    /* Contact Links - Compact & Elegant */
    .pq-footer-top .widget ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .pq-footer-top .widget ul li {
        margin-bottom: 6px;
    }
    
    .pq-footer-top .widget ul li a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        font-size: 14px;
    }
    
    .pq-footer-top .widget ul li a i {
        color: #fff;
        font-size: 14px;
        width: 18px;
        margin-right: 8px;
        transition: transform 0.3s ease;
        opacity: 0.9;
    }
    
    .pq-footer-top .widget ul li a:hover {
        color: #fff;
        transform: translateX(2px);
    }
    
    .pq-footer-top .widget ul li a:hover i {
        transform: scale(1.1);
        opacity: 1;
    }
    
    /* Footer Menu Links - Compact & Elegant */
    .pq-footer-top .menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .pq-footer-top .menu .menu-item {
        margin-bottom: 5px;
    }
    
    .pq-footer-top .menu .menu-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
        display: inline-block;
        padding: 2px 0;
        position: relative;
    }
    
    .pq-footer-top .menu .menu-item a::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background: rgba(255, 255, 255, 0.6);
        transition: width 0.3s ease;
    }
    
    .pq-footer-top .menu .menu-item a:hover {
        color: #fff;
        padding-left: 5px;
    }
    
    .pq-footer-top .menu .menu-item a:hover::before {
        width: 20px;
    }
    
    /* Contact Info - Compact & Elegant */
    .pq-contact {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .pq-contact li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
    }
    
    .pq-contact li i {
        color: #fff;
        font-size: 15px;
        margin-right: 10px;
        margin-top: 2px;
        flex-shrink: 0;
        opacity: 0.9;
    }
    
    .pq-contact li span {
        flex: 1;
        font-size: 14px;
    }
    
    /* Copyright Footer - Compact & Elegant */
    .pq-copyright-footer {
        background: rgba(0, 0, 0, 0.12);
        padding: 15px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        margin-top: 25px;
    }
    
    .pq-copyright {
        color: rgba(255, 255, 255, 0.75);
        font-size: 13px;
        text-align: center;
        display: block;
        line-height: 1.6;
    }
    
    .pq-copyright .link {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .pq-copyright .link:hover {
        color: #fff;
        text-decoration: underline;
    }
    
    /* Social Media Icons in Footer - Compact & Elegant */
    .pq-footer-social {
        margin-top: 15px;
    }
    
    .pq-footer-social ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .pq-footer-social li {
        margin: 0;
        padding: 0;
    }
    
    .pq-footer-social li a {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        color: #fff;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        padding: 0 !important;
        margin: 0 !important;
        position: relative;
        overflow: hidden;
    }
    
    .pq-footer-social li a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 50%;
        transition: all 0.4s ease;
    }
    
    .pq-footer-social li a i {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        line-height: 1 !important;
        font-size: 15px;
        position: relative;
        z-index: 2;
        transition: transform 0.4s ease;
    }
    
    /* Facebook - Blue */
    .pq-footer-social li:nth-child(1) a {
        background: rgba(24, 119, 242, 0.15);
        border: 2px solid rgba(24, 119, 242, 0.3);
    }
    
    .pq-footer-social li:nth-child(1) a::before {
        background: #1877f2;
        opacity: 0;
    }
    
    .pq-footer-social li:nth-child(1) a:hover {
        border-color: #1877f2;
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 5px 15px rgba(24, 119, 242, 0.4);
    }
    
    .pq-footer-social li:nth-child(1) a:hover::before {
        opacity: 1;
    }
    
    .pq-footer-social li:nth-child(1) a:hover i {
        transform: scale(1.15);
    }
    
    /* Instagram - Gradient */
    .pq-footer-social li:nth-child(2) a {
        background: rgba(225, 48, 108, 0.15);
        border: 2px solid rgba(225, 48, 108, 0.3);
    }
    
    .pq-footer-social li:nth-child(2) a::before {
        background: linear-gradient(135deg, #e1306c, #833ab4, #fd1d1d, #fcb045);
        opacity: 0;
    }
    
    .pq-footer-social li:nth-child(2) a:hover {
        border-color: #e1306c;
        transform: translateY(-3px) scale(1.1) rotate(5deg);
        box-shadow: 0 5px 15px rgba(225, 48, 108, 0.4);
    }
    
    .pq-footer-social li:nth-child(2) a:hover::before {
        opacity: 1;
    }
    
    .pq-footer-social li:nth-child(2) a:hover i {
        transform: scale(1.15);
    }
    
    /* Twitter - Blue */
    .pq-footer-social li:nth-child(3) a {
        background: rgba(29, 161, 242, 0.15);
        border: 2px solid rgba(29, 161, 242, 0.3);
    }
    
    .pq-footer-social li:nth-child(3) a::before {
        background: #1da1f2;
        opacity: 0;
    }
    
    .pq-footer-social li:nth-child(3) a:hover {
        border-color: #1da1f2;
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 5px 15px rgba(29, 161, 242, 0.4);
    }
    
    .pq-footer-social li:nth-child(3) a:hover::before {
        opacity: 1;
    }
    
    .pq-footer-social li:nth-child(3) a:hover i {
        transform: scale(1.15);
    }
    
    /* Google Maps - Red */
    .pq-footer-social li:nth-child(4) a {
        background: rgba(220, 53, 69, 0.15);
        border: 2px solid rgba(220, 53, 69, 0.3);
    }
    
    .pq-footer-social li:nth-child(4) a::before {
        background: #dc3545;
        opacity: 0;
    }
    
    .pq-footer-social li:nth-child(4) a:hover {
        border-color: #dc3545;
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
    }
    
    .pq-footer-social li:nth-child(4) a:hover::before {
        opacity: 1;
    }
    
    .pq-footer-social li:nth-child(4) a:hover i {
        transform: scale(1.15);
    }
    
    /* Mobile Responsive */
    @media (max-width: 991px) {
        .pq-footer-style-1 {
            padding: 25px 0 0;
        }
        
        .pq-subscribe {
            padding: 18px 0;
            margin-bottom: 25px;
        }
        
        .pq-subscribe-bg {
            padding: 15px;
            max-width: 100%;
        }
        
        .pq-footer-top .widget {
            margin-bottom: 20px;
        }
        
        .footer-title {
            margin-bottom: 10px;
        }
    }
    
    @media (max-width: 767px) {
        .pq-footer-style-1 {
            padding: 20px 0 0;
        }
        
        .pq-subscribe {
            padding: 15px 0;
            margin-bottom: 20px;
        }
        
        .pq-subscribe-bg {
            padding: 12px 15px;
        }
        
        .pq-footer-logo img {
            max-height: 35px;
        }
        
        .pq-footer-top {
            padding-bottom: 20px;
        }
        
        .footer-title {
            margin-bottom: 8px;
        }
        
        .pq-footer-top .widget p,
        .pq-footer-top .widget ul li a,
        .pq-contact li span {
            font-size: 13px;
        }
        
        .pq-copyright {
            font-size: 11px;
            line-height: 1.5;
        }
        
        .pq-footer-social li a {
            width: 34px;
            height: 34px;
        }
        
        .pq-footer-social li a i {
            font-size: 13px;
        }
        
        .footer-title {
            font-size: 15px;
        }
        
        .pq-copyright-footer {
            padding: 12px 0;
            margin-top: 20px;
        }
    }
</style>

<footer id="pq-footer">
    <div class="pq-footer-style-1">
        <div class="container">
           
            <div class="pq-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Professional & Reliable Flooring Installation Services</h4>
                                <p>
                                    We take our client satisfaction very seriously... that's why we have perfected the art of flooring installations with our team of seasoned technicians across Kenya.
                                </p>
                                <ul>
                                    <li>
                                        <a href="tel:+254796110511">
                                            <i class="fas fa-phone-alt"></i>
                                            <span>+254 79 611 0511</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@decomagna.com">
                                            <i class="fas fa-envelope"></i>
                                            <span>info@decomagna.com</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pq-footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/decomagnaDev/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/decomagna_kenya/" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/decomagna_kenya" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://goo.gl/maps/njDLRodCvupea21D9" aria-label="Google Maps"><i class="fa fa-map-marker"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
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

                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h4 class="footer-title">Our Solutions</h4>
                                <div class="menu-product-menu-container">
                                    <ul id="menu-product-menu" class="menu">
                                        <?php
                                            $Category = DB::table('categories')->limit(5)->get();
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

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-port-1">
                                <h4 class="footer-title">Our Showroom</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="pq-contact">
                                            <li>
                                                <i class="fas fa-map-marker"></i>
                                                <span>
                                                    Tumbili rd. Karen Hardy near the Giraffe Centre off Tumbili rd Navy Blue gate written quick-step, Nairobi, Kenya
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
                            Copyright &copy; {{date('Y')}} Quick-Step Flooring Kenya - Decomagna Limited. All Rights Reserved | Powered by
                            <a href="https://designekta.com/" target="_blank" class="link">Designekta studios</a> | 
                            <a href="{{url('/')}}/sitemap.html" target="_blank" class="link">Sitemaps</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
