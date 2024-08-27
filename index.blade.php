@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Our Services</h3>
        <a href="{{route('services.create')}}"><button type="button" class="btn btn-gradient-success btn-fw">Add New</button></a>
    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Services List</h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($services->count())
            <table class="table table-bordered w-100">
                <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th width="30%">Title</th>
                        <th width="30%">Description</th>
                        <th width="20%">Icon</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td width="30%">@php
                                $desc = $service->desc;
                                $words = explode(' ', $desc);
                                $shortDesc = implode(' ', array_slice($words, 0, 5));
                                echo $shortDesc.'....';
                                @endphp</td>
                            <td>
                                @if ($service->image)
                                    <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->title }}" style="width: 100px;">
                                @else
                                    No Icon
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-gradient-info btn-fw">Edit</a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-gradient-danger btn-fw" onclick="return confirm('Are you sure you want to delete this client?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No Data Found.</p>
        @endif
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dgita - Creative Digital Agency Responsive HTML5 Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Start Include All CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/animate.css"/>
        <link rel="stylesheet" href="assets/css/themewar-font.css"/>
        <link rel="stylesheet" href="assets/css/dgita-icon.css"/>
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/settings.css">
        <link rel="stylesheet" href="assets/css/lightslider.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/lightcase.css">

        <link rel="stylesheet" href="assets/css/preset.css"/>
        <link rel="stylesheet" href="assets/css/ignore_for_wp.css"/>
        <link rel="stylesheet" href="assets/css/theme.css"/>
        <link rel="stylesheet" href="assets/css/responsive.css"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/images/favicon.png">
        <!-- Favicon Icon -->
    </head>
    <body>
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->
        
        <!-- Header Start -->
        <header class="header01 isSticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navBar01">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="Dgita"></a>
                            </div>
                            <a href="javascript:void(0)" class="menu_btn"><i class="twi-bars2"></i></a>
                            <nav class="mainMenu">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Banner Version</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li><a href="index2.html">Home Two</a></li>
                                                    <li><a href="index3.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Slider Version</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index4.html">Home One</a></li>
                                                    <li><a href="index5.html">Home Two</a></li>
                                                    <li><a href="index6.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service Page</a></li>
                                            <li><a href="single-service.html">Service Details</a></li>
                                        </ul>
                                    </li>    
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="folio1.html">Portfolio 01</a></li>
                                            <li><a href="folio2.html">Portfolio 02</a></li>
                                            <li><a href="single-folio.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">blogs</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Blog List Views</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog2.html">Left Sidebar</a></li>
                                                    <li><a href="blog1.html">Right Sidebar</a></li>
                                                    <li><a href="blog3.html">Without Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Blog Grid Views</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog5.html">Left Sidebar</a></li>
                                                    <li><a href="blog4.html">Right Sidebar</a></li>
                                                    <li><a href="blog6.html">Without Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li>      
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about2.html">About 02</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Shop Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop1.html">Shop 01</a></li>
                                                    <li><a href="shop2.html">Shop 02</a></li>
                                                    <li><a href="shop3.html">Shop 03</a></li>
                                                    <li><a href="single-product.html">Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Team</a>
                                                <ul class="sub-menu">
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="single-team.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="company.html">Company History</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="accessNav">
                                <a class="phoneBtn" href="tel:+01682648101"><i class="dgita-telephone-call"></i>+ 01682648101</a>
                                <a class="cartBtn" href="javascript:void(0);"><i class="dgita-shopping-bag"></i><span>0</span></a>
                                <a class="dgBtn_two" href="contact.html"><span><i class="dgita-enter"></i>Get Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Hero Banner Start -->
        <section class="heroBanner01">
            <div class="layer_img blinker_anim animated">
                <img src="assets/images/home1/2.png" alt="">
            </div>
            <div class="bMiddle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="bannerContent">
                                <h2 class="animated">We Provide Truly Creative Digital solutions</h2>
                                <p class="animated">We unify the real and digital worlds by creating great experiences that matter to people in their daily lives.</p>
                                <div class="subscribeForm animated">
                                    <form action="#" method="post">
                                        <input type="email" placeholder="Your Email Address" name="email"/>
                                        <i class="dgita-email-2"></i>
                                        <input type="submit" value="Subscribe" name="Subscribe"/>
                                    </form>
                                    <p class="notes">Have an Account Already? <a href="javascript:void(0);">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 animated pnl">
                            <div class="bLayer move_anim">
                                <img src="assets/images/home1/layer.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Banner End -->

        <!-- Services Start -->
        <section class="serviceSection01">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/1.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Web Design & Development</a></h3>
                            <p>There are many variations of Lorem Ipsum available, in face about only a quid blower</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 si2 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/2.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">SEO & Creative Digital Marketing</a></h3>
                            <p>There are many variations of Lorem Ipsum available, in face about only a quid blower</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 si3 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/3.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Idea & Research Business Analytics</a></h3>
                            <p>There are many variations of Lorem Ipsum available, in face about only a quid blower</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!-- About Start -->
        <section class="aboutSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="subTitle">About us</div>
                        <h2 class="secTitle">We Are Proffesional Great Digital Agency!</h2>
                        <p class="secDesc">
                            On the other hand, we denounce with righteous <br>
                            indignation and dislike men who are so beguiled 
                        </p>
                        <ul class="listItem">
                            <li><i class="dgita-check"></i>Research your niche and competitors.</li>
                            <li><i class="dgita-check"></i>Create content that gets your business found online.</li>
                            <li><i class="dgita-check"></i>Increase your online presence.Drive organic traffic and lead generation.</li>
                        </ul>
                        <a class="dgBtn" href="about.html">About Us<i class="dgita-arrow"></i></a>
                    </div>
                    <div class="col-lg-5">
                        <div class="tw-stretch-element-inside-column">
                            <div class="abImg">
                                <img src="assets/images/home1/3.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Work Process Start -->
        <section class="wordProcessSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s3.png" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle">Working Process</div>
                        <h2 class="secTitle">Our Working Process</h2>
                        <p class="secDesc">
                            We’re not a regular agency. We’re a full-service digital marketing agency who<br> focus on targeted and consistent messages
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/1.png" alt=""/>
                            </div>
                            <h3>Discovery</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb2 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/2.png" alt=""/>
                            </div>
                            <h3>Planning</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb3 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/3.png" alt=""/>
                            </div>
                            <h3>Practise</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb4 text-center">
                            <div class="ibbox">
                                <img src="assets/images/process/4.png" alt=""/>
                            </div>
                            <h3>Delivery</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Process End -->

        <!-- Progress Start -->
        <section class="progressSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <h2 class="secTitle">We Develop & Create Digital Future</h2>
                        <p class="secDesc">
                            There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form
                        </p>
                        <div class="single_skill" data-parcent="92">
                            <p>Design</p>
                            <div class="ss_parent"><div class="ss_child"></div><span>92%</span></div>
                        </div>
                        <div class="single_skill" data-parcent="98">
                            <p>Web Development</p>
                            <div class="ss_parent"><div class="ss_child"></div><span>98%</span></div>
                        </div>
                        <div class="single_skill" data-parcent="87">
                            <p>Optimization</p>
                            <div class="ss_parent"><div class="ss_child"></div><span>87%</span></div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6">
                        <div class="processConten clearfix">
                            <div class="funfact fact_01" data-count="100">
                                <h2><span class="counter">100</span>k<i>+</i></h2>
                                <h3>Happy Customer</h3>
                                <p>Happy client our agency</p>
                            </div>
                            <img src="assets/images/home1/4.png" alt="">
                            <div class="funfact fact_01 factBottom" data-count="5200">
                                <h2><span class="counter">5200</span><i>+</i></h2>
                                <h3>World Case done</h3>
                                <p>World Case done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress End -->

        <!-- Services Start -->
        <section class="serviceSection02">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s5.png" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle">What We Provide</div>
                        <h2 class="secTitle">End to end solutions for promoting<br> your business</h2>
                        <p class="secDesc">
                            We’re not a regular agency. We’re a full-service digital marketing agency who<br> focus on targeted and consistent messages
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/4.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Web Design</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/5.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Web Development</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/6.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">SEO & Marketing</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/7.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Digital Marketing</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!-- Testimonial Start -->
        <section class="testimonailSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s6.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="twIcon"><i class="dgita-quote"></i></div>
                        <h2 class="secTitle">Our valuable success clients story</h2>
                        <p class="secDesc">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="secDesc">
                            Occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id 
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonialSlider01 owl-carousel">
                            <div class="testimonialItem">
                                <div class="tsAuthor">
                                    <img src="assets/images/home1/author.png" alt="">
                                    <i class="dgita-quote"></i>
                                </div>
                                <div class="tsContent">
                                    <h5>Ghost Baby</h5>
                                    <p>
                                        SEO increases the quantity and quality of traffic to your website through organic search engine results. 
                                        On-site SEO is the process of making your website search engine friendly.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonialItem">
                                <div class="tsAuthor">
                                    <img src="assets/images/home1/author2.png" alt="">
                                    <i class="dgita-quote"></i>
                                </div>
                                <div class="tsContent">
                                    <h5>William Smith</h5>
                                    <p>
                                        SEO increases the quantity and quality of traffic to your website through organic search engine results. 
                                        On-site SEO is the process of making your website search engine friendly.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Folio Start -->
        <section class="folioSection01">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s7.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle">Case Studies</div>
                        <h2 class="secTitle">Our Latest Case Studies and<br> Success Stories</h2>
                        <p class="secDesc">
                            We’re not a regular agency. We’re a full-service digital marketing agency who<br> focus on targeted and consistent messages
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div class="folioSlider">
                            <div class="folioItem01">
                                <img src="assets/images/folio/1.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/2.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/3.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/1.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/2.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/3.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt123">
                    <div class="col-md-8">
                        <h3 class="ctaTitle">We’re relentlessly focused on getting our clients more sales and hitting their business’s growth goals.</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="dgBtn" href="folio1.html">More Case<i class="dgita-arrow"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Folio End -->

        <!-- Blog Start -->
        <section class="blogSection01">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s8.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="twIcon"><img src="assets/images/home1/6.png" alt=""></div>
                        <h2 class="secTitle">Our Agency Latest<br> News Post</h2>
                        <p class="secDesc">
                            Excepteur sint occaecat cupidatat non proident,<br> sunt in culpa qui officia deserunt mollit anim id<br> est laborum.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="secImg">
                            <img src="assets/images/home1/5.png" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blogItem01">
                            <img src="assets/images/blog/1.jpg" alt=""/>
                            <div class="blogContent">
                                <p><a href="blog1.html">Digital Marketing</a></p>
                                <h3><a href="single-blog.html">How to Optimise and Webinar to Earn Leads</a></h3>
                                <div class="bpmeta"><a href="blog1.html">July 1, 2021</a><a href="blog1.html">02 Comment</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blogItem01">
                            <img src="assets/images/blog/2.jpg" alt=""/>
                            <div class="blogContent">
                                <p><a href="blog1.html">Marketing</a></p>
                                <h3><a href="single-blog.html">How To Scale a Dropshipping Business</a></h3>
                                <div class="bpmeta"><a href="blog1.html">July 1, 2021</a><a href="blog1.html">02 Comment</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blogItem01"><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dgita - Creative Digital Agency Responsive HTML5 Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Start Include All CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/animate.css"/>
        <link rel="stylesheet" href="assets/css/themewar-font.css"/>
        <link rel="stylesheet" href="assets/css/dgita-icon.css"/>
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/settings.css">
        <link rel="stylesheet" href="assets/css/lightslider.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/lightcase.css">

        <link rel="stylesheet" href="assets/css/preset.css"/>
        <link rel="stylesheet" href="assets/css/ignore_for_wp.css"/>
        <link rel="stylesheet" href="assets/css/theme.css"/>
        <link rel="stylesheet" href="assets/css/responsive.css"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/images/favicon.png">
        <!-- Favicon Icon -->
    </head>
    <body>
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->
        
        <!-- Header Start -->
        <header class="header01 isSticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navBar01">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="Dgita"></a>
                            </div>
                            <a href="javascript:void(0)" class="menu_btn"><i class="twi-bars2"></i></a>
                            <nav class="mainMenu">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Banner Version</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li><a href="index2.html">Home Two</a></li>
                                                    <li><a href="index3.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Slider Version</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index4.html">Home One</a></li>
                                                    <li><a href="index5.html">Home Two</a></li>
                                                    <li><a href="index6.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service Page</a></li>
                                            <li><a href="single-service.html">Service Details</a></li>
                                        </ul>
                                    </li>    
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="folio1.html">Portfolio 01</a></li>
                                            <li><a href="folio2.html">Portfolio 02</a></li>
                                            <li><a href="single-folio.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">blogs</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Blog List Views</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog2.html">Left Sidebar</a></li>
                                                    <li><a href="blog1.html">Right Sidebar</a></li>
                                                    <li><a href="blog3.html">Without Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Blog Grid Views</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog5.html">Left Sidebar</a></li>
                                                    <li><a href="blog4.html">Right Sidebar</a></li>
                                                    <li><a href="blog6.html">Without Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li>      
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about2.html">About 02</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Shop Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop1.html">Shop 01</a></li>
                                                    <li><a href="shop2.html">Shop 02</a></li>
                                                    <li><a href="shop3.html">Shop 03</a></li>
                                                    <li><a href="single-product.html">Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">Team</a>
                                                <ul class="sub-menu">
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="single-team.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="company.html">Company History</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="accessNav">
                                <a class="phoneBtn" href="tel:+01682648101"><i class="dgita-telephone-call"></i>+ 01682648101</a>
                                <a class="cartBtn" href="javascript:void(0);"><i class="dgita-shopping-bag"></i><span>0</span></a>
                                <a class="dgBtn_two" href="contact.html"><span><i class="dgita-enter"></i>Get Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Hero Banner Start -->
        <section class="heroBanner01">
            <div class="layer_img blinker_anim animated">
                <img src="assets/images/home1/2.png" alt="">
            </div>
            <div class="bMiddle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="bannerContent">
                                <h2 class="animated">We Provide Truly Creative Digital solutions</h2>
                                <p class="animated">We unify the real and digital worlds by creating great experiences that matter to people in their daily lives.</p>
                                <div class="subscribeForm animated">
                                    <form action="#" method="post">
                                        <input type="email" placeholder="Your Email Address" name="email"/>
                                        <i class="dgita-email-2"></i>
                                        <input type="submit" value="Subscribe" name="Subscribe"/>
                                    </form>
                                    <p class="notes">Have an Account Already? <a href="javascript:void(0);">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 animated pnl">
                            <div class="bLayer move_anim">
                                <img src="assets/images/home1/layer.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Banner End -->

        <!-- Services Start -->
        <section class="serviceSection01">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/1.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Web Design & Development</a></h3>
                            <p>There are many variations of Lorem Ipsum available, in face about only a quid blower</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 si2 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/2.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">SEO & Creative Digital Marketing</a></h3>
                            <p>There are many variations of Lorem Ipsum available, in face about only a quid blower</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 si3 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/3.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Idea & Research Business Analytics</a></h3>
                            <p>There are many variations of Lorem Ipsum available, in face about only a quid blower</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!-- About Start -->
        <section class="aboutSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="subTitle">About us</div>
                        <h2 class="secTitle">We Are Proffesional Great Digital Agency!</h2>
                        <p class="secDesc">
                            On the other hand, we denounce with righteous <br>
                            indignation and dislike men who are so beguiled 
                        </p>
                        <ul class="listItem">
                            <li><i class="dgita-check"></i>Research your niche and competitors.</li>
                            <li><i class="dgita-check"></i>Create content that gets your business found online.</li>
                            <li><i class="dgita-check"></i>Increase your online presence.Drive organic traffic and lead generation.</li>
                        </ul>
                        <a class="dgBtn" href="about.html">About Us<i class="dgita-arrow"></i></a>
                    </div>
                    <div class="col-lg-5">
                        <div class="tw-stretch-element-inside-column">
                            <div class="abImg">
                                <img src="assets/images/home1/3.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Work Process Start -->
        <section class="wordProcessSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s3.png" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle">Working Process</div>
                        <h2 class="secTitle">Our Working Process</h2>
                        <p class="secDesc">
                            We’re not a regular agency. We’re a full-service digital marketing agency who<br> focus on targeted and consistent messages
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/1.png" alt=""/>
                            </div>
                            <h3>Discovery</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb2 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/2.png" alt=""/>
                            </div>
                            <h3>Planning</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb3 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/3.png" alt=""/>
                            </div>
                            <h3>Practise</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb4 text-center">
                            <div class="ibbox">
                                <img src="assets/images/process/4.png" alt=""/>
                            </div>
                            <h3>Delivery</h3>
                            <p>
                                Consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Process End -->

        <!-- Progress Start -->
        <section class="progressSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <h2 class="secTitle">We Develop & Create Digital Future</h2>
                        <p class="secDesc">
                            There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form
                        </p>
                        <div class="single_skill" data-parcent="92">
                            <p>Design</p>
                            <div class="ss_parent"><div class="ss_child"></div><span>92%</span></div>
                        </div>
                        <div class="single_skill" data-parcent="98">
                            <p>Web Development</p>
                            <div class="ss_parent"><div class="ss_child"></div><span>98%</span></div>
                        </div>
                        <div class="single_skill" data-parcent="87">
                            <p>Optimization</p>
                            <div class="ss_parent"><div class="ss_child"></div><span>87%</span></div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6">
                        <div class="processConten clearfix">
                            <div class="funfact fact_01" data-count="100">
                                <h2><span class="counter">100</span>k<i>+</i></h2>
                                <h3>Happy Customer</h3>
                                <p>Happy client our agency</p>
                            </div>
                            <img src="assets/images/home1/4.png" alt="">
                            <div class="funfact fact_01 factBottom" data-count="5200">
                                <h2><span class="counter">5200</span><i>+</i></h2>
                                <h3>World Case done</h3>
                                <p>World Case done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress End -->

        <!-- Services Start -->
        <section class="serviceSection02">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s5.png" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle">What We Provide</div>
                        <h2 class="secTitle">End to end solutions for promoting<br> your business</h2>
                        <p class="secDesc">
                            We’re not a regular agency. We’re a full-service digital marketing agency who<br> focus on targeted and consistent messages
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/4.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Web Design</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/5.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Web Development</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/6.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">SEO & Marketing</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/7.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Digital Marketing</a></h3>
                            <p>Digital marketing reaches targeted audience in an affordable and measurable way</p>
                            <a class="srmore" href="single-service.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!-- Testimonial Start -->
        <section class="testimonailSection01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s6.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="twIcon"><i class="dgita-quote"></i></div>
                        <h2 class="secTitle">Our valuable success clients story</h2>
                        <p class="secDesc">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="secDesc">
                            Occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id 
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonialSlider01 owl-carousel">
                            <div class="testimonialItem">
                                <div class="tsAuthor">
                                    <img src="assets/images/home1/author.png" alt="">
                                    <i class="dgita-quote"></i>
                                </div>
                                <div class="tsContent">
                                    <h5>Ghost Baby</h5>
                                    <p>
                                        SEO increases the quantity and quality of traffic to your website through organic search engine results. 
                                        On-site SEO is the process of making your website search engine friendly.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonialItem">
                                <div class="tsAuthor">
                                    <img src="assets/images/home1/author2.png" alt="">
                                    <i class="dgita-quote"></i>
                                </div>
                                <div class="tsContent">
                                    <h5>William Smith</h5>
                                    <p>
                                        SEO increases the quantity and quality of traffic to your website through organic search engine results. 
                                        On-site SEO is the process of making your website search engine friendly.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Folio Start -->
        <section class="folioSection01">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s7.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle">Case Studies</div>
                        <h2 class="secTitle">Our Latest Case Studies and<br> Success Stories</h2>
                        <p class="secDesc">
                            We’re not a regular agency. We’re a full-service digital marketing agency who<br> focus on targeted and consistent messages
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 noPadding">
                        <div class="folioSlider">
                            <div class="folioItem01">
                                <img src="assets/images/folio/1.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/2.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/3.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/1.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/2.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                            <div class="folioItem01">
                                <img src="assets/images/folio/3.jpg" alt="">
                                <div class="folioHover">
                                    <p><a href="folio1.html">Creative Design</a></p>
                                    <h3><a href="single-folio.html">Digital marketing work</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt123">
                    <div class="col-md-8">
                        <h3 class="ctaTitle">We’re relentlessly focused on getting our clients more sales and hitting their business’s growth goals.</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a class="dgBtn" href="folio1.html">More Case<i class="dgita-arrow"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Folio End -->

        <!-- Blog Start -->
        <section class="blogSection01">
            <div class="SecLayerimg move_anim2">
                <img src="assets/images/bg/s8.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="twIcon"><img src="assets/images/home1/6.png" alt=""></div>
                        <h2 class="secTitle">Our Agency Latest<br> News Post</h2>
                        <p class="secDesc">
                            Excepteur sint occaecat cupidatat non proident,<br> sunt in culpa qui officia deserunt mollit anim id<br> est laborum.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="secImg">
                            <img src="assets/images/home1/5.png" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blogItem01">
                            <img src="assets/images/blog/1.jpg" alt=""/>
                            <div class="blogContent">
                                <p><a href="blog1.html">Digital Marketing</a></p>
                                <h3><a href="single-blog.html">How to Optimise and Webinar to Earn Leads</a></h3>
                                <div class="bpmeta"><a href="blog1.html">July 1, 2021</a><a href="blog1.html">02 Comment</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blogItem01">
                            <img src="assets/images/blog/2.jpg" alt=""/>
                            <div class="blogContent">
                                <p><a href="blog1.html">Marketing</a></p>
                                <h3><a href="single-blog.html">How To Scale a Dropshipping Business</a></h3>
                                <div class="bpmeta"><a href="blog1.html">July 1, 2021</a><a href="blog1.html">02 Comment</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blogItem01">
                            <img src="assets/images/blog/3.jpg" alt=""/>
                            <div class="blogContent">
                                <p><a href="blog1.html">Development</a></p>
                                <h3><a href="single-blog.html">How to Create a Winning WordPress Marketing Strategy for 2021</a></h3>
                                <div class="bpmeta"><a href="blog1.html">July 1, 2021</a><a href="blog1.html">02 Comment</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->

        <!-- Footer Section -->
        <footer class="footer_01">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s9.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget">
                            <div class="aboutWidget">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""/></a>
                                <p>1864 Lancaster Court Road Poughkeepsie, CA 12601</p>
                                <h4>Newsletter</h4>
                                <form action="#" method="post">
                                    <div class="mc4wp-form-fields">
                                        <input type="email" name="EMAIL" placeholder="Email Address">
                                        <button type="submit"><i class="dgita-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 offset-xl-1 col-lg-3 ">
                        <div class="widget">
                            <h3 class="widget_title">About Company</h3>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team Member</a></li>
                                <li><a href="folio1.html">Our Portfolio</a></li>
                                <li><a href="blog1.html">News</a></li>
                                <li><a href="company.html">Company History</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="widget">
                            <h3 class="widget_title">Our Services</h3>
                            <ul>
                                <li><a href="single-service.html">Digital Solution</a></li>
                                <li><a href="single-service.html">Lifecycle marketing</a></li>
                                <li><a href="single-service.html">Sass development</a></li>
                                <li><a href="single-service.html">App development</a></li>
                                <li><a href="single-service.html">Digital agency</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget contact_widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="contact_info">
                                <p>dgita.info@gmail.com</p>
                                <p>+88 016 826 48 11</p>
                                <div class="abSocial">
                                    <a href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                                    <a href="javascript:void(0);"><i class="twi-linkedin-in"></i></a>
                                    <a href="javascript:void(0);"><i class="twi-instagram"></i></a>
                                    <a href="javascript:void(0);"><i class="twi-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright 2021, All Right Reserved</p>
                            <ul>
                                <li><a href="javascript:void(0);">Privacy</a></li>
                                <li><a href="javascript:void(0);">Policy</a></li>
                                <li><a href="javascript:void(0);">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section -->

        <!-- Bact To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="twi-arrow-to-top1"></i></a>
        <!-- Bact To Top -->

        <!-- Start Include All JS -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.shuffle.min.js"></script>
        <script src="assets/js/lightslider.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/lightcase.js"></script>

        <!-- Slider Revolution Main Files -->
        <script src="assets/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Slider Revolution Extension -->    
        <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/js/extensions/revolution.extension.video.min.js"></script>

        <script src="assets/js/theme.js"></script>
        <!-- End Include All JS -->
    </body>
</html>