<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>Welcome, {{Auth::user()->username}}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="Baljit Singh" /> 
    <link rel="shortcut icon" href="favicon.ico"> 
    <link rel="stylesheet" href="assets/css/styles.css" />
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
        <section class="main-content">

            <!-- Navigation Bar -->
            
            <!--// Navigation Bar -->

            <!-- Section -->
            <header class="hero-section">

                <div class="container">

                    <div class="row">

                        <div class="absolute-center">

                            <h1 class="big-text">Profile</h1>
                            <p>Your code is <b>{{{ Auth::user()->user_code }}}</b> <br>
                                Still working on the rest. Work resumes on Monday.
                            </p>
                            <a href="/home" class="button button-primary button-md">Back Home</a>

                        </div>

                    </div><!-- //row -->
                    
                </div><!-- //container -->

                <img src="assets/images/utility/bg-chart.png" class="chart">
                 
            </header>
            <!-- //section -->


            <!-- call to action section -->
            <div class="cta-1 bg-gray pt80 pb80">

                <div class="container">

                    <div class="table">

                        <div class="row">
                            
                            <div class="mb-sm-40 col-md-8 col-sm-12 col-xs-12 content text-center-sm">

                                <span>Limited Time Offer</span>
                                <h4 class="section-title">Contact Us Today and Get a Free 6 Month Subscription to Our Premium Newsletter.</h4>
                                <p>Nunc cursus imperdiet tristique. Donec placerat maximus dignissim. Pellentesque interdum ligula id enim interdum ullamcorper. Vivamus ac mauris egestas nisl pharetra porttitor quis ut orci. Curabitur ullamcorper ex ut massa lobortis sagittis. Aliquam tincidunt elit ac risus sodales egestas.</p>
                                
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 column side text-right text-center-sm">
                                 <a href="#" class="button button-primary button-md">Contact Us Today</a>
                            </div>

                        </div><!-- //row -->

                    </div>
                    
                </div><!-- //container -->
                 
            </div>
            <!-- //call to action section -->

            <!-- footer -->
            <footer class="footer">

                <div class="container">

                    <div class="row">
                        
                        <div class="col-md-4 col-sm-12 col-xs-12 mb-sm-40">

                            <a href="index-2.html" class="logo mb20">
                                <i class="pe-7s-cash"></i>
                                <p>Investable</p>
                            </a>
                            <p class="mb10">Nullam pellentesque mauris et lorem congue varius. Morbi iaculis diam leo, ut tempus tellus laoreet porttitor.</p>
                            <ul class="list-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>

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
                            <form action="#" method="post" class="newsletter">
                                <input type="email" name="newsletter" placeholder="Enter Your Email">
                                <button><i class="fa fa-paper-plane"></i></button>
                            </form>

                        </div>

                        <div class="col-xs-12 sub-footer">
                            <p>Copyright &copy; 2016 OneClickPixels. All rights reserved.  <a href="https://icons8.com/" target="_blank">Icon pack by Icons8</a></p>
                            <ul class="list-cc">
                                <li><img src="../../maxcdn.icons8.com/Color/PNG/48/Finance/visa-48.html" title="Visa"></li>
                                <li><img src="../../maxcdn.icons8.com/Color/PNG/48/Finance/discover-48.html" title="Visa"></li>
                                <li><img src="../../maxcdn.icons8.com/Color/PNG/48/Finance/paypal-48.html" title="Visa"></li>
                                <li><img src="../../maxcdn.icons8.com/Color/PNG/48/Finance/am_ex-48.html" title="Visa"></li>
                                <li><img src="../../maxcdn.icons8.com/Color/PNG/48/Finance/google_wallet-48.html" title="Visa"></li>
                                <li><img src="../../maxcdn.icons8.com/Color/PNG/48/Finance/bitcoin-48.html" title="Visa"></li>
                            </ul>
                        </div>

                    </div><!-- //row -->
                    
                </div><!-- //container -->
                 
            </footer>
            <!-- //footer -->
            

        </section>
        <!-- //Main Content -->

    </div>
    <!-- // Page Wrapper -->


    <!-- Plugins -->
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/prettify.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/all.js"></script>


</body>

</html>