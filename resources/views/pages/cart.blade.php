<x-guest-layout>

    <x-slot name="title">
        Cart
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('images/background/banner-4.jpg')}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Cart</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <livewire:cart-page/>


</x-guest-layout>
