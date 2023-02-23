@extends('layouts.admin')
 @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">editereviewer</h5>
				<a href="{{ route('review.index') }}" class="btn btn-secondary"> <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All rivew </a>
			</div>
			<div class="card-body">

                 @include('admin.includes.alert')

				<form method="POST" action="{{ route('review.update',$data->reviewer_slug) }}" enctype="multipart/form-data">
                    @method('put')
                     @csrf
            <div class="row" class="text-center">
						 <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Name <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('reviewer_name') is-invalid @enderror" name="reviewer_name" value="{{ $data->reviewer_name }}">
                                </div>
                                @error('reviewer_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Facebook: <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('reviewer_facebook') is-invalid @enderror" name="reviewer_facebook" value="{{ $data->reviewer_facebook }}">
                                </div>
                                @error('reviewer_facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Twitter: </strong> </label>
									<input type="text" class="form-control @error('reviewer_twitter') is-invalid @enderror" name="reviewer_twitter" value="{{ $data->reviewer_twitter }}">
                                </div>
                                @error('reviewer_twitter')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> instagram: <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('reviewer_instagram') is-invalid @enderror" name="reviewer_instagram" value="{{ $data->reviewer_instagram  }}">
                                </div>
                                @error('reviewer_instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> youtube: <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('reviewer_youtube') is-invalid @enderror" name="reviewer_youtube" value="{{ $data->reviewer_youtube }}">
                                </div>
                                @error('reviewer_youtube')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-4  my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Image: </strong> </label>
									<input type="file" class="form-control @error('reviewer_image') is-invalid @enderror" id="reviewer_image_input" name="reviewer_image" value="{{ $data->reviewer_image }}">
                                </div>
                           </div>
					    </div>

                        <div class="col-lg-2 m-auto">
                            @if($data->reviewer_image)
                           <img id="reviewer_image_preview" src="{{ asset('uploads/review/'.$data->reviewer_image) }}"
                           alt="review_image" class="img-fluid rounded" width="100" />
                            @else
                           <img id="reviewer_image_preview" src="{{ asset('uploads/avatar.png') }}"
                           alt="review_image" class="img-fluid rounded" width="100" />
                           @endif
                        </div>



                         <div class="col-lg-12  my-4">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> Post details<span class="text-danger">*</span>: </strong> </label>
									<textarea type="text" class="form-control @error('reviewer_description') is-invalid @enderror" name="reviewer_description" id="editor">{{ $data->reviewer_description }}</textarea>
                                </div>
                              @error('reviewer_description')
                              <span class="text-danger"<strong>{{ $message }}</strong> </span>
                             @enderror
                           </div>
					    </div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-secondary w-md">Submit</button>
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
    $('#reviewer_image_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#reviewer_image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
 @endsection
