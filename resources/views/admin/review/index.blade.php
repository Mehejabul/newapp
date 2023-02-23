@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">All Review</h5>
                 <a href="{{ route('review.create') }}" class="btn btn-secondary">
                    <i class="fa fa-plus-circle me-2" aria-hidden="true"></i>create Review
                 </a>
             </div>
			<div class="card-body">
				<table class="table table-bordered dt-responsive nowrap w-100">
					<thead>
						<tr>
							<th>  image</th>
							<th>  Name</th>
							<th>  Details </th>
                            <th>  Action </th>
						</tr>
					</thead>
					<tbody>
                           @foreach ($reviewer as $data )

                            <tr>
							<td>
                                 @if($data->reviewer_image)
                                    <img src="{{ asset('uploads/review/' . $data->reviewer_image) }}" alt="post_image" width="50px">
                                @else
                                <img src="{{ asset('uploads/avatar.png') }}" alt="no_image" width="50px">
                                @endif
                            </td>
							<td>{{ $data->reviewer_name }}</td>

                            <td>
                               {{ $data->reviewer_details }}
                            </td>

							<td class="table-action">
                                 <a href="{{ route('review.edit', $data->reviewer_slug) }}"><i class="align-middle" data-feather="edit-2"></i></a>
                                 <a  href="#" type="button"  data-bs-toggle="modal" data-bs-target="#defaultModalPrimary{{ $data->reviewer_slug }}">
                                        <i class="align-middle" data-feather="trash"></i>
                                 </a>
                            </td>
						</tr>
                              {{--   Modal start  --}}
                                  <div class="modal fade" id="defaultModalPrimary{{ $data->reviewer_slug }}" tabindex="-1" role="dialog" aria-hidden="true">
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
													<a href="{{ route('review.softdelete',$data->reviewer_slug) }}" type="button" class="btn btn-danger">Yes</a>
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
