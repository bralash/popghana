@extends('admin.layout')
@section('title', 'Users')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="content">
						<h4 class="title">Registered Users</h4>
						<div class="material-datatables">
							<table id="usersTable" class="table table-striped table-no-bordered table-hover" style="width: 100%; cellspacing: 0">
								<thead>
									<tr>
										<td>Fullname</td>
										<td>Username</td>
										<td>Contact</td>
										<td>User Code</td>
										<td>Downline Count</td>
										<td>Reg. Date</td>
										<td>Actions</td>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $key=>$user)
										<tr>
											<td>{{$user->surname . ', '. $user->other_names }}</td>
											<td data-name="{{$user->surname . ', '. $user->other_names }}" data-email="{{$user->email}}" data-contact="{{$user->contact}}" data-address="{{$user->address}}" data-user-code="{{$user->user_code}}" data-nok="{{$user->next_of_kin}}" data-nkc="{{$user->nok_contact}}" data-payment="{{$user->payment_method}}" data-mm="{{$user->mm_number}}" data-mname="{{$user->mm_name}}" data-accname="{{$user->acc_name}}" data-accnum="{{$user->acc_number}}" data-bank="{{$user->bank_name}}" data-up="{{$user->upliner_name}}" data-status="{{$user->status}}" data-ref="{{$user->ref}}">
												<span class="profile uk-button uk-button-text">
												{{ $user->username }}
												</span>
											</td>
											<td>{{ $user->contact }}</td>
											<td>{{ $user->user_code }}</td>
											
											{{-- <td>{{count($model->getDownliners($user->username))}}</td> --}}
											<td>{{count($user->getDownliners())}}</td>
											<td>{{$user->created_at}}</td>
											<td>
												<a href="JavaScript:Void(0);" data-usrId="{{$user->id}}" class=" editUsr uk-button uk-button-text" uk-toggle="target: #editModal">Edit</a>
												 || 
												<a href="JavaScript:Void(0);" data-usrId="{{$user->id}}" data-name="{{$user->surname . ', '. $user->other_names }}" class="delUsr uk-button uk-button-text" uk-toggle="target: #deleteModal">Delete</a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						
						<div id="profileModal" uk-modal>
						    <div class="uk-modal-dialog uk-modal-body">
						    	<button class="uk-modal-close-default" type="button" uk-close></button>
						        <h2 class="uk-modal-title"></h2>
						        <hr class="uk-divider-icon">
						        <div class="row modelData">
						        	<div class="col-md-6">
						        		<b>Email: </b> <span class="usrEmail"></span> <br>
						        		<b>Address:</b> <span class="usrAddress"></span> <br>
						        		<b>User Code:</b> <span class="usrCode"></span> <br>
						        		<b>Next of kin: </b> <span class="usrNok"></span> <br>
						        		<b>Contact (Next of kin): </b> <span class="usrNkc"></span> <br>
						        		<b>Payment Method: </b> <span class="usrPayment"></span> <br>
						        		<b>MM Number: </b> <span class="usrMN"></span> <br>
						        	</div>

						        	<div class="col-md-6">
						        		<b>MM Name: </b> <span class="usrMMN"></span> <br>
						        		<b>Account Name: </b> <span class="usrAN"></span> <br>
						        		<b>Account Number: </b> <span class="usrAcN"></span> <br>
						        		<b>Bank Name: </b> <span class="usrBank"></span><br>
						        		<b>Upliner: </b> <span class="usrUpliner"></span><br>
						        		<b>Status: </b> <span class="usrStatus"></span> <br>
						        		<b>Ref: </b> <span class="usrRef"></span>
						        	</div>
						        </div>
						    </div>
						</div>

						<div id="editModal">
							<div class="uk-modal-dialog uk-modal-body">
								<button class="uk-modal-close-default" type="button" uk-close></button>
								<h2 class="uk-modal-title">Edit Upliner</h2>
								<hr class="uk-divider-icon">

								<form action="/update-upliner" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="id" value="{{$user->id}}" id="usrid">
									<div class="field">
										<label for="">Upliner Name</label>
										<select name="upliner_name" id="" class="uk-select">
											@foreach($users as $user)
												<option value="{{$user->username}}">{{$user->username}}</option>
											@endforeach
										</select>
										<div class="uk-margin">
											<button class="uk-button uk-button-primary">Update upliner</button>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div id="deleteModal">
							<div class="uk-modal-dialog uk-modal-body">
								<button class="uk-modal-close-default" type="button" uk-close></button>
								<h2 class="uk-modal-title">Delete User</h2>
								<hr class="uk-divider-icon">

								<div class="uk-modal-body">
									Are you sure you want to delete <b id="usrName"></b>??
								</div>
								<div class="uk-modal-footer uk-text-right">
						            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
						            <a href="" class="delUsrBtn uk-button uk-button-danger" type="button">Delete</a>
						        </div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#datatables').DataTable({
				'pagingType': 'full_numbers',
				"lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }
			});

			var table = $('#datatables').DataTable();

            // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');

                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });

            $('.card .material-datatables label').addClass('form-group');
		})
	</script>

@endsection