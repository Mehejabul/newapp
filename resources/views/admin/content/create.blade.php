@extends('layouts.admin') @section('content')
<div class="row">
	<div class="col-12">
		<div class="card border border-secondary">
			<div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
				<h5 class="card-title">Create content</h5>
				<a href="{{ route('content.index') }}" class="btn btn-secondary"> <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All content </a>
			</div>
			<div class="card-body">

                 @include('admin.includes.alert')

				<form method="POST" action="{{ route('content.store') }}" enctype="multipart/form-data">
                     @csrf

					<div class="row" text-center>

                        @php
                            $pages = App\Models\Page::where('page_status',1)->get();
                        @endphp

						<div class="col-lg-6 my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> page id <span class="text-danger">*</span>: </strong> </label>
									<select type="number" class="form-control @error('page_id') is-invalid @enderror" name="page_id" value="1">
                                        <option label="Select page name"></option>

                                        @foreach ($pages as $page)
                                             <option value="{{ $page->page_id }}"> {{ $page->page_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                 @error('page_id')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
				       </div>

						 <div class="col-lg-6 my-2">
							<div class="form-group" >
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> content title <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('content_title') is-invalid @enderror" name="content_title" value="">
                                </div>
                                @error('content_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                           </div>
					    </div>

                        <div class="col-lg-6  my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> content subtitle <span class="text-danger">*</span>: </strong> </label>
									<input type="text" class="form-control @error('content_subtitle') is-invalid @enderror" name="content_subtitle" value="">
                                </div>
                              @error('content_subtitle')
                               <span class="text-danger">{{ $message }}</span> @enderror
                           </div>
					    </div>


                        <div class="col-lg-4  my-2">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> content image: </strong> </label>
									<input type="file" class="form-control @error('content_image') is-invalid @enderror" id="content_image_input" name="content_image" value="">
                                </div>
                           </div>
					    </div>

                        <div class="col-lg-2 m-auto">
                           <img id="content_image_preview" src="{{ asset('uploads/avatar.png') }}"
                           alt="banner_image" class="img-fluid rounded" width="100" />
                        </div>

                         <div class="col-lg-12  my-4">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label"> <strong class="text-secondary"> content details<span class="text-danger">*</span>: </strong> </label>
									<textarea type="text" class="form-control @error('content_details') is-invalid @enderror" name="content_details" id="editor"  value=""></textarea>
                                </div>
                              @error('content_details')
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
    $('#content_image_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#content_image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
 @endsection
