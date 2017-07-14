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
                                    <span>Welcome to investable</span>
                                    <h1>We Fund Dreams</h1>
                                    <p>Click the button below to find out how investable can help you become more financially secure and better prepared for retirement.</p>
                                    <a href="#" class="button button-primary button-md">Get started</a>
                                </div>
                                <img src="assets/images/utility/bg-chart.png" class="chart" alt="chart">
                            </div>

                            <div class="bg-img bg-img-3 color-overlay">
                                <div class="hero-center col-md-8 col-sm-10 col-xs-12">
                                    <span>What we do</span>
                                    <h1>Financially Empowering</h1>
                                    <p>Click the button below to find out how investable can help you become more financially secure and better prepared for retirement.</p>
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
