<x-guest-layout>

    <x-slot name="title">
        Vacancies - {{ $vacancy->title }}
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('images/background/banner-4.jpg')}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Vacancy</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('vacancies')}}">Vacancies</a></li>
                            <li class="active">{{$vacancy->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <livewire:new-application :vacancy="$vacancy" />




</x-guest-layout>