@extends('client.layout')
@section('title','Welcome')
@section('color', 'transparent-light')
@section('hero')
	<header class="hero-section">

                <div class="container-fluid">

                    <div class="row">

                        <div class="hero-slider">

                            <div class="bg-img bg-img-1 color-overlay" id="home">
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

@section('services')

    <div class="pt80 pb80" id="about">
        <div class="container">
            <div class="row">
                <h3 class="section-sub">Get to know us</h3>
                <h2 class="section-title">Who we are</h2>
            </div>
            <div class="row">
                    <div class="mb-sm-40 col-md-5 col-sm-12 col-xs-12 side">
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

@stop
@section('banner1')
    
    <div class="pt80 pb80 bg-img bg-img-4 dark-overlay-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                   <h3 class="section-title color-white mb20">We aim to enhance the lives of members of the group, rather than that of the association</h3>
                   <a href="#how-it-works" class="button button-secondary button-md">
                       Learn more
                   </a>
                </div>
            </div><!-- //row -->
        </div><!-- //container -->
    </div>

@stop

@section('pricing')

    <div class="pt80 pb80" id="how-it-works">
        <div class="container">
            <div class="row">
                <h3 class="section-sub">Let's break it down</h3>
                <h2 class="section-title">How it works</h2>
                <div class="col-md-8 col-md-offset-2">
                    <p>
                    One can join the scheme by registering and paying a subscription
                    fee of GH¢ 20.00/$5.00. After registration, you introduce 3 other
                    people to join the scheme, where you become their upliner(<b>Note:</b> 
                    One person can sign on more than once, to create a better leverage).
                    Upon registration, a unique number will be generated, and that's 
                    what would be used as the reference for all Mobile Money transfer.
                    After the transfer, you can call to confirm the transaction and
                    if the transfer is not received after 24 hours, your account will be
                    deleted. After registering, this is how the generation or level is 
                    being built.
                </p>
                <p class="pt20 pb20">
                    <b>GRADE 1: </b> Upon successful completion of this grade by introducing
                    3 people, GH¢ 60.00 will be generated to which GH¢ 40.00 will be 
                    credited to your upliner and you will receive GH¢ 20.00 and move to 
                    grade 2.
                </p>
                <p class="pb20">
                    <b>GRADE 2:</b> Upon successful completion of this grade, you will be 
                    created with GH¢ 40.00 from 9 Downliners, making GH¢ 360.00 to which
                    GH¢ 160.00 will be pushed to your immediate Upliner and you will receive
                    GH¢ 200.00 and move to grade 3.
                </p>
                <p class="pb20">
                    <b>GRADE 3:</b> Upon successful completion of this grade, you will be 
                    credited with GH¢ 160.00 from 27 Downliners, making GH¢ 4,320.00 to 
                    which GH¢ 3,500.00 will be pushed to your immediate Upliner and you
                    will receive GH¢ 820.00 and move to grade 4.
                </p>
                <p class="pb20">
                    <b>GRADE 4:</b> This is the final stage and upon successful completion of this grade, you will be credited with GH¢ 3,500.00 from 81 Downliners, making GH¢ 283,500.00 at this point nothing will be 
                    forwarded since this is the final stage. Hence you receive the amount
                    in full and join the cycle automatically.
                </p>
                </div>
            </div>
        </div>
    </div>

@stop