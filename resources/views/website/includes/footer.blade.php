 <!-- FOOTER ================================================== -->
        <footer class="pt-22 pt-md-24 bg-primary footer-style1 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-2-5 mb-lg-0">
                        <div class="w-80 mb-1-6 mb-lg-1-9">

                             @php
                                 $datas = App\Models\BasicSetting::where('basic_status',1)->where('basic_id',1)->firstorFail();
                             @endphp

                            <img src="{{asset('uploads/settings/footer_logo/')}}/{{ $datas->basic_flogo }}" alt="...">
                        </div>
                        <p class="text-white">
                             {{ $datas->basic_ftext }}
                        </p>

                        @php
                             $socils = App\Models\SocialInfo::where('sm_status',1)->where('sm_id',1)->firstorFail();
                        @endphp
                        <ul class="footer-social-icon ps-0 mb-0">
                            <li><a href="{{ $socils->sm_facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $socils->sm_twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $socils->sm_youtube }}"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="{{ $socils->sm_linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-2-5 mb-lg-0">
                        <div class="ps-lg-2-5">
                            <h3 class="footer-title">Quick Links</h3>
                            <ul class="footer-list ps-0 mb-0">
                                <li><a href="{{ route('blog.about') }}">About Us</a></li>
                                <li><a href="case-studies-fullwidth.html">Case Study</a></li>
                                <li><a href="blog-grid.html">Our Blog</a></li>
                                <li><a href="services.html">Our Services</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-2-5 mb-md-0">
                        <div>
                            <h3 class="footer-title">Services</h3>
                            <ul class="footer-list ps-0 mb-0">
                                <li><a href="#!">Web Analytics</a></li>
                                <li><a href="#!">Social Marketing</a></li>
                                <li><a href="seo-marketing.html">SEO Marketing</a></li>
                                <li><a href="#!">SMM Marketing</a></li>
                                <li><a href="#!">Web Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div>
                            <h3 class="footer-title">Our Newsletter</h3>
                            <p class="alt-font text-white">{{ $datas->basic_newstext }}</p>
                            <form class="quform newsletter-footer" action="{{ route('newsleter.store') }}" method="post" enctype="multipart/form-data" onclick="">
                                @csrf
                                <div class="quform-elements">
                                    <div class="row">
                                        <!-- Begin Text input element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="quform-input">
                                                    <input class="form-control" id="email_address" type="text" name="email" placeholder="Subscribe with us">
                                                </div>
                                                 @error('email')
                                                      <span class="text-danger">{{ $message }}</span>
                                                 @enderror
                                            </div>
                                        </div>
                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="btn btn-white text-primary-color m-0 px-2" type="submit"><i class="fas fa-paper-plane"></i></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-bar border-top border-color-light-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="mb-0 text-white">&copy; 2021 SEO Powered by <a href="https://www.chitrakootweb.com/" target="_blank" class="text-white">Chitrakoot Web</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('contents/forntend')}}/img/bg/bg-09.png" class="position-absolute top-0 start-0" alt="...">
            <img src="{{asset('contents/forntend')}}/img/bg/bg-02.png" class="position-absolute bottom-0 end-0" alt="...">
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </footer>


 <!-- all js include start -->
     {{--  sweetAlert  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    @if(Session::has('success'))
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    })
    @elseif(Session::has('error'))
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
})
@endif
</script>


    <!-- jquery -->
    <script src="{{asset('contents/forntend')}}/js/core.min.js"></script>

    <!-- Search -->
    <script src="{{asset('contents/forntend')}}/search/search.js"></script>

    <!-- custom scripts -->
    <script src="{{asset('contents/forntend')}}/js/main.js"></script>

    <!-- form plugins js -->
    <script src="{{asset('contents/forntend')}}/quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="{{asset('contents/forntend')}}/quform/js/scripts.js"></script>

    <!-- all js include end -->



