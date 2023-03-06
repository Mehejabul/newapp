@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">All content</h5>
                 <a href="{{ route('content.create') }}" class="btn btn-secondary">
                    <i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Create content
                 </a>
             </div>
			<div class="card-body">
				<table class="table table-bordered dt-responsive nowrap w-100">
					<thead class="text-center">

						<tr>
							<th> Image</th>
                            <th> Title</th>
							<th> Page Name </th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-center">
                        @foreach ($contents as $data )

						   <td>
                                @if($data->content_image)
                                    <img src="{{ asset('uploads/content/' . $data->content_image) }}" alt="post_image" width="50px">
                                @else
                                <img src="{{ asset('uploads/avatar.png') }}" alt="no_image" width="50px">
                                @endif
                            </td>
							<td>{{ $data->content_title }}</td>
							<td>{{ $data->pagename->page_name }}</td>


							<td class="table-action">
                                 <a href="{{ route('content.edit', $data->content_slug) }}"><i class="align-middle" data-feather="edit-2"></i></a>
                                 <a  href="#" type="button"  data-bs-toggle="modal" data-bs-target="#defaultModalPrimary{{ $data->content_slug }}">
                                        <i class="align-middle" data-feather="trash"></i>
                                 </a>
                            </td>
						</tr>
                              {{--   Modal start  --}}
                                  <div class="modal fade" id="defaultModalPrimary{{ $data->content_slug }}" tabindex="-1" role="dialog" aria-hidden="true">
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
													<a href="{{ route('content.softdelete',$data->content_slug) }}" type="button" class="btn btn-danger">Yes</a>
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
