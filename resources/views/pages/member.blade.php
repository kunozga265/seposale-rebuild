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
                    <h1>Profile</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('team')}}">Leadership</a></li>
                            <li class="active">{{ $member->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


     <section class="about-me-one">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="about-me-one__image">
                            <img style="width: 100%;" src="{{ asset($member->photo) }}" alt="">
                        </div><!-- /.about-me-one__image -->
                    </div><!-- /.col-md-12 -->
                    <div class="col-md-12 col-lg-6 d-flex items-center">
                        <div class="about-me-one__content">
                            <div class="sec-title">
                                <h2>{{ $member->name }}<span class="dot">.</span></h2>
                            </div>
                            <!-- <div class="about-me-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>/.about-me-one__social -->
                            <div>
                                {!! $member->body !!}

                            </div>
                            

                            
                        </div><!-- /.about-me-one__content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.auto-container -->
        </section><!-- /.about-me-one -->

</x-guest-layout>