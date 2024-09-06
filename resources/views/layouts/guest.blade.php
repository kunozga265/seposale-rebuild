<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Seposale') }} - {{$title}}</title>

        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
            rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
{{--        <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">--}}
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('css/owl.css')}}" rel="stylesheet">
        <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('css/linoor-icons-2.css')}}" rel="stylesheet">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
        <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/hover.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/jarallax.css')}}">
        <link href="{{asset('css/custom-animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- rtl css -->
        <link href="{{asset('css/rtl.css')}}" rel="stylesheet">
        <!-- Responsive File -->
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

        <!-- Color css -->
        <link rel="stylesheet" id="jssDefault" href="{{asset('css/colors/color-default.css')}}">

        <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

        <!-- Responsive Settings -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="{{asset('js/respond.js')}}"></script><![endif]-->
        <!-- Scripts -->
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
        @livewireStyles
    </head>
    <body >

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader">
                <div class="icon"></div>
            </div>

            <!-- Main Header -->
            <header class="main-header header-style-one">

                <!-- Header Upper -->
                <div class="header-upper">
                    <div class="inner-container clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{route('home')}}" title="Seposale Limited"><img
                                        src="{{asset('images/logo.png')}}" id="thm-logo" alt="Seposale Limited"
                                        title="Seposale Limited"></a></div>
                        </div>
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                    class="txt">Menu</span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="{{request()->is('home') ? 'current' : '' }}">
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li class="{{request()->is('about') ? 'current' : '' }}">
                                            <a href="{{route('about')}}">About</a>
                                        </li>
                                        <li class="{{request()->is('shop') ? 'current' : '' }}">
                                            <a href="{{route('shop')}}">Shop</a>
                                        </li>
                                        <li class="{{request()->is('projects') ? 'current' : '' }}">
                                            <a href="{{route('projects')}}">Projects</a>
                                        </li>
                                        <li class="{{request()->is('contact-us') ? 'current' : '' }}">
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="other-links clearfix">
                            <livewire:cart />
                            <!--Search Btn-->
                            <div class="search-btn">
                                <button type="button" class="theme-btn search-toggler"><span
                                        class="flaticon-loupe"></span></button>
                            </div>
                            <div class="link-box">
                                <div class="call-us">
                                    <div class="link">
                                        <span class="icon"></span>
{{--                                        <span class="sub-text">Call Anytime</span>--}}
                                        <a href="tel:+265 992 478 408"><span class="number">+265 992 478 408</span></a>
                                        <a href="tel:+265 888 699 977"><span class="number">+265 888 699 977</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Header Upper-->

            </header>
            <!-- End Main Header -->

            <!--Mobile Menu-->
            <div class="side-menu__block">


                <div class="side-menu__block-overlay custom-cursor__overlay">
                    <div class="cursor"></div>
                    <div class="cursor-follower"></div>
                </div><!-- /.side-menu__block-overlay -->
                <div class="side-menu__block-inner ">
                    <div class="side-menu__top justify-content-end">

                        <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
                                                                                         alt=""></a>
                    </div><!-- /.side-menu__top -->


                    <nav class="mobile-nav__container">
                        <!-- content is loading via js -->
                    </nav>
                    <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                    <div class="side-menu__content">
{{--                        <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of--}}
{{--                            other agencies.</p>--}}
                        <p><a href="mailto:needhelp@linoor.com">info@seposale.com</a> <br>
{{--                            <a href="tel:888-999-0000">888--}}
{{--                                999 0000</a>--}}
                            <a href="tel:+265 992 478 408"><span class="number">+265 992 478 408</span></a>
                            <a href="tel:+265 888 699 977"><span class="number">+265 888 699 977</span></a>
                        </p>
                        <div class="side-menu__social">
                            <a href="https://www.facebook.com/seposalecompany/"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://x.com/seposalecompany/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/seposalecompany/"><i class="fab fa-instagram"></i></a>
{{--                            <a href="#"><i class="fab fa-pinterest-p"></i></a>--}}
                        </div>
                    </div><!-- /.side-menu__content -->
                </div><!-- /.side-menu__block-inner -->
            </div><!-- /.side-menu__block -->

            <!--Search Popup-->
            <div class="search-popup">
                <div class="search-popup__overlay custom-cursor__overlay">
                    <div class="cursor"></div>
                    <div class="cursor-follower"></div>
                </div><!-- /.search-popup__overlay -->
                <div class="search-popup__inner">
                    <form action="#" class="search-popup__form">
                        <input type="text" name="search" placeholder="Type here to Search....">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- /.search-popup__inner -->
            </div><!-- /.search-popup -->


            {{ $slot }}

            <!-- Call To Section -->
            <section class="call-to-section">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                        <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
                        <h2>Let's Get Your Project <br>Started!</h2>
                        <div class="link-box">
                            <a class="theme-btn btn-style-two" href="{{route('contact')}}">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Contact us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="widget-content">
                                        <div class="logo">
                                            <a href="#"><img id="fLogo" src="images/logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">We are a trusted online selling platform for quality products and services at affordable prices, delivered at your doorstep.</div>
                                        <ul class="social-links clearfix">
                                            <li><a href="https://www.facebook.com/seposalecompany/"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="https://x.com/seposalecompany/"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="https://www.instagram.com/seposalecompany/"><span class="fab fa-instagram"></span></a></li>
{{--                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-content">
                                        <h6>Explore</h6>
                                        <div class="row clearfix">
                                            <div class="col-md-12 col-sm-12">
                                                <ul>
                                                    <li><a href="{{route('about')}}">About</a></li>
                                                    <li><a href="{{route('shop')}}">Shop</a></li>
                                                    <li><a href="{{route('projects')}}">Projects</a></li>
                                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                </ul>
                                            </div>
{{--                                            <div class="col-md-6 col-sm-12">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">Support</a></li>--}}
{{--                                                    <li><a href="#">Privacy Policy</a></li>--}}
{{--                                                    <li><a href="#">Terms of Use</a></li>--}}
{{--                                                    <li><a href="#">Help</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget info-widget">
                                    <div class="widget-content">
                                        <h6>Contact</h6>
                                        <ul class="contact-info">
                                            <li class="address"><span class="icon flaticon-pin-1"></span> Area 47 Sector 4 House 869<br>Lilongwe, Malawi</li>
                                            <li><span class="icon flaticon-call"></span><a href="tel:265992478408">+265 992 478 408</a></li>
                                            <li><span class="icon flaticon-call"></span><a href="tel:265888699977">+265 888 699 977</a></li>
                                            <li><span class="icon flaticon-email-2"></span><a
                                                    href="mailto:info@seposale.com">info@seposale.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                    <div class="widget-content">
                                        <h6>Newsletter</h6>
                                        <div class="newsletter-form">
                                            <form method="post" action="#">
                                                <div class="form-group clearfix">
                                                    <input type="email" name="email" value="" placeholder="Email Address"
                                                           required="">
                                                    <button type="submit" class="theme-btn"><span
                                                            class="fa fa-envelope"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                            mails.</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="inner clearfix">
                            <div class="copyright">&copy; Copyright 2024 - Seposale Limited</div>
                        </div>
                    </div>
                </div>

            </footer>

        </div>
        <!--End pagewrapper-->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/TweenMax.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script src="{{asset('js/jquery.fancybox.js')}}"></script>
        <script src="{{asset('js/owl.js')}}"></script>
        <script src="{{asset('js/mixitup.js')}}"></script>
        <script src="{{asset('js/appear.js')}}"></script>
        <script src="{{asset('js/wow.js')}}"></script>
        <script src="{{asset('js/jQuery.style.switcher.min.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
        </script>
        <script src="{{asset('js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('js/jarallax.min.js')}}"></script>
        <script src="{{asset('js/custom-script.js')}}"></script>

{{--        <script src="{{asset('js/lang.js')}}"></script>--}}
{{--        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>--}}
        <script src="{{asset('js/color-switcher.js')}}"></script>

        @livewireScripts
        @stack("scripts")
    </body>
</html>
