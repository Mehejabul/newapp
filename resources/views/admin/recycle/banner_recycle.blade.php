@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
            <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">Banner trush</h5>
                 <a href="{{ route('recycle.index') }}" class="btn btn-secondary">
                     RecycleBin
                 </a>
             </div>
			<div class="card-body">
				<table class="table table-bordered dt-responsive nowrap w-100">
					<thead class="text-center">
						<tr>
							<th> Image </th>
							<th> Title </th>
							<th> Middle Tite </th>
							<th> Sub Title </th>
							<th> Banner Button </th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="text-center">
                        @foreach ($datas as $benner )

                            <tr>
							<td>
                                @if($benner->banner_image)
                                <img src="{{ asset('uploads/banner/'. $benner->banner_image) }}" alt="banner image" width="50px ">
                                 @else
                                 <img src="{{ asset('uploads/avatar.png') }}" alt="no_image" width="50px">
                                @endif
                            </td>
							<td>{{ $benner -> banner_title }}</td>
							<td>{{ $benner -> banner_mid_title }}</td>
							<td>{{ $benner -> banner_Sub_title }}</td>
							<td>{{ $benner ->  banner_button  }}</td>


							<td class="table-action">
                                 <a href="{{ route('banner.restore', $benner->banner_slug) }}" type="button" class="btn btn-primary">Restore</a>
                                 {{--  <a href="{{ route('user.show', $data->slug) }}"><i class="align-middle" data-feather="eye"></i></a>  --}}
                                 <a  href="#" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary{{ $benner->banner_slug }}">
                                        Delete
                                 </a>
                            </td>
                              {{--   Modal start  --}}
                                  <div class="modal fade" id="defaultModalPrimary{{ $benner->banner_slug }}" tabindex="-1" role="dialog" aria-hidden="true">
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
													<a href="{{ route('banner.destroy', $benner->banner_slug) }}" type="button" class="btn btn-danger">Yes</a>
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
						      </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
			{{--  <div class="card-footer border border-secondary">
             <div class="col-lg-12">
                <button type="button" class="btn btn-primary">Copy</button>
			     <button type="button" class="btn btn-secondary">Excel</button>
			    <button type="button" class="btn btn-danger">PDF</button>
             </div>
            </div>  --}}
		</div>
	</div>
</div>
 @endsection
