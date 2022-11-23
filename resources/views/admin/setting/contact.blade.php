  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Contact Information</h5>
          <a href="{{ route('manage.basic.index') }}" class="btn btn-secondary">
            <i class="fa fa-list-circle me-2" aria-hidden="true"></i>Basic Setting</a>
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
    <form method="POST" action="{{ route('contact.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
              <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_phone1') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-phone" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('cont_phone1') is-invalid @enderror" name="cont_phone1" value="{{ $data->cont_phone1 }}">
                                   @error('cont_phone1') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_phone2') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-phone" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('cont_phone2') is-invalid @enderror" name="cont_phone2" value="{{ $data->cont_phone2 }}">
                                   @error('cont_phone2') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_phone3') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-phone" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('cont_phone3') is-invalid @enderror" name="cont_phone3" value="{{ $data->cont_phone3 }}">
                                   @error('cont_phone3') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_phone4') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-phone" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('cont_phone4') is-invalid @enderror" name="cont_phone4" value="{{ $data->cont_phone4 }}">
                                   @error('cont_phone4') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_email1') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>
                                     </span>
                                  <input type="email" class="form-control @error('cont_email1') is-invalid @enderror" name="cont_email1" value="{{ $data->cont_email1}}">
                                   @error('cont_email1') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_email2') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>
                                     </span>
                                  <input type="email" class="form-control @error('cont_email2') is-invalid @enderror" name="cont_email2" value="{{ $data->cont_email2 }}">
                                   @error('cont_email2') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_email3') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>
                                     </span>
                                  <input type="email" class="form-control @error('cont_email3') is-invalid @enderror" name="cont_email3" value="{{ $data->cont_email3 }}">
                                   @error('cont_email3') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_email4') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>
                                     </span>
                                  <input type="email" class="form-control @error('cont_email4') is-invalid @enderror" name="cont_email4" value="{{ $data->cont_email4}}">
                                   @error('cont_email4') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_add1') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                                     </span>
                                  <textarea type="text" class="form-control @error('cont_add1') is-invalid @enderror" name="cont_add1">{{ $data->cont_add1}}</textarea>
                                   @error('cont_add1') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_add2') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                                     </span>
                                  <textarea type="text" class="form-control @error('cont_add2') is-invalid @enderror" name="cont_add2">{{ $data->cont_add2 }}</textarea>
                                   @error('cont_add2') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_add3') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                                     </span>
                                  <textarea type="text" class="form-control @error('cont_add3') is-invalid @enderror" name="cont_add3">{{ $data->cont_add3}}</textarea>
                                   @error('cont_add3') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('cont_add4') ? ' has-error':''}}">
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                                     </span>
                                  <textarea type="text" class="form-control @error('cont_add4') is-invalid @enderror" name="cont_add4">{{ $data->cont_add4 }}</textarea>
                                   @error('cont_add4') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                   <div class="form-group text-center pb-4">
                  <button type="submit" class="btn btn-secondary w-md">update</button>
            </div>
        </div>

       </form>
         </div>
             <div class="card-footer border border-secondary">
             </div>
         </div>
    </div>
 </div>
 @endsection



