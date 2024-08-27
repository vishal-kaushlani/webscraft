@extends('frontend.layouts.main')
@section('content')



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
                            <p>We specialize in creating visually captivating and highly functional websites that perfectly align with your business goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 si2 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/2.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">SEO & Creative Digital Marketing</a></h3>
                            <p>Elevate your online presence with our expert SEO and creative digital marketing services.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceItem01 si3 text-center">
                            <div class="serImg">
                                <img src="assets/images/service/3.png" alt=""/>
                            </div>
                            <h3><a href="single-service.html">Idea & Research Business Analytics</a></h3>
                            <p>Unlock the potential of your business with our comprehensive idea and research business analytics services.</p>
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
                        <a class="dgBtn" href="{{route('about')}}">About Us<i class="dgita-arrow"></i></a>
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
                            At our core, we believe in a structured approach to ensure excellence at every step. Our process is designed to be transparent and collaborative, guiding you from initial concept to final delivery.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/1.png" alt="Discovery"/>
                            </div>
                            <h3>Discovery</h3>
                            <p>
                                Understanding your needs through research and initial consultations.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb2 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/2.png" alt="Planning"/>
                            </div>
                            <h3>Planning</h3>
                            <p>
                                Creating a detailed plan to achieve your goals effectively.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb3 text-center">
                            <div class="ibborder"><img src="assets/images/process/border.png" alt=""/></div>
                            <div class="ibbox">
                                <img src="assets/images/process/3.png" alt="Execution"/>
                            </div>
                            <h3>Execution</h3>
                            <p>
                                Implementing the plan with precision and creativity.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="iconbox01 pb4 text-center">
                            <div class="ibbox">
                                <img src="assets/images/process/4.png" alt="Delivery"/>
                            </div>
                            <h3>Delivery</h3>
                            <p>
                                Providing the final product and ensuring your satisfaction.
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
                        <h2 class="secTitle">We Develop & Create Digital Futures</h2>
                        <p class="secDesc">
                            We craft innovative digital solutions that shape and enhance your online presence, driving your success.
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
                                <img src="assets/images/service/4.png" alt="Web Design"/>
                            </div>
                            <h3><a href="single-service.html">Web Design</a></h3>
                            <p>Crafting visually engaging and user-friendly websites that reflect your brand identity.</p>
                            {{-- <a class="srmore" href="single-service.html">Learn More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/5.png" alt="Web Development"/>
                            </div>
                            <h3><a href="single-service.html">Web Development</a></h3>
                            <p>Building robust, scalable websites with the latest technologies to drive your business forward.</p>
                            {{-- <a class="srmore" href="single-service.html">Learn More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/6.png" alt="SEO & Marketing"/>
                            </div>
                            <h3><a href="single-service.html">SEO & Marketing</a></h3>
                            <p>Enhancing your online visibility with effective SEO strategies and targeted marketing campaigns.</p>
                            {{-- <a class="srmore" href="single-service.html">Learn More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="serviceItem02">
                            <div class="serImg">
                                <img src="assets/images/service/7.png" alt="Digital Marketing"/>
                            </div>
                            <h3><a href="single-service.html">Digital Marketing</a></h3>
                            <p>Reaching your audience through innovative digital strategies and measurable marketing solutions.</p>
                            {{-- <a class="srmore" href="single-service.html">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!-- Testimonial Start -->
        {{-- <section class="testimonailSection01">
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
        </section> --}}
        <!-- Blog End -->


        @endsection
