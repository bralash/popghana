<!doctype html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/amaze/pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 03:29:40 GMT -->
<head>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >

    <title>@yield('title') | POP Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' >
    <meta name="viewport" content="width=device-width" >

    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" >

    <!--  Material Dashboard CSS    -->
    <link href="{{URL::asset('assets/css/amaze.css')}}" rel="stylesheet" >

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::asset('assets/css/demo.css')}}" rel="stylesheet" >

    <!--     Fonts and icons     -->
    <link href="{{URL::asset('css/entypo/css/entypo.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/font-muli.css')}}" rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/jquery-ui-1.12.0/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/sweetalert/css/sweetalert2.min.css')}}" rel="Stylesheet" >
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="logo">
            <a href="#" class="simple-text">
                <img src="{{URL::asset('assets/img/logo-sidebar.png')}}">
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="#" class="simple-text">
                P
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="">
                    <a href="/admin">
                        <i class="entypo-monitor"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/profile">
                        <i class="entypo-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/users">
                        <i class="entypo-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/validate-user">
                        <i class="entypo-check"></i>
                        <p>Validate User</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="entypo-left"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> @yield('title') </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="entypo-bell"></i>
                                <span class="notification">6</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">You have 5 new messages</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Mike</a>
                                </li>
                                <li>
                                    <a href="#">Wish Mary on her birthday!</a>
                                </li>                                    <li>
                                    <a href="#">5 warnings in Server Console</a>
                                </li>
                                <li>
                                    <a href="#">Jane completed 'Induction Training'</a>
                                </li>
                                <li>
                                    <a href="#">'Prepare Marketing Report' is overdue</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/profile" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="entypo-user"></i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="entypo-cog"></i>
                                <p class="hidden-lg hidden-md">Settings</p>
                            </a>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="entypo-signout"></i>
                                <p class="hidden-lg hidden-md">Logout</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            @yield('content')
        </div>



    </div>

</div>
<!--   Core JS Files   -->
<script src="{{URL::asset('assets/vendors/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/material.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/vendors/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{URL::asset('assets/vendors/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{URL::asset('assets/vendors/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{URL::asset('assets/vendors/charts/flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/vendors/charts/flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/vendors/charts/flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/vendors/charts/flot/jquery.flot.stack.js')}}"></script>
<script src="{{URL::asset('assets/vendors/charts/flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/vendors/charts/chartjs/Chart.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{URL::asset('assets/vendors/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{URL::asset('assets/vendors/bootstrap-notify.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{URL::asset('assets/vendors/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{URL::asset('assets/vendors/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{URL::asset('assets/vendors/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAurmSUEQDwY86-wOG3kCp855tCI8lHL-I"></script>
<!-- Select Plugin -->
<script src="{{URL::asset('assets/vendors/jquery.select-bootstrap.js')}}"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{URL::asset('assets/js/bootstrap-checkbox-radio-switch-tags.js')}}"></script>

<!-- Circle Percentage-chart -->
<script src="{{URL::asset('assets/js/jquery.easypiechart.min.js')}}"></script>

<!--  DataTables.net Plugin    -->
<script src="{{URL::asset('assets/vendors/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{URL::asset('assets/vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{URL::asset('assets/vendors/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{URL::asset('assets/vendors/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{URL::asset('assets/vendors/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{URL::asset('assets/js/amaze.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{URL::asset('assets/js/demo.js')}}"></script>

<script src="{{URL::asset('assets/js/charts/flot-charts.js')}}"></script>
<script src="{{URL::asset('assets/js/charts/chartjs-charts.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        //demo.initStatsDashboard();
        demo.initVectorMap();
        demo.initCirclePercentage();

    });
</script>
@yield('scripts')
</body>

<!-- Mirrored from www.urbanui.com/amaze/pages/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 03:30:47 GMT -->
</html>
