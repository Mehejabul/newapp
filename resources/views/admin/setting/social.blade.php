  @extends('layouts.admin')
    @section('content')
 <div class="row">
    <div class="col-12">
      <div class="card border border-secondary">
        <div class="card-header bg-transparent border-secondary d-flex justify-content-between ">
          <h5 class="card-title">Basic Information</h5>
          <a href="{{ route('banner.index') }}" class="btn btn-secondary">
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
    <form method="POST" action="{{ route('social.media.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
              <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_facebook') ? ' has-error':''}}">
                             <label><strong>Facebook </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-facebook" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_facebook') is-invalid @enderror" name="sm_facebook" value="{{ $data->sm_facebook }}">
                                   @error('sm_facebook') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_twitter') ? ' has-error':''}}">
                             <label><strong> Twitter </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-twitter" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_twitter') is-invalid @enderror" name="sm_twitter" value="{{ $data->sm_twitter }}">
                                   @error('sm_twitter') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_linkedin') ? ' has-error':''}}">
                             <label><strong> Linkedin </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-linkedin" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_linkedin') is-invalid @enderror" name="sm_linkedin" value="{{ $data->sm_linkedin }}">
                                   @error('sm_linkedin') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_dribble') ? ' has-error':''}}">
                             <label><strong> Dribble </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-dribbble" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_dribble') is-invalid @enderror" name="sm_dribble" value="{{ $data->sm_dribble }}">
                                   @error('sm_dribble') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_youtube') ? ' has-error':''}}">
                             <label><strong> Youtube </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-youtube" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_youtube') is-invalid @enderror" name="sm_youtube" value="{{ $data->sm_youtube }}">
                                   @error('sm_youtube') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_slack') ? ' has-error':''}}">
                             <label><strong> Slack </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-slack" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_slack') is-invalid @enderror" name="sm_slack" value="{{ $data->sm_slack }}">
                                   @error('sm_slack') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                 <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_instagram') ? ' has-error':''}}">
                             <label><strong> Instagram </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-instagram" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_instagram') is-invalid @enderror" name="sm_instagram" value="{{ $data->sm_instagram }}">
                                   @error('sm_instagram') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_behance') ? ' has-error':''}}">
                             <label><strong> Behance </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-behance" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_behance') is-invalid @enderror" name="sm_behance" value="{{ $data->sm_behance }}">
                                   @error('sm_behance') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_google') ? ' has-error':''}}">
                             <label><strong> Google </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-google" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_google') is-invalid @enderror" name="sm_google" value="{{ $data->sm_google }}">
                                   @error('sm_google') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                                </div>
                        </div>
                </div>
                <div class="col-md-6">
                     <div class="form-group pb-2 {{$errors->has('sm_raddit') ? ' has-error':''}}">
                             <label><strong> Raddit </strong> </label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text" id="basic-addon1">
                                          <i class="fab fa-reddit" aria-hidden="true"></i>
                                     </span>
                                  <input type="text" class="form-control @error('sm_raddit') is-invalid @enderror" name="sm_raddit" value="{{ $data->sm_raddit }}">
                                   @error('sm_raddit') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
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



