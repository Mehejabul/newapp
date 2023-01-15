@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">show post</h5>
                 <a href="{{ route('post.index') }}" class="btn btn-secondary">
                    <i class="fa fa-plus-circle me-2" aria-hidden="true"></i> All post
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
							<th>Post Title</th>
                            <td>:</td>
							<td>{{ $data['post_title'] }}</td>

						</tr>
                        <tr>
							<th>post category</th>
                            <td>:</td>
							<td>{{ $data->postcategory->postcate_name}}</td>

						</tr>
                        <tr>
							<th>Post Subtile</th>
                            <td>:</td>
							<td>{{ $data->post_subtitle }}</td>
						</tr>
                        <tr>
							<th>Post details</th>
                            <td>:</td>
							<td>{{ $data->post_details }}</td>
						</tr>
                        <tr>
							<th>Post Feature</th>
                            <td>:</td>
							<td>
                                @if($data->post_feature ==1)
                                   <p>on</p>
                                   @else
                                   <p>Off</p>
                                @endif
                            </td>
						</tr>
                        <tr>
							<th>Post Feature image</th>
                            <td>:</td>
							<td>
                                @if($data->post_feature_image)
                                   <img src="{{ asset('uploads/post/'.$data->post_feature_image) }}" alt="feature_image" width="50px">
                                   @else
                                   <img src="{{ asset('uploads/avatar.png') }}" alt="no_mage" width="50px">
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Post Url</th>
                            <td>:</td>
                            <td>{{ $data->post_url }}</td>
                        </tr>

                        <tr>
                            <th>Post creator</th>
                            <td>:</td>
                            <td>
                                @if($data->post_creator)
                                {{ $data->creator->name }}
                                @else
                                null
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Post editor</th>
                            <td>:</td>
                            <td>  @if($data->post_editor)
                                {{ $data->editor->name }}
                                @else
                                null
                                @endif</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>:</td>
                            <td>{{ $data->created_at->format('d-m-y | h:i:s A') }}</td>
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
