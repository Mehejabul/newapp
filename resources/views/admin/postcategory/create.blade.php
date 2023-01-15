  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Create Post category</h5>
          <a href="{{ route('post.category.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All Category </a>
        </div>

  <div class="card-body">

    @include('admin.includes.alert')

    <form method="POST" action="{{ route('post.category.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row" text-center>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('postcate_name') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Post Category name <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('postcate_name') is-invalid @enderror" name="postcate_name" value="">
                </div>
                @error('postcate_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('postcate_remarks') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Post Category Remarks <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('postcate_remarks') is-invalid @enderror" name="postcate_remarks" value="">
                </div>
                 @error('postcate_remarks') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-10  my-2">
              <div class="form-group" {{$errors->has('postcate_url') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Post Category url<span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('postcate_url') is-invalid @enderror" name="postcate_url" value="">
                </div>
                 @error('postcate_url') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span> @enderror
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
 @endsection




