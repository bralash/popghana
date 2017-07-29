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
							<table id="datatables" class="table table-striped table-no-bordered table-hover" style="width: 100%; cellspacing: 0">
								<thead>
									<tr>
										<td>Fullname</td>
										<td>Username</td>
										<td>Contact</td>
										<td>User Code</td>
										<td>Account Status</td>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $key=>$user)
										<tr>
											<td>{{$user->surname . ', '. $user->other_names }}</td>
											<td>{{ $user->username }}</td>
											<td>{{ $user->contact }}</td>
											<td>{{ $user->user_code }}</td>
											@if($user->status == 0) 
												<td>Inactive</td>
											@elseif($user->status == 1)
												<td>Active</td>
											@elseif($user->status == 3)
												<td>Admin</td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
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