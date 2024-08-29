
@extends('frontend.layouts.main')
@section('content')
        <section class="pageBanner" style="background-image: url(assets/images/bg/banner.png);">
            <div class="vmiddle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <h2 class="banner-title">Portfolio</h2>
                            <p class="banner-desc">Our versatile team is built of designers, developers and digital marketers who all bring unique experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Portfolio Start -->
        <section class="folioPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filter_menu shaff_filter text-center clearfix">
                            <li class="active" data-group="all">All</li>
                            <li data-group="web_design">Web Design</li>
                            <li data-group="web_development">Web Development</li>
                            <li data-group="digital_marketing">Digital Marketing</li>
                            <li data-group="mobile_app">Mobile App</li>
                        </ul>
                    </div>
                </div>
                <div class="row grid_row" id="shaff_grid">
                    <div class="col-lg-4 col-md-6 shaff_item" data-groups='["all", "web_development", "mobile_app"]'>
                        <div class="folioItem01 fi01">
                            <a href="https://grxfashion.in/" target="_blank">
                                <img src="assets/images/folio/grx.png" alt="">
                                <div class="folioHover">
                                    <p>Ecommerce</a></p>
                                    <h3>GRX Fashions</a></h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 shaff_item" data-groups='["all", "web_development", "mobile_app"]'>
                        <div class="folioItem01 fi01">
                            <a href="https://svm.webscraft.online/" target="_blank">
                                <img src="assets/images/folio/svm.png" alt="">
                                <div class="folioHover">
                                    <p>School / Education</a></p>
                                    <h3>SVM School</a></h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio End -->

        <!-- Progress Start -->
        <section class="flpSec">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s30.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-9">
                        <div class="subTitle">webscarft@gmail.com</div>
                        <h2 class="secTitle">Get effective solution<br> for your business</h2>
                        <p class="secDesc">
                            We deliver custom solutions that drive success.<br> With our expertise, your business will stand out and thrive.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-3 text-center">
                        <a class="dgBtn" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress End -->
        @endsection
