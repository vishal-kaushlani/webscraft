@extends('frontend.layouts.main')
@section('content')


        <!-- Page Banner Start -->
        <section class="pageBanner" style="background-image: url(assets/images/bg/banner.png);">
            <div class="vmiddle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <h2 class="banner-title">Contact Us</h2>
                            <p class="banner-desc">Our versatile team is built of designers, developers and digital marketers who all bring unique experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Blog Start -->
        <section class="contactPage">
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s34.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="conFormWrapper">
                            <div class="row">
                                {{-- <div class="col-md-7">
                                    <h2>Get in touch!</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. <br>Ut blandit arcu in pretium.</p>
                                    <div class="contact_form">
                                        <form action="#" method="post" class="row" id="contact_form">
                                            <div class="col-md-6">
                                                <input class="required" type="text" name="con_name" id="con_name" placeholder="Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input class="required" type="email" name="con_email" id="con_email" placeholder="E-mail">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" name="con_phone" id="con_phone" placeholder="Phone">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="con_subject" id="con_subject" placeholder="Subject">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="required" name="con_message" id="con_message" placeholder="Your Message here"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="dgBtn">Submit Message</button>
                                                <div class="con_message"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                                <div class="col-md-12 row">
                                    <h3>Feel free to ask questions or share your comments with us.</h3>
                                    <div class="contactInfo col-md-6">
                                        <img src="assets/images/c1.png" alt=""/>
                                        <h4>Phone</h4>
                                        <p>
                                            Call : +919660122070<br>
                                            Fax : 01460 222539<br>
                                            Email : webscraft@gmail.com
                                        </p>
                                    </div>
                                    <div class="contactInfo col-md-6">
                                        <img src="assets/images/c2.png" alt=""/>
                                        <h4>Address</h4>
                                        <p>
                                            Sector 1, Malviya Nagar,<br>
                                            Jaipur, Rajasthan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->

        @endsection
