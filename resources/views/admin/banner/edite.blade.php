  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Edite  Benner</h5>
          <a href="{{ route('banner.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>All Benner </a>
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
    <form method="POST" action="{{ route('banner.update',$datas->banner_id) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_title') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Banner Title <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('banner_title') is-invalid @enderror" name="banner_title" value="{{ $datas->banner_title }}">
                </div>
                @error('banner_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_mid_title') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Banner mid Title <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('banner_mid_title') is-invalid @enderror" name="banner_mid_title" value="{{ $datas->banner_mid_title }}">
                </div>
                 @error('banner_mid_title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_Sub_title') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Banner sub title<span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('banner_Sub_title') is-invalid @enderror" name="banner_Sub_title" value="{{ $datas->banner_Sub_title }}">
                </div>
                 @error('banner_Sub_title') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_button') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Banner button <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('banner_button') is-invalid @enderror" name="banner_button" value="{{ $datas->banner_button }}">
                </div>
                 @error('banner_button') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_url') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Banner url <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('banner_url') is-invalid @enderror" name="banner_url" value="{{ $datas->banner_url }}">
                </div>
                 @error('banner_url') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_order') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Banner order <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="number" class="form-control @error('banner_order') is-invalid @enderror" name="banner_order" value="{{ $datas->banner_order }}">
                </div>
                 @error('banner_order') <span class="invalid-feedback" role="alert"<strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('banner_image') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Banner Image <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="file" class="form-control @error('banner_image') is-invalid @enderror" id="banner_image_input" name="banner_image" value="{{ $datas->banner_image }}">
                </div>
                 @error('banner_image') <span class="invalid-feedback" role="alert"<strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

             <div class="col-lg-4 m-auto">
                @if($datas->banner_image)
                   <img id="banner_image_preview" src="{{ asset('uploads/banner/'.$datas->banner_image) }}"
                    alt="banner_image" class="img-fluid rounded" width="100" />
                @else
                   <img id="banner_image_preview" src="{{ asset('uploads/avatar.png') }}"
                    alt="banner_image" class="img-fluid rounded" width="100" />
                @endif
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

    <script type="text/javascript">
    // Banner Image
    $('#banner_image_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#banner_image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
 @endsection

