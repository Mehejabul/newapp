  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Basic Information</h5>
          <a href="{{ route('social.media.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>Social Media</a>
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
    <form method="POST" action="{{ route('manage.basic.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('basic_company	') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Company Name <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('basic_company') is-invalid @enderror" name="basic_company" value="{{ $datas->basic_company }}">
                </div>
                @error('basic_company') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>

            <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('basic_title') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Basic title <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="text" class="form-control @error('basic_title') is-invalid @enderror" name="basic_title" value="{{ $datas->basic_title }}">
                </div>
                 @error('basic_title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

            <div class="col-lg-4 my-2">
              <div class="form-group" {{$errors->has('basic_logo') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Basic logo <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="file" class="form-control @error('basic_logo') is-invalid @enderror" id="basic_image_input" name="basic_logo" value="{{ $datas->basic_logo }}">
                </div>
                 @error('basic_logo') <span class="invalid-feedback" role="alert"<strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

             <div class="col-lg-2 m-auto">
                @if($datas->basic_logo)
                   <img id="basic_image_preview" src="{{ asset('uploads/settings/header_logo/'.$datas->basic_logo) }}"
                    alt="banner_image" class="img-fluid rounded" width="200" />
                @else
                   <img id="basic_image_preview" src="{{ asset('uploads/avatar.png') }}"
                    alt="basic_image" class="img-fluid rounded" width="200" />
                @endif
              </div>

              <div class="col-lg-4 my-2">
              <div class="form-group" {{$errors->has('basic_flogo') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Basic footerlogo: </strong>
                  </label>
                  <input type="file" class="form-control @error('basic_flogo') is-invalid @enderror" id="footer_logo_input" name="basic_flogo" value="{{ $datas->basic_flogo }}">
                </div>
                 @error('basic_flogo') <span class="invalid-feedback" role="alert"<strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

             <div class="col-lg-2 m-auto">
                @if($datas->basic_flogo)
                   <img id="footer_logo_preview" src="{{ asset('uploads/settings/footer_logo/'.$datas->basic_flogo) }}"
                    alt="banner_image" class="img-fluid rounded" width="100" height="100" />
                @else
                   <img id="footer_logo_preview" src="{{ asset('uploads/avatar.png') }}"
                    alt="logo_image" class="img-fluid rounded" width="100" />
                @endif
              </div>

             <div class="col-lg-4 my-2">
              <div class="form-group" {{$errors->has('basic_favicon') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary"> Basic Favicon <span class="text-danger">*</span>: </strong>
                  </label>
                  <input type="file" class="form-control @error('basic_favicon') is-invalid @enderror" id="fav_icon_input" name="basic_favicon" value="{{ $datas->basic_favicon }}">
                </div>
                 @error('basic_favicon') <span class="invalid-feedback" role="alert"<strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

             <div class="col-lg-2 m-auto">
                @if($datas->basic_favicon)
                   <img id="footer_image_preview" src="{{ asset('uploads/settings/favicon/'.$datas->basic_favicon) }}"
                    alt="footer_image" class="img-fluid rounded" width="100" />
                @else
                   <img id="fav_icon_preview" src="{{ asset('uploads/avatar.png') }}"
                    alt="footer_image" class="img-fluid rounded" width="100" />
                @endif
              </div>

              <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('basic_ftext') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Basic Footer text: </strong>
                  </label>
                  <textarea type="text" class="form-control @error('basic_ftext') is-invalid @enderror" name="basic_ftext">{{ $datas->basic_ftext }}</textarea>
                </div>
                 @error('basic_ftext') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>

              <div class="col-lg-6 my-2">
              <div class="form-group" {{$errors->has('basic_newstext') ? ' has-error':''}}>
                <div class="mb-3">
                  <label class="form-label">
                    <strong class="text-secondary">Basic News text: </strong>
                  </label>
                  <textarea type="text" class="form-control @error('basic_newstext') is-invalid @enderror" name="basic_newstext">{{ $datas->basic_newstext }}</textarea>
                </div>
                 @error('basic_newstext') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
              </div>
            </div>



            <div class="form-group">
              <button type="submit" class="btn btn-secondary w-md">update</button>
            </div>

         </div>
     </form>

        </div>
          <div class="card-footer border border-secondary"></div>
      </div>
    </div>

    <script type="text/javascript">
    // headerlogo
    $('#basic_image_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#basic_image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
    <script type="text/javascript">
    // footer_logo
    $('#footer_logo_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#footer_logo_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
   <script type="text/javascript">
    // footer_logo
    $('#fav_icon_input').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#fav_icon_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
 @endsection


										<span class="input-group-text">@</span>
										<input type="text" class="form-control" placeholder="Username">
