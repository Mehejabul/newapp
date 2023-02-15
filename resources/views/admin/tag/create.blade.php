  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Create Tag</h5>
          <a href="{{ route('tag.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All Tag </a>
        </div>

  <div class="card-body">

    @include('admin.includes.alert')

    <form method="POST" action="{{ route('tag.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row" text-center>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('tag_name') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Tag name <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name" value="">
                </div>
                @error('tag_name')
                 <span><strong class="text-danger">{{ $message }}</strong></span>
                  @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('tag_remarks') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Tag Remarks <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('tag_remarks') is-invalid @enderror" name="tag_remarks" value="">
                </div>
                 @error('tag_remarks')
                    <span> <strong class="text-danger">{{ $message }}</strong> </span>
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
 @endsection




