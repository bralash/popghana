<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from oneclickpixels.com/investable/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2016 03:10:57 GMT -->
<head>
    <title>@yield('title') | POP Money Matrix</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="Emmanuel Asaber" /> 
    <link rel="shortcut icon" href="favicon.ico"> 
    <link rel="stylesheet" href="{{URL::asset('assets/css/alertify.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themes/default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/themes/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/styles.css')}}" />
    <!--[if IE]><script src="assets/js/excanvas.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 
<body>


    <!-- Page Wrapper -->
    <div id="page-wrapper" class="page-wrapper">

        <!-- Main Content -->
        <div class="main-content">

            <!-- Navigation Bar -->
            <nav id="main-nav" class="main-nav @yield('color')">

                <div class="container">

                    <!-- Logo Container -->
                    <div class="logo-container">
                        <a href="/" class="logo">
                            <img src="{{URL::asset('img/logo_alt.png')}}">
                        </a>
                    </div>

                    <!-- Right Side Links -->
                    <div class="right-links">

                        <!-- Menu Start -->
                        <ul id="menu" class="menu">

                            <!-- Menu Item -->
                            <li><a href="/home" class="menu-item">Home</a></li>

                            <!-- Menu Item -->
                            <li><a href="/about" class="menu-item">About Us</a></li>

                            <!-- Menu Item -->
                            <li><a href="/contact" class="menu-item">Contact Us</a></li>

                            <!-- Menu Item -->
                            
                            
                            
                            @if(Auth::check())
                                @if(Auth::user()->status == 3)
                                    <li>
                                        <a href="/admin" class="button button-sm button-primary">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="/logout" class="menu-item" style="color: #EC644B;">Logout</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="/profile" class="button button-sm button-primary">Profile</a>
                                    </li>
                                    <li>
                                        <a href="/logout" class="menu-item" style="color: #EC644B;">Logout</a>
                                    </li>
                                @endif
                                
                            @else
                                <li>
                                    <a href="/signin" class="menu-item">Sign In</a>
                                <li>
                                    
                                </li>
                                    <a href="/signup" class="button button-sm button-primary">Sign Up</a>
                                </li>
                            @endif
                            

                        </ul>

                    </div>

                </div>
                
            </nav>
            <!--// Navigation Bar -->

            <!-- hero section -->
            @yield('hero')
            <!-- //hero section -->

            <!-- Services -->
            @yield('services')
            <!-- //Services -->

            <!-- text with image bg -->
            @yield('banner1')
            <!-- //text with image bg -->

            <!-- Pricing Tables -->
            @yield('pricing')
            <!-- //Pricing Tables -->

            <!-- icon boxes -->
            @yield('icon')
            <!-- //icon boxes -->

            <!-- Testimonials -->
            @yield('testimonial')
            <!-- //Testimonials -->

            <!-- blogs -->
            @yield('blog')
            <!-- //blogs -->

            <!-- text with side image -->
            @yield('banner2')
            <!-- //text with side image -->
            @yield('banner3')
            <!-- call to action section -->
            @yield('cta')
            <!-- //call to action section -->

            <!-- footer -->
            <footer class="footer">

                <div class="container">

                    <div class="row">
                        
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-sm-40">

                            <a href="index-2.html" class="logo mb20 logo-bottom">
                                <img src="{{URL::asset('img/logo_alt.png')}}">
                            </a>

                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12 mb-sm-40">

                            <h6>Information</h6>

                            <ul class="list-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Process</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                            
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12 mb-sm-40">

                            <h6>Support</h6>

                            <ul class="list-links">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Prospectus</a></li>
                                <li><a href="#">Investor Relations</a></li>
                            </ul>
                            
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 mb-sm-40">

                            <h6>Subscribe</h6>
                            <p>Sign up for all the latest news, daily stock picks, and investment advice from our team of pros.</p>
                            <form action="/send" method="post" class="newsletter">
                                <input type="email" name="email-address" placeholder="Enter Your Email">
                                <button><i class="fa fa-paper-plane"></i></button>
                            </form>

                        </div>

                        <div class="col-xs-12 sub-footer">
                            <p>Copyright &copy; 2017 POP Money Matrix. All rights reserved. Designed by<a href="http://easaber.com" target="_blank"> easaber</a></p>
                            
                        </div>

                    </div><!-- //row -->
                    
                </div><!-- //container -->
                 
            </footer>
            <!-- //footer -->
            

        </div>
        <!-- //Main Content -->

    </div>
    <!-- // Page Wrapper -->


    <!-- Plugins -->
    <script src="{{URL::asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/alertify.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/modernizr.custom.js')}}"></script>
    <script src="{{URL::asset('assets/js/prettify.js')}}"></script>
    <script src="{{URL::asset('assets/js/classie.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{URL::asset('assets/js/slick.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/all.js')}}"></script>
    <script src="{{URL::asset('assets/js/script.js')}}"></script>

    @yield('script')
</body>
</html>