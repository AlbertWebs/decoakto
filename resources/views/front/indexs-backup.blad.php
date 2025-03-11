 <!-- Banner -->
 <div class="banner py-0">
    <!-- START home 6 REVOLUTION SLIDER 6.5.31 -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_14_1_wrapper" data-alias="home-4-1" data-source="gallery"
          style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_14_1" data-version="6.5.31">
            <rs-slides>
                @foreach ($Slider as $slider)
                    <rs-slide style="position: absolute;" data-key="rs-4{{$slider->id}}" data-title="Slide"
                        data-thumb="{{asset('html/rev/assets/Banner-1-2-50x100.jpg')}}" data-anim="adpr:false;ms:300;" data-in="o:0;"
                        data-out="a:false;">
                        <img src="{{asset('html/rev/assets/dummy.png')}}" alt="" title="Banner-1" width="1920" height="810"
                        class="rev-slidebg tp-rs-img rs-lazyload" data-la zyload="{{url('/')}}/uploads/slider/{{$slider->image}}"
                        data-no-retina style="filter: brightness(50%) !important;">
                        <!--
                        -->
                        <rs-layer id="slider-14-slide-46-layer-0" class="rs-subtitle-font" data-type="text" data-color="#e6af5d"
                        data-rsp_ch="on" data-xy="x:l,l,c,c;xo:70px,70px,0,0;y:m,m,m,t;yo:-94px,-50px,-70px,170px;"
                        data-text="w:normal;s:16,14,14,12;l:24,24,22,20;ls:1.6px;fw:600;"
                        data-padding="t:0,5,5,5;r:0,20,20,20;b:0,5,5,5;l:0,20,20,20;" data-frame_0="y:50,39,29,17;"
                        data-frame_1="st:300;sp:1000;sR:300;"
                        data-frame_999="y:50,39,29,17;o:0;st:8000;sp:1000;sR:6700;"
                        style="z-index:11;font-family:'Plus Jakarta Sans';text-transform:uppercase;">We are Decomagna
                        </rs-layer>
                        <!--
                        -->
                        <rs-layer id="slider-14-slide-46-layer-1" class="rs-title-font" data-type="text" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m,m,m,t;yo:6px,32px,10px,195px;"
                        data-text="w:normal;s:62,48,42,32;l:70,56,50,40;ls:0,0,0,1px;fw:600;a:left,left,center,center;"
                        data-dim="w:737px,613px,546px,434px;" data-frame_0="y:50,39,29,17;"
                        data-frame_1="st:500;sp:1000;sR:500;"
                        data-frame_999="y:50,39,29,17;o:0;st:7700;sp:1000;sR:6290;"
                        style="z-index:9;font-family:'Plus Jakarta Sans';text-transform:capitalize;">{{$slider->name}}
                        </rs-layer>
                        <!--
                        -->
                        <rs-layer id="slider-14-slide-46-layer-2" data-type="shape" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:30px,30px,-170px,-135px;y:m,m,m,t;yo:-94px,-50px,-70px,185px;"
                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;" data-dim="w:30px,30px,30px,18px;h:1px;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:300;sp:1000;"
                        data-frame_999="y:50,39,29,17;o:0;st:8000;sp:1000;"
                        style="z-index:12;background-color:#e6af5d;">
                        </rs-layer>
                        <!--
                        -->
                        @if($slider->action == null OR $slider->action == "")

                            <a id="slider-14-slide-46-layer-3" class="rs-layer pq-button pq-button-flat pq-btn-font  rev-btn"
                                href="{{url('/')}}/contact-us" target="_self" data-type="button" data-rsp_ch="on"
                                data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m;yo:161px,170px,140px,114px;"
                                data-text="w:normal;s:14,16,16,14;l:32,32,32,28;ls:1px,0px,0px,1px;fw:600;"
                                data-dim="minh:0px,none,none,none;" data-padding="t:13;r:30;b:13;l:30;"
                                data-border="bos:solid;boc:rgba(255, 255, 255, 0);bow:2px,2px,2px,2px;"
                                data-frame_0="y:50,39,29,17;" data-frame_1="st:900;sp:1000;sR:900;"
                                data-frame_999="y:50,39,29,17;o:0;st:7400;sp:1000;sR:5500;"
                                data-frame_hover="c:#fff;bgc:#30373f;boc:rgba(11,11,11,0);bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;bri:120%;"
                                style="z-index:8;background-color:#e6af5d;font-family:'Plus Jakarta Sans';text-transform:uppercase;">
                                <div class="pq-button-block"><span class="pq-button-text">Get In Touch </span><span
                                class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                            </a>
                        @else
                            <a id="slider-14-slide-46-layer-3" class="rs-layer pq-button pq-button-flat pq-btn-font  rev-btn"
                                href="{{$slider->action}}" target="_self" data-type="button" data-rsp_ch="on"
                                data-xy="x:l,l,c,c;xo:30px,30px,0,0;y:m;yo:161px,170px,140px,114px;"
                                data-text="w:normal;s:14,16,16,14;l:32,32,32,28;ls:1px,0px,0px,1px;fw:600;"
                                data-dim="minh:0px,none,none,none;" data-padding="t:13;r:30;b:13;l:30;"
                                data-border="bos:solid;boc:rgba(255, 255, 255, 0);bow:2px,2px,2px,2px;"
                                data-frame_0="y:50,39,29,17;" data-frame_1="st:900;sp:1000;sR:900;"
                                data-frame_999="y:50,39,29,17;o:0;st:7400;sp:1000;sR:5500;"
                                data-frame_hover="c:#fff;bgc:#30373f;boc:rgba(11,11,11,0);bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;bri:120%;"
                                style="z-index:8;background-color:#e6af5d;font-family:'Plus Jakarta Sans';text-transform:uppercase;">
                                <div class="pq-button-block"><span class="pq-button-text">{{$slider->action_name}} </span><span
                                class="pq-button-line-right"></span><i class="ion ion-ios-arrow-right"></i></div>
                            </a>

                        @endif

                        <!--
                        -->
                        <rs-layer id="slider-14-slide-46-layer-4" data-type="shape" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:30px,30px,170px,135px;y:m,m,m,t;yo:-94px,-50px,-70px,185px;"
                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;" data-dim="w:30px,30px,30px,18px;h:1px;"
                        data-frame_0="y:50,39,29,17;" data-frame_1="st:300;sp:1000;"
                        data-frame_999="y:50,39,29,17;o:0;st:8000;sp:1000;"
                        style="z-index:10;background-color:#e6af5d;">
                        </rs-layer>
                        <!--
                        -->
                    </rs-slide>
                @endforeach
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->
</div>
<!-- Banner -->
