@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">Post category</h5>
                 <a href="{{ route('post.category.create') }}" class="btn btn-secondary">
                    <i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Create postcategory
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
							<th>Post category Name</th>
                            <td>:</td>
                            <td>{{ $all_category->postcate_name }}</td>
						</tr>
                        <tr>
							<th>Post Category remarks</th>
                            <td>:</td>
							<td>{{ $all_category->postcate_remarks }}</td>

						</tr>
                        <tr>
							<th>Post category url</th>
                            <td>:</td>
							<td>{{ $all_category->postcate_url }}</td>
						</tr>
                        <tr>
							<th>post category creator</th>
                            <td>:</td>
							<td>{{ $all_category->postcate_creator}}</td>
						</tr>
                        <tr>
							<th>post category editor</th>
                            <td>:</td>
							<td>{{ $all_category->postcate_editor }}</td>
						</tr>
                         <tr>
							<th>post category created</th>
                            <td>:</td>
							<td>{{ $all_category->created_at->format('d-m-y | h:i:s A') }}</td>
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
