@extends('client.layout')
@section('title', 'Sign In')
@section('color', 'colored-menu')

@section('hero')

	<header class="page-title">
        <div class="container">
            <div class="row">
                <h1>Login to your account</h1>
                <p>After you log in you will be able to manage your account.</p>
            </div><!-- //row -->
        </div><!-- //container -->
    </header>


	<div class="pt40 pb40">
        <div class="container">
            <div class="row">
                <p class="text-center mb20">Don't have an account yet? <a href="/signup">Sign up</a></p>
                <div class="login-box col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <h3>Log In</h3>
                    <form action="/login" method="post" class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						@if(session()->has('error'))
							<div class="alert alert-danger" role="alert">
                            	{{ Session::get('error') }}
                            </div>
                    	@endif

                        <div class="field">
                            <label>Username</label>
                            <input type="text" name="username" required="required">   
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input name="password" type="password" required="required">   
                        </div>
                        <div class="field">
                            <button class="button button-md btn-block button-primary">Login</button>
                        </div>

                        <div class="login-footer text-center mb40">
                            {{-- <p>Forgot your email or password? <a href="#">Recover it now</a></p> --}}
                            <p>Need help? Contact us on <a href="#">(+233) 50 498 4357</a></p>
                        </div>
                    </form>

                </div>

            </div><!-- //row -->
            
        </div><!-- //container -->
         
    </div>

@stop
