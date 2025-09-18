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
                <!-- <div class="left-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box"><img src="images/background/banner-3.jpg" alt=""></div>
                    </div>
                </div> -->
                <!--Right Column-->
                <!-- <div class="right-col col-lg-6 col-md-12 col-sm-12"> -->
                <div class="right-col col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Learn about Seposale<span class="dot">.</span></h2>
                            <div class="lower-text">
                                <b>Seposale Limited</b> is a fast-growing company
                                specializing in the online sale of construction materials.
                                The company is redefining how the construction
                                industry accesses and purchases supplies by
                                introducing futuristic, technology-driven solutions. With
                                a focus on speed, convenience, and reliability, Seposale
                                is positioning itself as a trusted partner for individuals,
                                contractors, and large developers alike.
                                <br>
                                <br>
                                Beyond selling construction materials, Seposale is
                                building an integrated business platform that combines
                                <b>e-commerce, digital banking, and multinational
                                    payment systems</b>. This innovative approach not only
                                simplifies transactions but also creates a seamless
                                experience for customers across borders, reinforcing
                                the company’s vision to become a leading force in
                                digital commerce and construction supply chains
                                across Africa and beyond.
                                <!-- <br>
                                <br>
                                To make your experience even better, we offer a variety of deals and discounts designed to maximize your satisfaction. Don’t wait—reach out to us today and discover how we can support your next project! -->
                            </div>
                        </div>
                        {{-- <div class="features">
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
                                <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Vision</span></li>
                                <li data-tab="#tab-2" class="tab-btn"><span>Our Mission</span></li>
                                <li data-tab="#tab-3" class="tab-btn"><span>Motto</span></li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab-->
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content">
                                        <div class="text">To create world's leading integrated business platform,
                                            combining e-commerce, digital banking, and
                                            multinational payment systems, backed by in-house
                                            manufacturing and supplying of construction
                                            materials.</div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-2">
                                    <div class="content">
                                        <div class="text">To empower our client’s economic growth by providing
                                            reliable construction materials through an innovative e-
                                            commerce platform, while building trusted financial
                                            solutions that connect people, businesses, and markets
                                            across the world.</div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-3">
                                    <div class="content">
                                        <div class="text">Inspired Future</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">

                        <div class="featured-block-two">
                            {{-- <div class="image"><img src="images/brand-ambassador.jpg" alt=""></div>--}}
                            <div class="text">
                                <div class="text">Our foundation is anchored by four core principles that not only define our identity but also fuel our ongoing success and growth.</div>
                                <ul>
                                    <li><b>Innovation & Creativity</b> – Driving growth through
                                        forward-thinking ideas and technology.</li>
                                    <li><b>Integrity</b> – Conducting business with honesty,
                                        transparency, and accountability.</li>
                                    <li><b>Teamwork</b> – Building success through collaboration
                                        and shared purpose.</li>
                                    <li><b>Excellence</b> – Delivering high-quality products, services,
                                        and customer experiences.</li>
                                    <li><b>Sustainability</b> – Promoting responsible manufacturing,
                                        sourcing, and business practices.</li>






                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Strategic Objectives for Africa's Leading E-commerce
                    Platform<span class="dot">.</span></h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">

                            <!-- <i class="how-it-works-card__icon flaticon-development1"></i> -->
                            <h3 class="how-it-works-card__title">
                                <a href="team.html">Establish Manufacturing Capabilities</a>
                            </h3>
                            <div class="">
                                Acquire or build factories for tiles, blocks, and bricks to
                                ensure consistent supply and competitive pricing for
                                our e-commerce platform.
                            </div>

                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">

                            <!-- <i class="how-it-works-card__icon flaticon-development1"></i> -->
                            <h3 class="how-it-works-card__title">
                                <a href="team.html">Develop a World-Class E-commerce System</a>
                            </h3>
                            <div class="">
                                Build a user-friendly, scalable, and secure platform that
                                showcases our products, integrates logistics, and
                                delivers an exceptional customer experience.
                            </div>

                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">

                            <!-- <i class="how-it-works-card__icon flaticon-development1"></i> -->
                            <h3 class="how-it-works-card__title">
                                <a href="team.html">Expand into Payment and Digital Banking</a>
                            </h3>
                            <div class="">
                                Transform the platform into a comprehensive financial
                                ecosystem — enabling secure payments, mobile
                                wallets, credit facilities, and cross-border transactions.
                            </div>

                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">

                            <!-- <i class="how-it-works-card__icon flaticon-development1"></i> -->
                            <h3 class="how-it-works-card__title">
                                <a href="team.html">Build a High-Performing Team</a>
                            </h3>
                            <div class="">
                                Attract, develop, and retain top talent across
                                technology, finance, operations, and manufacturing
                                while fostering a culture of innovation and excellence.
                            </div>

                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">

                            <!-- <i class="how-it-works-card__icon flaticon-development1"></i> -->
                            <h3 class="how-it-works-card__title">
                                <a href="team.html">Diversify through Real Estate Investments</a>
                            </h3>
                            <div class="">
                                Invest strategically in real estate to generate passive
                                income and secure collateral for future expansion
                                across Africa.
                            </div>

                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.auto-container -->
    </section><!-- /.how-it-works -->

    <!-- Team Section -->
    <section class="team-section ">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Meet the Leadership<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="carousel-box">
            <div class="team-carousel owl-theme owl-carousel">
                @foreach ($members as $member)
                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset($member->photo)}}" alt=""></a>
                            <!-- <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href=""><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul> -->
                        </div>
                        <div class="lower-box">
                            <h5><a href="{{ route('member',['slug'=>$member->slug]) }}">{{ $member->name }}</a></h5>
                            <div class="designation">{{ $member->position }}</div>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </section>


</x-guest-layout>