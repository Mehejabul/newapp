  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Edit Users</h5>
          <a href="{{ route('user.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All User </a>
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
    <form method="POST" action="{{ route('user.update', $edit_user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('name') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Full Name <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="name" value="{{ $edit_user['name'] }}">
                </div>
                @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('email') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Email <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="email" class="form-control @error('product_name') is-invalid @enderror" name="email" value="{{ $edit_user['email'] }}">
                </div>
                 @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('phone') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Phone <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="phone" class="form-control @error('product_name') is-invalid @enderror" name="phone" value="{{ $edit_user['phone'] }}">
                </div>
                 @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('role') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Role <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="number" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $edit_user['role'] }}">
                </div>
                 @error('role') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

               <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('photo') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">User Photo <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="">
                </div>
                 @error('photo') <span class="invalid-feedback" role="alert"<strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-secondary w-md">Submit</button>
            </div>

            </div>
        </form>

        </div>
          <div class="card-footer border border-secondary"></div>
      </div>
    </div>
 @endsection
