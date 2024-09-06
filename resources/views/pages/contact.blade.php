<x-guest-layout>

    <x-slot name="title">
        Contact
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('images/background/banner-4.jpg')}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Contact Us</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Where to find us<span class="dot">.</span></h2>
            </div>

            <div class="upper-info">
                <div class="row clearfix">
                    <div class="info-block col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h5>Main Office</h5>
                            <div class="text">
                                <ul class="info">
                                    <li>Area 47 Sector 4, Lilongwe</li>
                                    <li><a href="mailto:info@seposale.com">info@seposale.com</a></li>
                                    <li><a href="tel:265992478408">+265 992 478 408</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="info-block col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h5>Materials Site</h5>
                            <div class="text">
                                <ul class="info">
                                    <li>Njewa, Lilongwe</li>
                                    <li><a href="mailto:njewa-site@seposale.com">njewa-site@seposale.com</a></li>
                                    <li><a href="tel:+265 993 41 81 87">+265 993 41 81 87</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="map-box">
                <iframe class="map-iframe"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15488.560807424454!2d33.7678316!3d-13.9502565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d3e07aea4fc1%3A0x14b454df65bfbb3a!2sSepoSale%20Limited!5e0!3m2!1sen!2smw!4v1725444692816!5m2!1sen!2smw"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

            </div>
            <div class="form-box">
                <div class="sec-title">
                    <h2>Write Us a Message<span class="dot">.</span></h2>
                </div>
                <div class="default-form">
                    <form method="post" action="#" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="username" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="email" name="email" value="" placeholder="Email Address"
                                           required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="field-inner">
                                    <input type="text" name="subject" value="" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner">
                                    <textarea name="message" placeholder="Write Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button class="theme-btn btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Send message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



</x-guest-layout>
