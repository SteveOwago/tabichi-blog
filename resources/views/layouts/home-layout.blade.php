<!DOCTYPE html>
<html lang="en">

<!--tabichi/about.html  30 Nov 2019 03:45:56 GMT -->

<head>
    <meta charset="utf-8">
    <title>Peter Tabichi Foundation</title>
    <!-- Stylesheets -->
    <link href="{{ asset('tabichi/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('tabichi/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('tabichi/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('tabichi/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('tabichi/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->

        <header class="main-header header-style-one">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <div class="top-left clearfix">
                        <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a
                                href="tel:1800-456-7890" class="number">1234567890</a></div>

                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container">
                    <div class="auto-container clearfix">
                        <!--Info-->
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('tabichi.index') }}"><img
                                        src="{{ asset('tabichi/images/tabichi-logo.png') }}" title=""></a></div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Togg le Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-1"></span>
                                    </button>
                                </div>


                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        @auth<li><a href="{{ route('dashboard.home') }}">Dashboard</a></li>@endauth
                                        <li class="dropdown"><a href="{{ route('tabichi.index') }}">Home</a> </li>
                                        <li class="current dropdown"><a href="{{ route('tabichi.about') }}">About
                                                us</a>
                                            <ul>
                                                <li><a href="{{ route('tabichi.about') }}">Our Introduction</a></li>
                                                <li><a href="{{ route('tabichi.about') }}">Our Team</a></li>
                                                <li><a href="{{ route('tabichi.testimonials') }}">Testimonials</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ route('tabichi.story') }}">Tabichi's
                                                Story</a>
                                        </li>
                                        <li class="dropdown"><a href="{{ route('tabichi.blog') }}">News</a></li>
                                        <li><a href="{{ route('tabichi.contact') }}">Contact</a></li>
                                        @auth
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>

                                            </li>
                                        @endauth
                                      
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img
                                src="{{ asset('tabichi/images/tabichi-logo.png') }}" title=""></a></div>
                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>

        <!-- End Main Header -->
        <div>@yield('content')</div>
        <div>@yield('profile-details')</div>
        <div>@yield('articles')</div>

        <!-- End News Section -->

        <!-- Call To Action Section -->
        <section class="call-to-action-section"
            style="background-image: url('{{ asset('tabichi/images/background/1.jpg') }}');">
            <div class="auto-container">
                <h2>Tabichi Foundation</h2>
                <div class="text">Get In Touch <br> We have you in our Hearts.</div>
                <a href="{{ route('tabichi.contact') }} " class="theme-btn btn-style-two"><span class="txt">contact
                        us</span></a>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!--Main Footer-->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="{{ route('tabichi.index') }}"><img
                                                    src="{{ asset('tabichi/images/tabichi-logo.png') }}" /></a>
                                        </div>
                                        <div class="text">Peter Tabichi Foundation</div>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                        </ul>
                                         <div style="padding-top:10%;"> @guest<li><a href="{{ route('login') }}">Login</a></li>@endguest</div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Quick links</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="{{ route('tabichi.story') }}">About Peter</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms & Conditionis</a></li>
                                                <li><a href="#">Faq</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <h2>Contact Info</h2>
                                        <div class="widget-content">
                                            <a href="tel:1800-574-9687" class="contact-number">123456789</a>
                                            <ul>
                                                <li>Nakuru</li>
                                                <li>Email :<a href="mailto:info@petertabichi.org">
                                                        info@petertabichi.org</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                {{-- <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h2>Newsletter</h2>
                                        <div class="text">Get Current Updates</div>
                                        <!-- Newsletter Form -->
                                        <div class="newsletter-form">
                                            <form method="post">
                                                <div class="form-group">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Enter your email address" required>
                                                    <button type="submit" class="theme-btn btn-style-one"><span
                                                            class="txt">Subscribe</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>

                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="footer-bottom clearfix">
                    <div class="pull-left">
                        <div class="copyright"><a href="#">Peter Tabichi Foundation</a></div>
                    </div>
                    <div class="pull-right">
                        <a href="#">Peter Tabichi Foundation</a>
                    </div>
                </div>

            </div>
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


    <!--Scroll to top-->
    <script src="{{ asset('tabichi/js/jquery.js') }}"></script>
    <script src="{{ asset('tabichi/js/popper.min.js') }}"></script>
    <script src="{{ asset('tabichi/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('tabichi/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tabichi/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('tabichi/js/isotope.js') }}"></script>
    <script src="{{ asset('tabichi/js/owl.js') }}"></script>
    <script src="{{ asset('tabichi/js/wow.js') }}"></script>
    <script src="{{ asset('tabichi/js/appear.js') }}"></script>
    <script src="{{ asset('tabichi/js/scrollbar.js') }}"></script>
    <script src="{{ asset('tabichi/js/script.js') }}"></script>
</body>

<!--tabichi/  30 Nov 2019 03:45:45 GMT -->

</html>
