<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Webscraft - Creative Digital Agency</title>
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
                                <a href="{{route('home')}}"><img src="assets/images/logo.png" alt="Dgita"></a>
                            </div>
                            <a href="javascript:void(0)" class="menu_btn"><i class="twi-bars2"></i></a>
                            <nav class="mainMenu">
                                <ul>
                                    <li class="">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('services')}}">Services</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('portfolio')}}">Portfolio</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                    {{-- <li class="menu-item-has-children">
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
                                    </li> --}}
                                    {{-- <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('about')}}">About 01</a></li>
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
                                    </li> --}}
                                </ul>
                            </nav>
                            <div class="accessNav">
                                <a class="phoneBtn" href="tel:+01682648101"><i class="dgita-telephone-call"></i>+919660122070</a>
                                {{-- <a class="cartBtn" href="javascript:void(0);"><i class="dgita-shopping-bag"></i><span>0</span></a> --}}
                                {{-- <a class="dgBtn_two" href="{{route('contact')}}"><span><i class="dgita-enter"></i>Get Quote</span></a> --}}
                                <a  class ="dgBtn_two" href="https://wa.me/919660122070" target="_blank"><span><i class="dgita-enter"></i>WhatsApp</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')


        <!-- Footer Section -->
        <footer class="footer_01">
            <div class="whatsapp-floating-button">
                <a href="https://wa.me/919660122070" target="_blank">
                    <img src="{{asset('assets/images/whatsapp.png')}}" alt="WhatsApp Image">
                </a>
            </div>
            <div class="SecLayerimg move_anim">
                <img src="assets/images/bg/s9.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget">
                            <div class="aboutWidget">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""/></a>
                                <p>Sector 1, Malviya Nagar, Jaipur, 302017</p>
                                {{-- <h4>Newsletter</h4>
                                <form action="#" method="post">
                                    <div class="mc4wp-form-fields">
                                        <input type="email" disabled name="EMAIL" placeholder="Email Address">
                                        <button type="submit" disabled><i class="dgita-arrow"></i></button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 offset-xl-1 col-lg-3 ">
                        <div class="widget">
                            <h3 class="widget_title">About Company</h3>
                            <ul>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                {{-- <li><a href="team.html">Team Member</a></li>
                                <li><a href="folio1.html">Our Portfolio</a></li>
                                <li><a href="blog1.html">News</a></li>
                                <li><a href="company.html">Company History</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="widget">
                            <h3 class="widget_title">Our Services</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Digital Solution</a></li>
                                <li><a href="javascript:void(0)">Lifecycle marketing</a></li>
                                <li><a href="javascript:void(0)">Sass development</a></li>
                                <li><a href="javascript:void(0)">App development</a></li>
                                <li><a href="javascript:void(0)">Digital agency</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="widget contact_widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="contact_info">
                                <p>Webscraft.info@gmail.com</p>
                                <p>+91 9660122070</p>
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
                            <p>Copyright 2024, All Right Reserved</p>
                            {{-- <ul>
                                <li><a href="javascript:void(0);">Privacy</a></li>
                                <li><a href="javascript:void(0);">Policy</a></li>
                                <li><a href="javascript:void(0);">Terms of Service</a></li>
                            </ul> --}}
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
        <!-- Header End -->
