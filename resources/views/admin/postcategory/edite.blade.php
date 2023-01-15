  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Edite Post category</h5>
          <a href="{{ route('post.category.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All Category </a>
        </div>

  <div class="card-body">
     @if(Session::has('success'))
        <script>
            swal({
              title: 'success!',
              text: "{{ Session::get('success')}}",
              icon = 'success',
              timer: 5000
            });
          </script>
      @endif

      @if (Session::has('error'))
         <script>
            swal({
              title: 'error!'
              text: "{{ Session::get('error')}}",
              icon = 'error',
              timer: 5000
            });
          </script>
        @endif
    <form method="POST" action="{{ route('post.category.update', $data->postcate_slug) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row" text-center>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('postcate_name') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Post Category name <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('postcate_name') is-invalid @enderror" name="postcate_name" value="{{ $data->postcate_name }}">
                </div>
                @error('postcate_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('postcate_remarks') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Post Category Remarks: </strong>
                  </label>
                  <input type="text" class="form-control @error('postcate_remarks') is-invalid @enderror" name="postcate_remarks" value="{{ $data->postcate_remarks }}">
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
                  <input type="text" class="form-control @error('postcate_url') is-invalid @enderror" name="postcate_url" value="{{ $data->postcate_url }}">
                </div>
                 @error('postcate_url') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span> @enderror
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
 @endsection

