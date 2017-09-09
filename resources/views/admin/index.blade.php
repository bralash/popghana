@extends('admin.layout')
@section('title', 'Admin Dashboard')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="uk-card uk-card-default uk-card-body usrCard">
					<div class="center">
						<span class="card-icon">
							<i class="ion-person-stalker"></i>
						</span>
						<div class="text"><b>{{count($users)}}</b> <br> Registered Users</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="uk-card uk-card-default uk-card-body">
					<h3 class="uk-card-title">Total amount</h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="uk-card uk-card-default uk-card-body">
					<h3 class="uk-card-title">Something else</h3>
				</div>
			</div>
		</div>
	</div>

@stop

@section('script')

{{-- <script src="{{URL::asset('assets/js/dashboard.js')}}"></script> --}}
@stop