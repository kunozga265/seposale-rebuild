<x-guest-layout>

    <x-slot name="title">
        Projects
    </x-slot>

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{asset('images/background/banner-4.jpg')}});"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>projects</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <section class="events-one">
        <div class="auto-container">
            <div class="row">

                <div class="col-md-6 col-lg-4">
                    <div class="events-one__item">
                        <div class="events-one__image" style="background-image: url({{asset('images/background/banner-5.jpg')}})">
                            <div class="events-one__date">
                                Nov 2022
                            </div><!-- /.events-one__date -->
                        </div><!-- /.events-one__image -->
                        <div class="events-one__content">
                            <h3 class="events-one__title">
                                <a href="#">
                                   KCH Interchange
                                </a>
                            </h3><!-- /.events-one__title -->
                            <div class="location"> Area 33, Lilongwe</div>
                            <ul class="events-one__meta list-unstyled">
                                <li>
{{--                                    <i class="fa  fa-user-o"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-tie</title><path fill="#ffbf14" d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" /></svg>
                                    <div>China Civil Engineering Construction Corporation (CCECC)</div>
                                </li>
                                <li>
{{--                                    <i class="fa fa-backward"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>dump-truck</title><path fill="#ffbf14" d="M20,8H19L17,8H15V14H2V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8M6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5M18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5M17,12V9.5H19.5L21.46,12H17M18,7H14V13H3L1.57,8H1V6H13L14,5H18V7Z" /></svg>
                                    Cement Blocks & River Sand
                                </li>
                            </ul><!-- /.events-one__meta list-unstyled -->
                        </div><!-- /.events-one__content -->
                    </div><!-- /.events-one__item -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="events-one__item">
                        <div class="events-one__image" style="background-image: url({{asset('images/background/banner-5.jpg')}})">
                            <div class="events-one__date">
                                May 2023
                            </div><!-- /.events-one__date -->
                        </div><!-- /.events-one__image -->
                        <div class="events-one__content">
                            <h3 class="events-one__title">
                                <a href="#">
                                    Good Soil HQ
                                </a>
                            </h3><!-- /.events-one__title -->
                            <div class="location">Pondamali, Lilongwe</div>
                            <ul class="events-one__meta list-unstyled">
                                <li>
{{--                                    <i class="fa  fa-user-o"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-tie</title><path fill="#ffbf14" d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" /></svg>
                                    Good Soil Partners
                                </li>
                                <li>
{{--                                    <i class="fa fa-backward"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>dump-truck</title><path fill="#ffbf14" d="M20,8H19L17,8H15V14H2V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8M6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5M18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5M17,12V9.5H19.5L21.46,12H17M18,7H14V13H3L1.57,8H1V6H13L14,5H18V7Z" /></svg>
                                    Quarry Stone, Quarry Dust & River Sand
                                </li>
                            </ul><!-- /.events-one__meta list-unstyled -->
                        </div><!-- /.events-one__content -->
                    </div><!-- /.events-one__item -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="events-one__item">
                        <div class="events-one__image" style="background-image: url({{asset('images/background/banner-5.jpg')}})">
                            <div class="events-one__date">
                                Jun 2023
                            </div><!-- /.events-one__date -->
                        </div><!-- /.events-one__image -->
                        <div class="events-one__content">
                            <h3 class="events-one__title">
                                <a href="#">
                                    MAG - Head Office
                                </a>
                            </h3><!-- /.events-one__title -->
                            <div class="location"> Area 32, Lilongwe</div>
                            <ul class="events-one__meta list-unstyled">
                                <li>
                                    {{--                                    <i class="fa  fa-user-o"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-tie</title><path fill="#ffbf14" d="M12 3C14.21 3 16 4.79 16 7S14.21 11 12 11 8 9.21 8 7 9.79 3 12 3M16 13.54C16 14.6 15.72 17.07 13.81 19.83L13 15L13.94 13.12C13.32 13.05 12.67 13 12 13S10.68 13.05 10.06 13.12L11 15L10.19 19.83C8.28 17.07 8 14.6 8 13.54C5.61 14.24 4 15.5 4 17V21H20V17C20 15.5 18.4 14.24 16 13.54Z" /></svg>
                                    Malawi Assemblies of God
                                </li>
                                <li>
                                    {{--                                    <i class="fa fa-backward"></i>--}}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>dump-truck</title><path fill="#ffbf14" d="M20,8H19L17,8H15V14H2V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8M6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5M18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5M17,12V9.5H19.5L21.46,12H17M18,7H14V13H3L1.57,8H1V6H13L14,5H18V7Z" /></svg>
                                    Cement & River Sand
                                </li>
                            </ul><!-- /.events-one__meta list-unstyled -->
                        </div><!-- /.events-one__content -->
                    </div><!-- /.events-one__item -->
                </div><!-- /.col-md-6 col-lg-4 -->

            </div><!-- /.row -->

            <div class="more-box text-center">
                <a class="theme-btn btn-style-one" href="events.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Load more posts</span>
                </a>
            </div>
        </div><!-- /.auto-container -->
    </section><!-- /.events-one -->


</x-guest-layout>
