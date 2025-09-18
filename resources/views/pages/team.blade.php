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
                    <h1>Leadership</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Leadership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


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