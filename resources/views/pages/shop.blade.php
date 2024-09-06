<x-guest-layout>

    <x-slot name="title">
        Shop
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/background/banner-4.jpg);"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Products</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <livewire:shop-page/>


</x-guest-layout>
