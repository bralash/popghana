@extends('client.layout')
@section('title', 'Emmanuel Asaber')
@section('color', 'colored-menu')

@section('hero')

    <header class="page-title">
        <div class="container">
            <div class="row">
                <h1>Welcome, {{$user->username}}</h1>
                <p>
                    @if($user->status == 0)
                        Your account is <span class="label label-warning">inactive</span>
                    @elseif($user->status == 1)
                        Your account is <span class="label label-success">active</span>
                    @elseif($user->status == 3)
                        You have been granted administrative privileges
                    @endif
                </p>
            </div><!-- //row -->
        </div><!-- //container -->
    </header>

    <div class="header-links">
        <div class="container">
            <div class="row">
                <div>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#details" aria-controls="home" role="tab" data-toggle="tab">Profile Details</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Edit Profile</a></li>
                    <li role="presentation"><a href="#password" aria-controls="messages" role="tab" data-toggle="tab">Change Password</a></li>
                    <li role="presentation"><a href="#deactivate" aria-controls="settings" role="tab" data-toggle="tab">Deactivate Account</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="details">
                       <div class="row">
                           <div class="col-md-5">
                                <h5 class="section-title">Your transaction ID is <u>{{$user->user_code}}</u></h5>
                                <p>
                                    Enter this code as your reference whenever you make a mobile money
                                    transaction. This helps us track your transactions.
                                </p>
                           </div>
                       </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <form action="/update-profile" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="field">
                                        <label>Surname</label>
                                        <input type="text" name="surname" value="{{$user->surname}}">
                                    </div>

                                    <div class="field">
                                        <label>Other Names</label>
                                        <input type="text" name="other_names" value="{{$user->other_names}}">
                                    </div>

                                    <div class="field">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{$user->email}}">
                                    </div>

                                    <div class="field">
                                        <label>Mode of payment</label>
                                        @if($user->payment_method == 'Mobile Money')
                                            <input type="radio" name="payment_method" value="Mobile Money" style="width: 30px;" id="mm" checked="checked"> Mobile Money
                                            <input type="radio" name="payment_method" value="Bank Account" style="width: 30px;" id="ba">
                                            Bank Account
                                            <input type="radio" name="payment_method" value="Cash" style="width: 30px;" id="cash">
                                            Cash
                                        @elseif($user->payment_method == 'Bank Account')
                                            <input type="radio" name="payment_method" value="Mobile Money" style="width: 30px;" id="mm"> Mobile Money
                                            <input type="radio" name="payment_method" value="Bank Account" style="width: 30px;" id="ba" checked="checked">
                                            Bank Account
                                            <input type="radio" name="payment_method" value="Cash" style="width: 30px;" id="cash">
                                            Cash
                                        @elseif($user->payment_method == 'Cash')
                                            <input type="radio" name="payment_method" value="Mobile Money" style="width: 30px;" id="mm"> Mobile Money
                                            <input type="radio" name="payment_method" value="Bank Account" style="width: 30px;" id="ba">
                                            Bank Account
                                            <input type="radio" name="payment_method" value="Cash" style="width: 30px;" id="cash" checked="checked">
                                            Cash
                                        @else
                                            <input type="radio" name="payment_method" value="Mobile Money" style="width: 30px;" id="mm"> Mobile Money
                                            <input type="radio" name="payment_method" value="Bank Account" style="width: 30px;" id="ba">
                                            Bank Account
                                            <input type="radio" name="payment_method" value="Cash" style="width: 30px;" id="cash">
                                            Cash
                                        @endif
                                    </div>

                                    <div class="mm options">
                                        <div class="field">
                                            <label>Mobile Money Number</label>
                                            <input type="text" name="mm_number" value="{{$user->mm_number}}">
                                        </div>

                                        <div class="field">
                                            <label>Account Name</label>
                                            <input type="text" name="mm_name" value="{{$user->mm_name}}">
                                        </div>
                                    </div>

                                    <div class="ba options">
                                        <div class="field">
                                            <label>Account Name</label>
                                            <input type="text" name="acc_name" value="{{$user->acc_name}}">
                                        </div>

                                        <div class="field">
                                            <label>Account Number</label>
                                            <input type="text" name="acc_number" value="{{$user->acc_number}}">
                                        </div>

                                        <div class="field">
                                            <label>Name of Bank/Branch</label>
                                            <input type="text" name="bank_name" value="{{$user->bank_name}}">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label>Username of Upliner</label>
                                        <input type="text" name="upliner_name" list="upliner" value="{{$user->upliner_name}}">
                                    </div>

                                    <datalist id="upliner">
                                        @foreach($users as $user)
                                            <option value="{{$user->username}}">
                                        @endforeach
                                    </datalist>

                                    <div class="field">
                                        <button class="button button-md btn-block button-primary">
                                            Update Profile
                                        </button>
                                    </div>

                                </div>

                                <div class="col-md-5">
                                    <div class="field">
                                        <label>Contact</label>
                                        <input type="text" name="contact" value="{{$user->contact}}">
                                    </div>

                                    <div class="field">
                                        <label>Residential Address</label>
                                        <input type="text" name="address" value="{{$user->address}}">
                                    </div>

                                    <div class="field">
                                        <label>Next of Kin</label>
                                        <input type="text" name="next_of_kin" value="{{$user->next_of_kin}}">
                                    </div>

                                    <div class="field">
                                        <label>Contact(Next of kin)</label>
                                        <input type="text" name="nok_contact" value="{{$user->nok_contact}}">   
                                    </div>
                                </div>
                            </div>
                        </form>
                            

                    </div>

                    <div role="tabpanel" class="tab-pane" id="password">
                        <div class="row">
                            <div class="col-md-5">
                                <form action="/change-password" method="post">
                                {{ csrf_field() }}
                                @if(session()->has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                    <div class="field">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" required="required">
                                    </div>

                                    <div class="field">
                                        <label>New Password</label>
                                        <input type="password" name="password" required="required">
                                    </div>

                                    <div class="field">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="cpass" required="required">
                                    </div>

                                    <div class="field">
                                        <button class="button button-md btn-block button-primary">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="deactivate">...</div>
                  </div>

                </div>
            </div>
        </div>
    </div>

@stop

@section('script')

    @if(session('password_changed'))
        <script type="text/javascript">
            $(document).ready(function() {
                alertify.alert('Success', "{{session('password_changed')}}");
            });
        </script>
    @elseif(session('current_password')) 
        <script type="text/javascript">
            $(document).ready(function() {
                alertify.alert('Error', "{{session('current_password')}}");
            });
        </script>
    @elseif(session('new_password'))
        <script type="text/javascript">
            $(document).ready(function() {
                alertify.alert('Error', "{{session('new_password')}}");
            });
        </script>
    @endif

@stop