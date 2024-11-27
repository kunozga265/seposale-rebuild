<x-guest-layout>

    @push("scripts")
        <script>
            var lastScrollTop = 0;
            $(window).on("scroll", function () {
                let scroll_y = this.scrollY; //Get scroll height
                const height = $("#products").offset().top - $('.header-upper').height(); //Get position of products section
                //get current scroll top position
                var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"

                //only run when the scroll top is within the main header
                if (scroll_y > 0 && scroll_y < height) {
                    if (st > lastScrollTop) {
                        // down scroll, jump to products section
                        $("html, body").scrollTop(height);
                    } else if (st < lastScrollTop) {
                        // up scroll code
                    } // else was horizontal scroll
                }
                lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
            });
        </script>
    @endpush

    <x-slot name="title">
        Home
    </x-slot>

    <!-- Banner Section -->
    <section class="banner-section banner-one">

        <div class="left-based-text">
            <div class="base-inner">
                <div class="hours">
                    <ul class="clearfix">
                        <li><span>mon - fri</span></li>
                        <li><span>8am - 4:30pm</span></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://www.x.com/seposalecompany/" target="_blank"><span>Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/seposalecompany/" target="_blank"><span>Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/seposalecompany/" target="_blank"><span>Instagram</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url({{asset('images/background/banner-4.jpg')}});"></div>
                {{--                <div class="left-top-line"></div>--}}
                {{--                <div class="right-bottom-curve"></div>--}}
                {{--                <div class="right-top-curve"></div>--}}
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Welcome to Seposale Limited</div>
                                <h1>Get Construction Materials<br>Delivered at your convenience</h1>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-one" href="{{route('about')}}">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Learn More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url({{asset('images/background/banner-2.jpg')}});"></div>
                {{--                <div class="left-top-line"></div>--}}
                {{--                <div class="right-bottom-curve"></div>--}}
                {{--                <div class="right-top-curve"></div>--}}
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Everything from substructure to superstructure</div>
                                <h1>Buy Cement, River Sand, Quarry Products, blocks & more!</h1>
                                <div class="link-box">
                                    <a class="theme-btn btn-style-one" href="#">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Shop Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Banner Section -->

    <!-- Products Section -->
    <section id="products" class="gallery-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="upper-row clearfix">
                    <div class="sec-title">
                        <h2>Product Portfolio<span class="dot">.</span></h2>
                    </div>
                    <!--Filter-->
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                            <li class="filter" data-role="button" data-filter=".cement">Cement<sup>[2]</sup>
                            </li>
                            <li class="filter" data-role="button" data-filter=".quarry">
                                Quarry Products<sup>[3]</sup></li>
                            <li class="filter" data-role="button" data-filter=".blocks">Cement Blocks<sup>[4]</sup>
                            </li>

                            <li class="filter" data-role="button" data-filter=".river-sand">
                                River Sand<sup>[3]</sup></li>
                        </ul>
                    </div>
                </div>
                <div class="filter-list row">
                    <!-- Gallery Item -->
                    <div class="gallery-item mix all cement col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/thanthwe.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/thanthwe.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Cement</span></div>
                                    <div class="title">
                                        <h5><a href="#">Thanthwe (42.5N)</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all cement col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/akshar.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/akshar.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Cement</span></div>
                                    <div class="title">
                                        <h5><a href="#">Akshar (32.5)</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all branding quarry col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/quarry-stone.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/quarry-stone.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Quarry Products</span></div>
                                    <div class="title">
                                        <h5><a href="#">Aggregate (19mm)</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all quarry col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/pebble-stone.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/pebble-stone.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Quarry Products</span></div>
                                    <div class="title">
                                        <h5><a href="#">Pebble Stone(10 & 14mm)</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div
                        class="gallery-item mix all quarry col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/dust.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/dust.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Quarry Products</span></div>
                                    <div class="title">
                                        <h5><a href="#">Dust</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all blocks col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/blocks-1.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/blocks-1.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Cement Blocks</span></div>
                                    <div class="title">
                                        <h5><a href="#">Medium (150 x 200 x 400mm)</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all blocks col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/blocks-2.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/blocks-2.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Cement Blocks</span></div>
                                    <div class="title">
                                        <h5><a href="#">Big (200 x 200 x 400mm)</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item -->
                    <div class="gallery-item mix all river-sand col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image"><img src="{{asset('images/gallery/river-sand.jpg')}}" alt=""></figure>
                            <a href="{{asset('images/gallery/river-sand.jpg')}}" class="lightbox-image overlay-box"
                               data-fancybox="gallery"></a>
                            <div class="cap-box">
                                <div class="cap-inner">
                                    <div class="cat"><span>Constructino Sand</span></div>
                                    <div class="title">
                                        <h5><a href="#">River Sand</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <!-- Gallery Item -->--}}
{{--                    <div class="gallery-item mix all river-sand col-lg-3 col-md-6 col-sm-12">--}}
{{--                        <div class="inner-box">--}}
{{--                            <figure class="image"><img src="{{asset('images/gallery/river-sand-1.jpg')}}" alt=""></figure>--}}
{{--                            <a href="{{asset('images/gallery/river-sand-1.jpg')}}" class="lightbox-image overlay-box"--}}
{{--                               data-fancybox="gallery"></a>--}}
{{--                            <div class="cap-box">--}}
{{--                                <div class="cap-inner">--}}
{{--                                    <div class="cat"><span>River Sand</span></div>--}}
{{--                                    <div class="title">--}}
{{--                                        <h5><a href="#">Salima (Medium & Coarse)</a></h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

            </div>


        </div>
    </section>


    <!--About Section-->
    <section class="agency-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Briefly about <br>Seposale<span class="dot">.</span></h2>
                        </div>

                        <!--Default Tabs-->
                        <div class="default-tabs tabs-box">

                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                                <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                                {{--                                <li data-tab="#tab-3" class="tab-btn"><span>Our History</span></li>--}}
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab-->
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content">
                                        <div class="text">We are committed to providing excellent goods and services that are affordable and easily accessible to our clients, through innovative technology and collaboration.</div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-2">
                                    <div class="content">
                                        <div class="text">A world where products and services are acquired online and delivered within the shortest possible.</div>
                                    </div>
                                </div>

                                {{--                                <!--Tab-->--}}
                                {{--                                <div class="tab" id="tab-3">--}}
                                {{--                                    <div class="content">--}}
                                {{--                                        <div class="text">There are many variations of passages of avaialable but--}}
                                {{--                                            the majority have in some form, by injected humou or words which don't--}}
                                {{--                                            look even slightly believable. There are many variations of but the--}}
                                {{--                                            majority have suffered.</div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                            </div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">

                        <div class="featured-block-two">
                            {{--                            <div class="image"><img src="{{asset('images/brand-ambassador.jpg')}}" alt=""></div>--}}
                            <div class="text">
                                <div class="text">Our foundation is anchored by four core principles that not only define our identity but also fuel our ongoing success and growth.</div>
                                <ul>
                                    <li>Integrity</li>
                                    <li>Excellency</li>
                                    <li>Innovation</li>
                                    <li>Team Work</li>
                                    {{--                                    <li>Lorem Ipsum on the tend to repeat.</li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title Block-->
                <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Re-imagining Construction Materials<span class="dot">.</span></h2>
                            <div class="lower-text">We are a trusted online selling platform for quality products and services at affordable prices, delivered at your doorstep.</div>
                        </div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                     data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-online-banking"></span></div>
                        <h6><a href="web-development#">Competitive <br>Prices</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-quality"></span></div>
                        <h6><a href="#">Quality <br>of Materials</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                     data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-credit-card"></span></div>
                        <h6><a href="#">Credit <br>Facility</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-clock"></span></div>
                        <h6><a href="#">Timeliness <br>of delivery</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-collaboration"></span></div>
                        <h6><a href="#">Professional <br>Service</a></h6>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                     data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-monitor"></span></div>
                        <h6><a href="#">Commitment <br>to Excellence</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfacts Section -->
    <section class="facts-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <!-- <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div> -->
        <img src="{{asset('images/background/bg-home.jpg')}}" alt="" class="jarallax-img">
        <div class="auto-container">
            <div class="inner-container">

                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="4000" data-stop="10">0</span>
                                    </div>
                                    <div class="counter-title">Projects</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="3000" data-stop="150">0</span>
                                    </div>
                                    <div class="counter-title">Satisfied clients</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="960">0</span>
                                    </div>
                                    <div class="counter-title">Total Orders</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="4000" data-stop="400">0</span>
                                    </div>
                                    <div class="counter-title">Order per year</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Funfacts Section -->

    <!-- Trusted Section -->
    <section class="trusted-section">
        <div class="auto-container">
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="left-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="col-header">
                                <div class="header-inner">
                                    <span>We have capacity to supply to both small and big projects.</span>
                                </div>
                            </div>
                            <div class="features">
                                <div class="feature">
                                    <div class="count"><span>01</span></div>
                                    <h5>SUBSTRUCTURE</h5>
                                    <div class="sub-text">Footing & Floor Slabs</div>
                                </div>
                                <div class="feature">
                                    <div class="count"><span>02</span></div>
                                    <h5>SUPERSTRUCTURE</h5>
                                    <div class="sub-text">Walls, Columns, Beams & Decks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>We’re trusted by more <br>than 400 clients<span class="dot">.</span></h2>
                                <div class="lower-text">Our professional service makes us a preferred choice for many clients.
                                    We are driven to offer the best possible products and services to our clients.
                                    As such, we add value to our process through the following;
                                </div>
                            </div>
                            <div class="featured-block-two clearfix">
                                <div class="image"><img src="{{asset('images/background/bg-home.jpg')}}" alt=""></div>
                                <div class="text">
                                    <ul>
                                        <li>Generated quotations & invoices</li>
                                        <li>Trackable sales orders</li>
                                        <li>Signed delivery notes</li>
                                        <li>Official receipts</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section -->
    <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
        <img src="{{asset('images/background/banner-1.jpg')}}" alt="" class="jarallax-img">
        <div class="auto-container">
            <div class="content-box">
                <div class="icon-box"><span class="flaticon-collaboration"></span></div>
                <h2>Great things in business are never done by one person. <span>They’re done by a team of
                            people.</span></h2>
            </div>
        </div>
    </section>
    <!-- End Funfacts Section -->

    <!-- Team Section -->
    <section class="team-section ">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Meet the team<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="carousel-box">
            <div class="team-carousel owl-theme owl-carousel">
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/mike.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href=""><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Mike Mkali</a></h5>
                            <div class="designation">Managaing Director</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/kuno.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Kunozga Mlowoka</a></h5>
                            <div class="designation">Chief Executive Officer</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/khumbi.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Khumbiro Mkali</a></h5>
                            <div class="designation">Brand Ambassador</div>
                        </div>
                    </div>
                </div>

{{--                <!--Team-->--}}
{{--                <div class="team-block">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="image-box">--}}
{{--                            <a href="#"><img src="{{asset('images/khumbi.jpg')}}" alt=""></a>--}}
{{--                            <ul class="social-links clearfix">--}}
{{--                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>--}}
{{--                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>--}}
{{--                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>--}}
{{--                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="lower-box">--}}
{{--                            <h5><a href="#">Thokozani Chilaga</a></h5>--}}
{{--                            <div class="designation">Administrative Officer</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!--Team-->--}}
{{--                <div class="team-block">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="image-box">--}}
{{--                            <a href="#"><img src="{{asset('images/khumbi.jpg')}}" alt=""></a>--}}
{{--                            <ul class="social-links clearfix">--}}
{{--                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>--}}
{{--                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>--}}
{{--                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>--}}
{{--                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="lower-box">--}}
{{--                            <h5><a href="#">Rhudo Phiri</a></h5>--}}
{{--                            <div class="designation">Accountant</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/prince.jpg')}}" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Prince Tsamba</a></h5>
                            <div class="designation">Delivery Officer</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

</x-guest-layout>
