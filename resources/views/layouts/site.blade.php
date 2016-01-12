<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Mauri de Souza Nunes>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" >

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" media="screen,projection" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}" media="screen,projection" />

    <link rel="stylesheet" href="{{ asset('libs/owl-carousel/owl.carousel.css') }}" media="screen,projection" />
    <link rel="stylesheet" href="{{ asset('libs/owl-carousel/owl.transitions.css') }}" media="screen,projection" />
    <link rel="stylesheet" href="{{ asset('libs/owl-carousel/owl.theme.css') }}" media="screen,projection" />

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Choose your default colors -->
    <link rel="stylesheet" href="{{ asset('css/colors/color1.css') }}">
    @yield('styles')

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div class="loader">
        <svg class="circle-loader" height="50" width="50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
        </svg>
    </div>
</div><!--preloader end-->

<!-- Main Container -->
<main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nav-inner">
                        <nav class="primary-nav">
                            <div class="clearfix nav-wrapper">
                                <a href="{{ route('home.index') }}" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                                </a>
                                <a href="{{ route('home.index') }}" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                <ul class="right static-menu">
                                    <li class="search-form-li">
                                        <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                        <div class="search-form-wrap hide">
                                            <form action="index.html#" class="">
                                                <input type="search" class="search">
                                                <button type="submit"><i class="mdi-action-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-button blog-submenu-init" href="" data-activates="dropdown1">
                                            <i class="fa fa-language"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="inline-menu side-nav" id="mobile-demo">

                                    <!-- Mini Profile // only visible in Tab and Mobile -->
                                    <li class="mobile-profile">
                                        <div class="profile-inner">
                                            <div class="pp-container">
                                                <img src="images/me.jpg" alt="">
                                            </div>
                                            <h3>Mauri de Souza Nunes</h3>
                                            <h5>{{ trans('home.init_phrase') }}</h5>
                                        </div>
                                    </li><!-- mini profile end-->


                                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>{{ trans('menu.about') }}</a>
                                    </li>
                                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>{{ trans('menu.skills') }}</a>
                                    </li>
                                    <li><a href="#education" data-section="#education" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>{{ trans('menu.education') }}</a>
                                    </li>
                                    <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                                    </li>
                                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>{{ trans('menu.contact') }}</a>
                                    </li>
                                </ul>
                                <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                                {{{$properties['native'] }}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    @yield('content')

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix footer-inner">
                        <ul class="left social-icons">
                            <li>
                                <a href="https://plus.google.com/+MauriSN870" target="_blank" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://br.linkedin.com/pub/mauri-de-souza-nunes/90/230/b2" target="_blank" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/mauri870" target="_blank" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Github"><i class="fa fa-github"></i></a>
                            </li>
                        </ul> <!-- ./social icons end -->
                        <div class="right copyright">
                            <p>Mauri870 &copy; {{ trans('home.rights') }}</p><br>
                            <p>Theme by MaterialX &copy;</p>
                            <p>{{ trans('home.dev_by') }} <a target="_blank" href="http://laravel.com"><span class="label label-default" style="background-color: #F3645E">Laravel Framework</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

</main>
<!-- Main Container end-->


<!-- JavaScripts -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/detectmobilebrowser.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/waypoints.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('js/gmaps.js') }}"></script>
<script src="{{ asset('libs/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
<script src="{{ asset('libs/jwplayer/jwplayer.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/typed.js') }}"></script>
@yield('scripts')
</body>

</html>