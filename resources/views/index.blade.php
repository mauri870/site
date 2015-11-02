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
                            <a href="index.html#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
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
                    <a href="index.html#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
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
                                                            <img class="activator" src="images/ghost_rider.jpg" alt="">
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

    <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
            <div class="row">
                <div class="education-inner">
                    <div class="col-sm-12 col-md-10 card-box-wrap">
                        <div class="row">
                            <div class="clearfix section-head education-text">
                                <div class="col-sm-12">
                                    <h2 class="title">{{ trans('menu.education') }}</h2>
                                    <p class="regular-text"></p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <div id="educationSlider" class="clearfix card-element-wrapper">

                                            <!-- single education -->
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <h2 class="left-align card-title-top">2013</h2>
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="{{ asset('images/grad-cap.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">{{ trans('home.educ_course_1') }}<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>Ftec</p>
                                                    </div>
                                                    <!-- Reveal content-->
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">{{ trans('home.educ_course_1') }}<i class="mdi-navigation-close right"></i></span>
                                                            <p>Ftec</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            {{ trans('home.educ_course_desc_1') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single education end -->

                                            <!-- single education -->
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <h2 class="left-align card-title-top">2015</h2>
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="{{ asset('images/cert.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">{{ trans('home.educ_course_2') }}<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>School of Net Internet Sistemas e Tecnologia Ltda</p>
                                                    </div>
                                                    <!-- Reveal content-->
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">{{ trans('home.educ_course_2') }}<i class="mdi-navigation-close right"></i></span>
                                                            <p>School of Net Internet Sistemas e Tecnologia Ltda</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            {{ trans('home.educ_course_desc_2') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single education end -->

                                            <!-- single education -->
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <h2 class="left-align card-title-top">2015</h2>
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="{{ asset('images/cert.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">{{ trans('home.educ_course_3') }}<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>School of Net Internet Sistemas e Tecnologia Ltda</p>
                                                    </div>
                                                    <!-- Reveal content-->
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">{{ trans('home.educ_course_3') }}<i class="mdi-navigation-close right"></i></span>
                                                            <p>School of Net Internet Sistemas e Tecnologia Ltda</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            {{ trans('home.educ_course_desc_3') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single education end -->

                                            <!-- single education -->
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <h2 class="left-align card-title-top">2015</h2>
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="{{ asset('images/cert.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">{{ trans('home.educ_course_4') }}<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>School of Net Internet Sistemas e Tecnologia Ltda</p>
                                                    </div>
                                                    <!-- Reveal content-->
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">{{ trans('home.educ_course_4') }}<i class="mdi-navigation-close right"></i></span>
                                                            <p>School of Net Internet Sistemas e Tecnologia Ltda</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            {{ trans('home.educ_course_desc_4') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single education end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapp edu-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                            <li class="active"><a href="index.html#" data-target="*">All</a>
                            </li>
                            <li><a href="index.html#" data-target=".category-1">Art</a>
                            </li>
                            <li><a href="index.html#" data-target=".category-2">Accessories</a>
                            </li>
                            <li><a href="index.html#" data-target=".category-3">Design</a>
                            </li>
                            <li><a href="index.html#" data-target=".category-4">Fashion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <div id="portfolioModal" class="modal white">
        <div class="model-img"></div>
        <div class="modal-content">
            <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
            <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
        </div>

        <div class="modal-footer">
            <a href="index.html#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
            <a href="index.html#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
        </div>
    </div>

    <div class="portfolio-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="clearfix protfolio-item" id="protfolio-msnry">

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-1 category-3">
                            <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#"> <!-- Portfolio pop-up content-->
                                <div class="protfolio-image">
                                    <img src="images/portfolio/pf1.jpg" alt="portfolio"> <!-- portfolio thumbnail-->
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">item name</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-2 category-1">
                            <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                <div class="protfolio-image">
                                    <img src="images/portfolio/pf2.jpg" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">item name</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-1 category-2">
                            <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                <div class="protfolio-image">
                                    <img src="images/portfolio/pf3.jpg" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">item name</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-3">
                            <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                <div class="protfolio-image">
                                    <img src="images/portfolio/pf4.jpg" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">item name</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-1 category-3 category-4">
                            <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                <div class="protfolio-image">
                                    <img src="images/portfolio/pf5.jpg" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">item name</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                        <!-- Single Portfolio-->
                        <li class="single-port-item category-2 category-4">
                            <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                <div class="protfolio-image">
                                    <img src="images/portfolio/pf6.jpg" alt="portfolio">
                                    <div class="protfolio-content waves-effect waves-block waves-light">
                                        <div class="protfolio-content__inner">
                                            <h2 class="p-title">item name</h2>
                                        </div>
                                    </div>
                                    <div class="p-overlay"></div>
                                </div>
                            </a>
                        </li>
                        <!--/ single portfolio -->

                    </ul>
                    <!-- portfolio load more button-->
                    <a id="portfolio-item-loader" href="index.html#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #portfolio Section end -->

<!-- Team Section end -->
<section id="team" class="scroll-section root-sec brand-bg padd-tb-120 team-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix team-inner">
                <div class="col-sm-12 col-md-10 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head team-text">
                            <div class="col-sm-12">
                                <h2 class="title">our team</h2>
                                <p class="regular-text">Our Team combines a unique combination of creativity, experience, knowledge but most of all a shared 'can do' attitude to help clients get the very best support, advice and project management to achieve business goals.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div id="teamSlider" class="clearfix card-element-wrapper">
                                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/t1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>UX UI Designer</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-close right"></i></span>
                                                        <p>UX UI Designer</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> <!-- single team member -->
                                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/t2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>Front End Developer</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                        <p>Front End Developer</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> <!-- single team member -->
                                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/t3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>Front End Developer</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                        <p>Front End Developer</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> <!-- single team member -->
                                        <div class="col-sm-4 single-card-box">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/t4.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>Front End Developer</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                        <p>Front End Developer</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> <!-- single team member -->
                                        <div class="col-sm-4 single-card-box">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/t5.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>Team Manager</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                                        <p>Team Manager</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> <!-- single team member -->
                                        <div class="col-sm-4 single-card-box">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <div class="card-img-wrap">
                                                        <img class="activator" src="images/t6.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                                                    <p>Team Manager</p>
                                                </div>
                                                <div class="card-reveal">
                                                    <div class="rev-title-wrap">
                                                        <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                                        <p>Team Manager</p>
                                                    </div>
                                                    <p class="rev-content">
                                                        Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> <!-- single team member -->
                                    </div> <!-- #teamSlider end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapp tmu-ctrl">
                    <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                </div>
            </div>
        </div>

    </div> <!-- .container -->
</section>
<!-- #team Section end -->

<!-- Funfacts Section end -->
<section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
        <div class="container">
            <div class="row">
                <div class="funfact-inner">
                    <div class="col-sm-4 funfact-box">
                        <div class="center-align card-panel white">
                            <div class="feature-box-outer">
                                <div class="funfact-box-inner">
                                    <div class="clearfix ">
                                        <i class="mdi-editor-insert-emoticon"></i>
                                        <span class="num countNumb">150</span>
                                    </div>
                                    <div class="context">Happy clients</div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./single fun fact box -->
                    <div class="col-sm-4 funfact-box">
                        <div class="center-align card-panel white">
                            <div class="feature-box-outer">
                                <div class="funfact-box-inner">
                                    <div class="clearfix ">
                                        <i class="mdi-action-wallet-travel"></i>
                                        <span class="num countNumb">230</span>
                                    </div>
                                    <div class="context">Project Completed</div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./single fun fact box -->
                    <div class="col-sm-4 funfact-box">
                        <div class="center-align card-panel white">
                            <div class="feature-box-outer">
                                <div class="funfact-box-inner">
                                    <div class="clearfix ">
                                        <i class="mdi-action-wallet-giftcard"></i>
                                        <span class="num countNumb">79</span>
                                    </div>
                                    <div class="context">Award Won</div>
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
                                                    <a href="index.html#">CEO, Apple Inc</a>
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
                                                    <a href="index.html#">CEO, Apple Inc</a>
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
                                                    <a href="index.html#">CEO, Apple Inc</a>
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
                                                    <a href="index.html#">CEO, Apple Inc</a>
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
                                                    <a href="index.html#">CEO, Apple Inc</a>
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
                                        <a href="index.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>
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
                                        <a href="index.html#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
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
                                        <a href="index.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">17</span></a>
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
                                <h2 class="title">Contact</h2>
                                <p class="regular-text">Collins Street West Victoria 8007 Australia</p>
                                <ul class="clearfix contact-info">
                                    <li><a href="index.html">+880 1234 567890</a>
                                    </li>
                                    <li><a href="index.html">support@website.net</a>
                                    </li>
                                    <li><a href="index.html">www.website.net</a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- contact text end -->

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
                                    <form action="index.html#" id="contactForm" novalidate>
                                        <div class="input-field">
                                            <input id="contact_name" type="text" name="contactName" class="validate input-box">
                                            <label for="contact_name" class="input-label">Name</label>
                                        </div>
                                        <div class="input-field">
                                            <input id="email" type="email" name="contactEmail" class="validate input-box">
                                            <label for="email" class="input-label">Email</label>
                                        </div>
                                        <div class="input-field">
                                            <input id="subject" type="text" name="contactSubject" class="validate input-box">
                                            <label for="subject" class="input-label">Subject</label>
                                        </div>
                                        <div class="input-field textarea-input">
                                            <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                                            <label for="textarea1" class="input-label">Message</label>
                                        </div>
                                        <div class="input-field submit-wrap clearfix">
                                            <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                                            <div class="right form-loader-area">
                                                <svg class="circular size-20" height="20" width="20">
                                                    <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                                                </svg>
                                            </div>
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
                <a href="index.html#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
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
                $('#typer_i_am').typer(['PHP', 'Laravel','Lumen Framework', 'github.com/mauri870']);
        });
    </script>
@stop
