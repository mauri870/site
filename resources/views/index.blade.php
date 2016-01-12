@extends('layouts.site')
@section('title',trans('home.title'))
@section('description',trans('home.description'))
@section('keywords',trans('home.keywords'))
@section('styles')
@stop
@section('content')
<!-- Home Section start -->
<section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
    <div class="sec-overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-inner">
                        <div class="center-align home-content">
                            <h1 class="home-title"><span id="typer_i_am"></span></h1>
                            <h2 class="home-subtitle">{{ trans('home.init_phrase') }}</h2>
                            <a href="//github.com/mauri870" target="_blank" class="waves-effect btn-flat brand-text">github.com/mauri870 <i class="fa fa-github left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
            <div class="container">
                <div class="row">
                    <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                        <i class="mdi-navigation-expand-more"></i>
                    </a>
                </div>
            </div>
            <!-- .container end -->
        </div>
    </div>
</section>
<!-- #home Section end -->

<!-- About Section start -->
<section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix about-inner">

                <div class="col-sm-12 col-md-4">
                    <div class="person-about">
                        <h3 class="about-subtitle">{{ trans('menu.about') }}</h3>
                        <p>
                            {!! trans('home.resume',['dev_time'=>$dev_time])!!}
                        </p>
                        <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download CV</a>
                    </div>
                </div>
                <!-- about me description -->

                <div class="col-sm-6 col-md-4">
                    <div class="person-img wow fadeIn">
                        <img class="z-depth-1" src="{{ asset('images/me.jpg') }}" alt="">
                    </div>
                </div>
                <!-- about me image -->

                <div class="col-sm-6 col-md-4">
                    <div class="person-info">
                        <h3 class="about-subtitle"></h3>
                        <h5><span>{{ trans('home.name') }}</span> Mauri de Souza Nunes</h5>
                        <h5><span>{{ trans('home.age') }}</span> {{ $my_age }}</h5>
                        <h5><span>{{ trans('home.phone') }}</span> +55 (54) 8118-9792</h5>
                        <h5><span>Email :</span> {{ env('MAIL_ADMIN',null) }}</h5>
                    </div>

                    <div class="about-social">
                        <ul>
                            <li>
                                <a href="https://plus.google.com/+MauriSN870" target="_blank" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://br.linkedin.com/pub/mauri-de-souza-nunes/90/230/b2" target="_blank" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/mauri870" target="_blank" class="btn-floating waves-effect waves-light white"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- about me info -->

            </div>
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #about Section end -->

<!-- Resume Section start -->
<section id="resume" class="scroll-section ">
    <section id="skill" class="root-sec white skill-wrap">
        <div class="sec-overlay">
            <div class="container">
                <div class="row">
                    <div class="clearfix skill-inner">
                        <div class="col-sm-12 col-md-3">
                            <div class="skill-left">
                                <h2 class="title">{{ trans('menu.skills') }}</h2>
                                <p class="regular-text">{{ trans('home.skills_phrase') }}</p><br>
                                <p class="regular-text">Frank Lloyd Wright</p>
                            </div>
                        </div>

                        <!-- skills container -->
                        <div class="col-sm-12 col-md-6 col-md-offset-1">
                            <div class="skill-right">
                                <div id="skillSlider" class="clearfix skill-graph">

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="100%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">Laravel</span>
                                                        <div class="hr-wrap">
                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">100%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="100%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">Lumen</span>
                                                        <div class="hr-wrap">

                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">100%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="95%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">PHP</span>
                                                        <div class="hr-wrap">

                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">95%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="95%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">Linux</span>
                                                        <div class="hr-wrap">
                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">95%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="90%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">Git</span>
                                                        <div class="hr-wrap">
                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">90%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="95%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">CSS</span>
                                                        <div class="hr-wrap">
                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">95%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="100%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">HTML</span>
                                                        <div class="hr-wrap">
                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">100%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                    <div class="single-skill">
                                        <div class="after-li">
                                            <div class="singel-hr">
                                                <div class="singel-hr-inner" data-height="75%">
                                                    <div class="skill-visiable">
                                                        <span class="skill-title">JavaScript/JQuery</span>
                                                        <div class="hr-wrap">

                                                            <div class="hrc"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="skill-count">75%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /single skill-->

                                    <!-- single skill -->
                                </div>
                            </div>
                        </div>
                        <!-- /skills container -->
                    </div>
                </div>
                <div class="btn-wrapp skl-ctrl">
                    <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
                    <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>

    <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
            <div class="row">
                <div class="experience-inner">
                    <div class="col-sm-12 col-md-10 card-box-wrap">
                        <div class="row">
                            <div class="clearfix section-head experience-text">
                                <div class="col-sm-12">
                                    <h2 class="title">{{ trans('menu.experience') }}</h2>
                                    <p class="regular-text"></p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                                            <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <h2 class="left-align card-title-top">{{ trans('home.job_time_1') }}</h2>
                                                        <div class="valign-wrapper card-img-wrap">
                                                            <img class="activator" src="{{ asset('images/experience/digitalSerra.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">{{ trans('home.job_1') }}<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>DigitalSerra Tecnologia Digital</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">{{ trans('home.job_1') }}<i class="mdi-navigation-close right"></i></span>
                                                            <p>DigitalSerra Tecnologia Digital</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            {{ trans('home.job_desc_1') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapp exp-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.education')
</section>
<!-- #resume Section end -->

<!-- Portfolio Section start -->
<section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
    <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title">PORTFOLIO</h2>
                        {{-- Portfolio separators
                        <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                            <li class="active"><a href="#" data-target="*">All</a>
                            </li>
                            <li><a href="#" data-target=".category-1">Art</a>
                            </li>
                            <li><a href="#" data-target=".category-2">Accessories</a>
                            </li>
                            <li><a href="#" data-target=".category-3">Design</a>
                            </li>
                            <li><a href="#" data-target=".category-4">Fashion</a>
                            </li>
                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>

    <div class="portfolio-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="clearfix protfolio-item" id="protfolio-msnry">

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-2 category-4">
                            <a href="http://futuraluz.com.br" target="_blank" class="waves-effect waves-block waves-light" data-image-source="">
                                <div class="protfolio-image">
                                    <img src="{{ asset('images/portfolio/futuraluz.png') }}" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">Futura Luz Led</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-2 category-4">
                            <a href="http://pomzan.com.br" target="_blank" class="waves-effect waves-block waves-light" data-image-source="">
                                <div class="protfolio-image">
                                    <img src="{{ asset('images/portfolio/pomzan.png') }}" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">Pomzan Móveis</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-2 category-4">
                            <a href="http://digitalserra.com.br" target="_blank" class="waves-effect waves-block waves-light" data-image-source="">
                                <div class="protfolio-image">
                                    <img src="{{ asset('images/portfolio/digital-serra.png') }}" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">DigitalSerra Tecnologia Digital</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-2 category-4">
                            <a href="http://mywaycozinha.herokuapp.com" target="_blank" class="waves-effect waves-block waves-light" data-image-source="">
                                <div class="protfolio-image">
                                    <img src="{{ asset('images/portfolio/myway.png') }}" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">My Way Cozinha Universal</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                    </ul>
                    {{--<!-- portfolio load more button-->
                    <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #portfolio Section end -->

<!-- Funfacts Section end -->
<section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
        <div class="container">
            <div class="row">
                <div class="funfact-inner">
                    <div class="col-sm-6 funfact-box">
                        <div class="center-align card-panel white">
                            <div class="feature-box-outer">
                                <div class="funfact-box-inner">
                                    <div class="clearfix ">
                                        <i class="fa fa-github"></i>
                                        <span class="num countNumb">{{ $public_repos }}</span>
                                    </div>
                                    <div class="context">Github Repos</div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./single fun fact box -->
                    <div class="col-sm-6     funfact-box">
                        <div class="center-align card-panel white">
                            <div class="feature-box-outer">
                                <div class="funfact-box-inner">
                                    <div class="clearfix ">
                                        <i class="fa fa-cloud-upload"></i>
                                        <span class="num countNumb">{{ $commits }}</span>
                                    </div>
                                    <div class="context">{{ trans('home.commits') }}</div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./single fun fact box -->
                </div>
            </div>

        </div>  <!-- .container end -->
    </div>
</section>
<!-- #funfacts Section end -->

<!-- Testimonial Section end -->
<section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
    <div class="container">
        <div class="row">
            <div class="testimonial-inner">
                <div class="col-sm-12 col-md-10 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head testimonial-text">
                            <div class="col-sm-12">
                                <h2 class="title">testimonial</h2>
                                <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div id="testimonialSlider" class="clearfix card-element-wrapper">
                                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/client5.png" alt="">
                                                        <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Jonh Smith -</span>
                                                    <a href="#">CEO, Apple Inc</a>
                                                </div>
                                            </div>
                                        </div> <!-- ./single testimonial box -->
                                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/client1.png" alt="">
                                                        <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Jonh Smith -</span>
                                                    <a href="#">CEO, Apple Inc</a>
                                                </div>
                                            </div>
                                        </div> <!-- ./single testimonial box -->
                                        <div class="col-sm-6 single-card-box">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/client2.png" alt="">
                                                        <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Jonh Smith -</span>
                                                    <a href="#">CEO, Apple Inc</a>
                                                </div>
                                            </div>
                                        </div> <!-- ./single testimonial box -->
                                        <div class="col-sm-6 single-card-box">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/client3.png" alt="">
                                                        <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Jonh Smith -</span>
                                                    <a href="#">CEO, Apple Inc</a>
                                                </div>
                                            </div>
                                        </div> <!-- ./single testimonial box -->
                                        <div class="col-sm-6 single-card-box">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/client4.png" alt="">
                                                        <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Jonh Smith -</span>
                                                    <a href="#">CEO, Apple Inc</a>
                                                </div>
                                            </div>
                                        </div> <!-- ./single testimonial box -->
                                    </div> <!-- #testimonialSlider end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapp tmo-ctrl">
                    <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                </div>
            </div>
        </div>
    </div> <!-- ./container end -->
</section>
<!-- #testimonial Section end -->

<!-- Blog Section end -->
<section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
    <div class="container">
        <div class="row">
            <div class="blog-inner">
                <div class="col-sm-12 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head blog-text">
                            <div class="col-sm-10">
                                <h2 class="title">Blog</h2>
                                <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
                            </div>
                        </div>
                        <div class="clearfix card-element-wrapper" id="blog-posts">
                            <article class="col-sm-6 col-md-4 single-card-box single-post">
                                <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="single.html"><img class="activator" src="images/blog1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Awesome Post Title</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                                    </div>
                                </div>
                            </article> <!-- ./single blog post end -->
                            <article class="col-sm-6 col-md-4  single-card-box single-post">
                                <div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="single.html"><img class="activator" src="images/blog2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">An Image Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                                    </div>
                                </div>
                            </article> <!-- ./single blog post end -->
                            <article class="col-sm-6 col-md-4 single-card-box single-post">
                                <div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="single.html"><img class="activator" src="images/blog3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Another Image Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">17</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                                    </div>
                                </div>
                            </article> <!-- ./single blog post end -->
                        </div>
                        <div class="clearfix left-align">
                            <div class="col-sm-12">
                                <a href="blog.html" class="waves-effect waves-light btn-large load-more">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./container -->
</section>
<!-- #blog Section end -->

<!-- Contact Section end -->
<section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
                <div class="col-sm-12 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head contact-text">
                            <div class="col-sm-12">
                                <h2 class="title">{{ trans('home.contact') }}</h2>
                                <p class="regular-text">Cristiano Ziegler Filho, 341, Bento Gonçalves, RS, Brasil</p>
                                <ul class="clearfix contact-info">
                                    <li><a href="tel:+55 54 8118-9792">+55 54 8118-9792</a>
                                    </li>
                                    <li><a href="mailto:{{ env('MAIL_ADMIN') }}">{{ env('MAIL_ADMIN') }}</a>
                                    </li>
                                    <li><a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- contact text end -->

                        {{-- Errors --}}
                        <div class="row">
                            <div class="col-sm-12">
                                @unless($errors->isEmpty())
                                    <ul style="list-style: none;">
                                        @foreach($errors->getMessages() as $error)
                                            <li>
                                                <p class="alert alert-danger">
                                                    <a href="#" class="close" data-dismiss="alert"
                                                       aria-label="close">&times;</a>
                                                    {{ $error[0] }}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endunless
                                @if (Session::has('flash_notification.message'))
                                    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                        {{ Session::get('flash_notification.message') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix contact-form">

                            <!-- Map Start -->
                            <div class="col-sm-7">
                                <div class="map-wrapper">
                                    <div id="map"></div>
                                </div>
                            </div> <!-- Map end -->

                            <!-- Contact Form start -->
                            <div class="col-sm-5">
                                <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                                    {!! Form::open(['url'=>route('home.contact'),'id'=>'contactForm']) !!}
                                        <div class="input-field">
                                            {!! Form::text('name',null,['class'=>'input-box']) !!}
                                            {!! Form::label('name',trans('home.contact_name'),['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field">
                                            {!! Form::text('email',null,['class'=>'input-box']) !!}
                                            {!! Form::label('email','Email',['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field">
                                            {!! Form::text('subject',null,['class'=>'input-box']) !!}
                                            {!! Form::label('subject',trans('home.contact_subject'),['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field textarea-input">
                                            {!! Form::textarea('message',null,['class'=>'materialize-textarea','style'=>'height: 22px;']) !!}
                                            {!! Form::label('message',trans('home.contact_message'),['class'=>'input-label']) !!}
                                        </div>
                                        <div class="input-field submit-wrap clearfix">
                                            <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">{{ trans('home.contact_submit_button') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- ./contact form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./container end -->
    <div class="section-call-to-area">
        <div class="container">
            <div class="row">
                <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
                    <i class="mdi-navigation-expand-less"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- #contact Section end -->
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
                $('#typer_i_am').typer(['PHP', 'Laravel','Lumen Framework']);
        });
    </script>
@stop
