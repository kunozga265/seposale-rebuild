<x-guest-layout>

    <x-slot name="title">
        Vacancies
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('images/background/banner-4.jpg')}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Vacancies</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Vacancies</li>
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
                <h2>Join our team today!<span class="dot">.</span></h2>
            </div>

              <div class="row">
                    @if($message=Session::get('success'))
                        <div style="width:100%" class="alert alert-success alert-dismissible fade show" role="alert">
                            
                            <strong>Success!</strong> {{$message}}
                        </div>
                    @endif
                    @if($message=Session::get('info'))
                        <div style="width:100%" class="alert alert-info alert-dismissible fade show" role="alert">
                           
                            <strong>Information!</strong> {{$message}}
                        </div>
                    @endif
                    @if($message=Session::get('error'))
                        <div style="width:100%" class="alert alert-danger alert-dismissible fade show" role="alert">
                           
                            <strong>Error!</strong> {{$message}}
                        </div>
                    @endif
                    @if($message=Session::get('warning'))
                        <div style="width:100%" class="alert alert-warning alert-dismissible fade show" role="alert">
                            
                            <strong>Warning!</strong> {{$message}}
                        </div>
                    @endif

                </div>


            <div class="upper-info">
                <div class="row clearfix">

                    @foreach ($vacancies as $vacancy)

                    <a href="{{ route('vacancy',['slug'=>$vacancy->slug]) }}">
                        <div class="info-block col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h5>{{ $vacancy->title }}</h5>
                                <div class="">
                                    <ul class="info">
                                        <!-- <li>Marketing Department</li> -->
                                        <li style="color: #999b9f;">Closes on {{ date("M d, Y", $vacancy->date) }} ({{ \Carbon\Carbon::createFromTimestamp($vacancy->date)->diffForHumans() }})</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach


                </div>
            </div>

        </div>
    </section>



</x-guest-layout>