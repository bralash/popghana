@extends('admin.layout')
@section('title', 'Validate User')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="content">
						<h4 class="title">Validate User</h4>
						<div class="row">
							<div class="col-md-6">
								<form action="user-validate" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="username" id="txtUsername" value="">
									<div class="field">
										<label>User Code</label>
										<input type="text" id="code" name="user_code" class="form-control" required>
									</div>
									<div class="field">
										<label>Amount</label>
										<input type="text" name="amount" class="form-control">
									</div>
									<br>
									<div class="field">
										<input type="submit" class="btn btn-primary" value="Validate">
									</div>
								</form>
							</div>

							<div class="col-md-6 details" style="display: none;">
								<h5 style="margin: 8px 0px;">User Details</h5>
								<h6 id="username">Username: <b></b></h6>
								<h6 id="fullname">Fullname: <b></b></h6>
								<h6 id="contact">Contact: <b></b></h6>
							<h6 id="status">Account Status: <b></b></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')

	<script src="{{URL::asset('assets/js/app.js')}}"></script>

@endsection