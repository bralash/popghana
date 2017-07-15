@extends('client.layout')
@section('title', 'Register')
@section('color', 'colored-menu')

@section('hero')

	<header class="page-title">
	    <div class="container">
	        <div class="row">
	            <h1>Register for an account</h1>
	            <p>After you register for an account, you will receive an e-mail to confirm
	            registration.</p>
	        </div><!-- //row -->
	    </div><!-- //container -->
	</header>

	<div class="pt40 pb40">

                <div class="container">

                    <div class="row">

                        <p class="text-center mb20">Already have an account? <a href="/signin">Log In</a></p>
                        
                        <div class="login-box col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

                            <h3>Register</h3>

                            
                            
                            <form action="/signup" method="post" class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">

                            	{{ csrf_field() }}

                            	@if(session()->has('error'))
									<div class="alert alert-danger" role="alert">
		                            	{{ Session::get('error') }}
		                            </div>
                            	@endif

                                <div class="field">
                                    <label>Full Name</label>
                                    <input type="text" name="name" required="required">   
                                </div>

                                <div class="field">
                                	<label>Contact</label>
                                	<input type="text" name="contact" required="required">
                                </div>

                                <div class="field">
                                    <label>Email</label>
                                    <input type="email" name="email" required="required">   
                                </div>

                                <div class="field">
                                    <label>Password</label>
                                    <input name="password" type="password" required="required">   
                                </div>

                                <div class="field">
                                	<label>Confirm Password</label>
                                	<input type="password" name="cpass" required="required">
                                </div>

                                <div class="field">
                                    <button class="button button-md btn-block button-primary">Register</button>
                                </div>

                                <div class="login-footer text-center mb40">
                                    <p>By clicking Register you accept the <a href="#">Terms of Use</a></p>
                                </div>
                            </form>

                        </div>

                    </div><!-- //row -->
                    
                </div><!-- //container -->
                 
            </div>

@stop