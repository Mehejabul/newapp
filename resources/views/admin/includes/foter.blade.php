	<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<ul class="list-inline">
								<li class="list-inline-item"> <a class="text-muted" href="#">Support</a> </li>
								<li class="list-inline-item"> <a class="text-muted" href="#">Help Center</a> </li>
								<li class="list-inline-item"> <a class="text-muted" href="#">Privacy</a> </li>
								<li class="list-inline-item"> <a class="text-muted" href="#">Terms of Service</a> </li>
							</ul>
						</div>
						<div class="col-6 text-end">
							<p class="mb-0"> &copy; 2022 - <a href="index.html" class="text-muted">AppStack</a> </p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>

//selector 2 script
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
         $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
     });
</script>

//   Tostr js Start

{{-- toaster.min.js --}}

     <script src="{{asset('contents/admin')}}/assets/libs/toastr/toastr.min.js"></script>

{{-- Toster.int. js --}}

<script src="{{asset('contents/admin')}}/assets/js/pages/toastr.init.js"></script>

{{-- NOTIFICATION START --}}

<script>
    @if(Session::has('success'))
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.success("{{ session('success') }}");
    @endif
    @if(Session::has('info'))
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.info("{{ session('info') }}");
    @endif
    @if(Session::has('warning'))
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.warning("{{ session('warning') }}");
    @endif
    @if(Session::has('error'))
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.error("{{ session('error') }}");
    @endif
</script>

// Toastr end

	<script src="{{asset('contents/admin')}}/js/app.js"></script>


