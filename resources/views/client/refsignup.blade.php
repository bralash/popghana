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
                                    <label>Surname</label>
                                    <input type="text" name="surname" required="required">   
                                </div>

                                <div class="field">
                                    <label>Other Names</label>
                                    <input type="text" name="other_names" required="required">   
                                </div>

                                <div class="field">
                                    <label>Username</label>
                                    <input type="text" name="username" required="required"
                                    pattern="^[a-zA-Z0-9_.-]*$"
                                    title="Usernames cannot contain spaces and other specia characters">
                                </div>

                                <div class="field">
                                    <label>Email</label>
                                    <input type="email" name="email">   
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
                                	<label>Contact</label>
                                	<input type="text" name="contact" required="required">
                                </div>

                                <div class="field">
                                    <label>Residential Address</label>
                                    <input type="text" name="address">   
                                </div>

                                <div class="field">
                                    <label>Next of Kin</label>
                                    <input type="text" name="next_of_kin">   
                                </div>

                                <div class="field">
                                    <label>Contact(Next of kin)</label>
                                    <input type="text" name="nok_contact">   
                                </div>

                                <div class="field">
                                	<label>Mode of payment</label>
                                	<input type="radio" name="payment_method" value="Mobile Money" style="width: 30px;" id="mm"> Mobile Money
                                	<input type="radio" name="payment_method" value="Bank Account" style="width: 30px;" id="ba">
                                	Bank Account
                                	<input type="radio" name="payment_method" value="Cash" style="width: 30px;" id="cash">
                                	Cash
                                </div>

                                <div class="mm options">
                                	<div class="field">
                                		<label>Mobile Money Number</label>
                                		<input type="text" name="mm_number">
                                	</div>

                                	<div class="field">
                                		<label>Account Name</label>
                                		<input type="text" name="mm_name">
                                	</div>
                                </div>

                                <div class="ba options">
                                	<div class="field">
                                		<label>Account Name</label>
                                		<input type="text" name="acc_name">
                                	</div>

                                	<div class="field">
                                		<label>Account Number</label>
                                		<input type="text" name="acc_number">
                                	</div>

                                	<div class="field">
                                		<label>Name of Bank/Branch</label>
                                		<input type="text" name="bank_name">
                                	</div>
                                </div>

                                <div class="field">
                                	<label>Username of Upliner</label>
                                	<input type="text" name="upliner_name" value="{{$user->username}}" disabled>
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

