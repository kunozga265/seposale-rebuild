<x-guest-layout>

    <x-slot name="title">
        About
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('images/background/banner-4.jpg')}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>About Us</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <section class="featured-section featured-section__about-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box"><img src="images/background/banner-3.jpg" alt=""></div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>We are all about construction materials<span class="dot">.</span></h2>
                            <div class="lower-text">Welcome to your trusted online marketplace, where quality products and services meet affordability. We specialize in delivering everything you need right to your doorstep, ensuring convenience and reliability.
                                <br>
                                <br>
                                Whether you're working on substructure or superstructure projects, you can count on us to have exactly what you need. Our commitment to your success means we ensure your projects start and finish on time, every time.
                                <br>
                                <br>
                                To make your experience even better, we offer a variety of deals and discounts designed to maximize your satisfaction. Don’t wait—reach out to us today and discover how we can support your next project!
                            </div>
                        </div>
      {{--                  <div class="features">
                            <div class="row clearfix">
                                <div class="feature col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <h6>Guaranteed Quality</h6>
                                        <div class="text">Lorem ipsum is not dolor sit amet, consectetur notted.
                                        </div>
                                    </div>
                                </div>
                                <div class="feature col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <h6>Timely delivery</h6>
                                        <div class="text">Lorem ipsum is not dolor sit amet, consectetur notted.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}

                    </div>
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
                            <h2>What drives<br>Seposale?<span class="dot">.</span></h2>
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
                            {{--                            <div class="image"><img src="images/brand-ambassador.jpg" alt=""></div>--}}
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
                            <a href="#"><img src="images/mike.jpg" alt=""></a>
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
                            <a href="#"><img src="images/kuno.jpg" alt=""></a>
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
                            <a href="#"><img src="images/khumbi.jpg" alt=""></a>
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

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="images/khumbi.jpg" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Thokozani Chilaga</a></h5>
                            <div class="designation">Administrative Officer</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="images/khumbi.jpg" alt=""></a>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">Rhudo Phiri</a></h5>
                            <div class="designation">Accountant</div>
                        </div>
                    </div>
                </div>
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="images/prince.jpg" alt=""></a>
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
