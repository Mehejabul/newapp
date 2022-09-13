@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">All Users</h5>
                 <a href="{{ route('user.create') }}" class="btn btn-secondary">
                    <i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Create User
                 </a>
             </div>
			<div class="card-body">
				<table class="table table-bordered dt-responsive nowrap w-100">
					<thead class="text-center">
						<tr>
							<th> Items </th>
                            <th></th>
							<th> Details </th>
						</tr>
					</thead>
					<tbody class="text-center">

						<tr>
							<th>Name</th>
                            <td>:</td>
							<td>{{ $all_user['name'] }}</td>

						</tr>
                        <tr>
							<th>Email</th>
                            <td>:</td>
							<td>{{ $all_user['email'] }}</td>

						</tr>
                        <tr>
							<th>Phone</th>
                            <td>:</td>
							<td>{{ $all_user['phone'] }}</td>
						</tr>
                        <tr>
							<th>Role</th>
                            <td>:</td>
							<td>{{ $all_user['role'] }}</td>
						</tr>
                        <tr>
							<th>address</th>
                            <td>:</td>
							<td>{{ $all_user['address'] }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card-footer border border-secondary">
             <div class="col-lg-12">
                <button type="button" class="btn btn-primary">Copy</button>
			     <button type="button" class="btn btn-secondary">Excel</button>
			    <button type="button" class="btn btn-danger">PDF</button>
             </div>
            </div>
		</div>
	</div>
</div>
 @endsection
