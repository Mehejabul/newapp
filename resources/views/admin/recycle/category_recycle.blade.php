@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			 <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">category trush</h5>
                 <a href="{{ route('recycle.index') }}" class="btn btn-secondary">
                     RecycleBin
                 </a>
             </div>
			<div class="card-body">
				<table class="table table-bordered dt-responsive nowrap w-100">
					<thead class="text-center">

						<tr>
							<th> Postcategory name</th>
							<th> Postcategory remarks </th>
							<th> Postcategory url </th>
							<th> PostCategory status </th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-center">
                        @foreach($datas as $data)


                            <tr>
							<td>{{ $data->postcate_name }}</td>
							<td>{{ $data->postcate_remarks }}</td>
                            <td>{{ $data->postcate_url }}</td>
							<td>
                                @if($data->postcat_status !==0)
                                <div class="badge badge-soft-success font-size-12">Active</div>
                                @else
                                <div class="badge badge-soft-danger font-size-12">Disable</div>
                                @endif
                            </td>

							<td class="table-action">
                                 <a href="{{ route('post.category.restore', $data->postcate_slug) }}" type="button" class="btn btn-primary">Restore</a>
                                 {{--  <a href="{{ route('user.show', $data->slug) }}"><i class="align-middle" data-feather="eye"></i></a>  --}}
                                 <a  href="#" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary{{ $data->postcate_slug}}">
                                        Delete
                                 </a>
                            </td>
						</tr>
                              {{--   Modal start  --}}
                                  <div class="modal fade" id="defaultModalPrimary{{ $data->postcate_slug }}" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Default modal</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													<p class="mb-0"> Are you want to delete this item??</p>
												</div>
												<div class="modal-footer">
													<a href="{{ route('post.category.delete', $data->postcate_slug) }}" type="button" class="btn btn-danger">Yes</a>
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
                                  </div>
                            @endforeach
					</tbody>
				</table>
			</div>
			<div class="card-footer border border-secondary">
            </div>
		</div>
	</div>
</div>
 @endsection
