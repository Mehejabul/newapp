@extends('layouts.admin') @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">Edite Post</h5>
				<a href="{{ route('post.index') }}" class="btn btn-secondary"> <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All Post </a>
			</div>
			<div class="card-body">

                 @include('admin.includes.alert')

				<form method="POST" action="{{ route('post.update',$data->post_id) }}" enctype="multipart/form-data">
                     @csrf
                     @method('put')

					<div class="row" text-center>

                        @php
                            $categories = App\Models\PostCategory::where('postcate_status',1)->get();
                        @endphp

						<div class="col-lg-6 my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Post category id <span class="text-danger">*</span>: </strong> </label>
									<select type="number" class="form-control @error('postcate_id') is-invalid @enderror" name="postcate_id" value="">
                                        <option label="Select post category"></option>
                                        @foreach ($categories as $category)
                                             <option value="{{ $category->postcate_id }}" @if($category->postcate_id == $data->postcate_id) selected @endif > {{ $category->postcate_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                 @error('postcate_id')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
				       </div>

						 <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> post title <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('post_title') is-invalid @enderror" name="post_title" value="{{ $data->post_title }}">
                                </div>
                                @error('post_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-6  my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Post subtitle <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('post_subtitle') is-invalid @enderror" name="post_subtitle" value="{{ $data->post_subtitle }}">
                                </div>
                              @error('post_subtitle')
                               <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
					    </div>

                        <div class="col-lg-6  my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Post  url: </strong> </label>
									<input type="text" class="form-control @error('post_url') is-invalid @enderror" name="post_url" value="{{ $data->post_url }}">
                                </div>
                           </div>
					    </div>

                        <div class="col-lg-6 my-4">
                                <div class="form-check form-switch" dir="ltr">
                                    <input name="product_feature" type="checkbox" class="form-check-input" value="1">
                                    <label class="form-check-label">Post Feature</label>
                                </div>
                            </div>

                        <div class="col-lg-4  my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Post feature image: </strong> </label>
									<input type="file" class="form-control @error('post_feature_image') is-invalid @enderror" id="feature_image_input" name="post_feature_image" value="{{ $data->post_feature_image }}">
                                </div>
                           </div>
					    </div>

                        <div class="col-lg-2 m-auto">
                          @if($data->post_feature_image)
                         <img id="feature_image_preview" src="{{ asset('uploads/post/'.$data->post_feature_image) }}"
                        alt="banner_image" class="img-fluid rounded" width="100" />
                         @else
                        <img id="feature_image_preview" src="{{ asset('uploads/avatar.png') }}"
                        alt="banner_image" class="img-fluid rounded" width="100" />
                          @endif

                        </div>

                        <div class="col-lg-12  my-2">
							<div class="form-group">
                                <div class="ml-3">
									<label class="form-label"> <strong class="text-secondary"> Tags: </strong> </label>
                                     @foreach ($tags as $tag )
                                           <div class="form-check form-check-inline">
                                             <input class="form-check-input" name="tags[]" type="checkbox" id="tag{{ $tag->tag_id }}" value="{{ $tag->tag_id }}"
                                             @foreach ($data->tags as $t )

                                           @if   (@checked(old($tag->tag_id, $t->tag_id))) @endif
                                                 {{--  @if($tag->post_id == $t->post_id) checked @endif  --}}
                                             @endforeach
                                             />
                                          <label for="tag{{ $tag->tag_id }}" class="form-check-label">{{ $tag->tag_name }} </label>
                                      </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-12  my-4">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Post details<span class="text-danger">*</span>: </strong> </label>
									<textarea type="text" class="form-control @error('post_details') is-invalid @enderror" name="post_details" id="editor"  value="{{ $data->post_details }}"></textarea>
                                </div>
                              @error('post_details')
                              <span class="text-danger"<strong>{{ $message }}</strong> </span>
                             @enderror
                           </div>
					    </div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-secondary w-md">update</button>
						</div>

					</div>
				</form>
			</div>
			<div class="card-footer border border-secondary"></div>
		</div>
	</div>
     @include('admin.includes.ckeditor')

         <script type="text/javascript">
    // Banner Image
    $('#feature_image_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#feature_image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
 @endsection

