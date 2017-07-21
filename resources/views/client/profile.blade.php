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
                    @else
                        Your account is <span class="label label-success">active</span>
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
                    <div role="tabpanel" class="tab-pane" id="profile">...</div>

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