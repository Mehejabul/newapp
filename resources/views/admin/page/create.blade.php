  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Create page</h5>
          <a href="{{ route('page.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All page</a>
        </div>

  <div class="card-body">

    @include('admin.includes.alert')

    <form method="POST" action="{{ route('page.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row" text-center>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('page_name') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> page name <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('page_name') is-invalid @enderror" name="page_name" value="">
                </div>
                @error('page_name')
                 <span><strong class="text-danger">{{ $message }}</strong></span>
                  @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('page_url') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> page url <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('page_url') is-invalid @enderror" name="page_url" value="">
                </div>
                 @error('page_url')
                    <span> <strong class="text-danger">{{ $message }}</strong> </span>
                 @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('page_order') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> page order <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="number" class="form-control @error('page_order') is-invalid @enderror" name="page_order" value="">
                </div>
                 @error('page_order')
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




