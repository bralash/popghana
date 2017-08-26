@extends('client.layout')
@section('title','Welcome')
@section('color', 'transparent-light')
@section('hero')
	<header class="hero-section">

                <div class="container-fluid">

                    <div class="row">

                        <div class="hero-slider">

                            <div class="bg-img bg-img-1 color-overlay">
                                <div class="hero-center col-md-8 col-sm-10 col-xs-12">
                                    <span>Welcome to POP Money Matrix</span>
                                    <h1>Our Vision</h1>
                                    <p>
                                        To eliminate poverty and empower our generation financially through true and fair means
                                    </p>
                                    <a href="#" class="button button-primary button-md">Get started</a>
                                </div>
                                <img src="assets/images/utility/bg-chart.png" class="chart" alt="chart">
                            </div>

                            <div class="bg-img bg-img-3 color-overlay">
                                <div class="hero-center col-md-8 col-sm-10 col-xs-12">
                                    <span>Welcome to POP Money Matrix</span>
                                    <h1>Our Mission</h1>
                                    <p>
                                        To financially empower members of the association through a member-to-member contribution system, using
                                        an online, self-registration mode to create a large
                                        number of members to benefit
                                    </p>
                                    <a href="#" class="button button-primary button-md">Get started</a>
                                </div>
                                 <img src="assets/images/utility/bg-chart.png" class="chart" alt="chart">
                            </div>
                              
                        </div>

                    </div><!-- //row -->
                    
                </div><!-- //container -->

                <a href="#services" class="mouse-box">
                    <div class="mouse"></div>
                </a>
                 
            </header>
@stop

@section('banner2')
    <div class="bg-white pt80 pb80">
        <div class="container">
            <div class="table">
                <div class="row">
                    <div class="mb-sm-40 col-md-5 col-sm-12 col-xs-12 side">
                       <h3 class="section-title  mb20">Who we are</h3>
                       <p class="opacity-08">
                           <b>POP Money Matrix</b> is a system designed by a social
                           group called <b>PRINCE OF PEACE (POP) ASSOCIATION.</b>
                           This system seeks to empower members financially, by
                           way of giving out registration fees paid by new members 
                           to existing members, to support their entrepreneurial
                           ideas, pay off debts and empower members to face life.
                       </p>
                       <p>
                           Most associations look at generating funds for the group
                           itself and other than the members and only come to aid of
                           members only when they are in trouble or bereaved.
                       </p>
                    </div>

                    <div class="col-md-6 col-md-push-1 col-sm-12 col-xs-12 content">
                        <img src="assets/images/services/img-4.jpg" class="w100" alt="image">
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
