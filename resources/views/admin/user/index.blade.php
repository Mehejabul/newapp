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
							<th> Name </th>
							<th> Phone </th>
							<th> Email </th>
							<th> Photo </th>
							<th> Role </th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-center">
                        @foreach ($all_user as $data )
                            <tr>
							<td>{{ $data['name'] }}</td>
							<td>{{ $data['phone'] }}</td>
							<td>{{ $data['email']}}</td>
							<td>
                                @if ($data->photo)
                                <img src="{{ asset('uploads/user/image/'. $data->photo) }}" alt="photo" width="50px">
                                @else
                                <img src="{{ asset('uploads/avatar.png') }}" alt="avatar" width="50">
                                @endif
                            </td>
							<td>{{ $data['role'] }}</td>

							<td class="table-action">
                                 <a href="{{ route('user.edit', $data->slug) }}"><i class="align-middle" data-feather="edit-2"></i></a>
                                 <a href="{{ route('user.show', $data->slug) }}"><i class="align-middle" data-feather="eye"></i></a>
                                  <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>

						</tr>
                        @endforeach

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
