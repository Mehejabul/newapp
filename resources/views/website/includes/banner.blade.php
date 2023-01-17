<!-- BANNER ================================================== -->
<div class="main-banner bg-primary top-position position-relative">
            <div class="container">

                <div class="row">

                    <!-- left banner text -->

                    <div class="col-lg-6">
                        <div class="header-text w-md-75 w-lg-100 pb-5 pb-lg-0">
                            <h1 class="wow fadeInUp text-white mb-4 display-lg-8 w-xl-90" data-wow-delay=".1s">{{ $baner->banner_title }}</h1>
                            <p class="mb-lg-2-0 w-90 w-md-80 opacity9 wow fadeInUp text-white" data-wow-delay=".2s">{{ $baner->banner_Sub_title }}</p>
                            <div class="wow fadeInUp" data-wow-delay=".4s"><a href="#!" class="butn white me-2 align-middle"><span>{{ $baner->banner_button }}</span></a>
                                <a class="popup-youtube" href="{{ $baner->banner_url }}">
                                    <span class="btn-play-theme video_btn align-middle"><i class="fa fa-play"></i></span></a></div>
                        </div>
                    </div>
                    <!-- end banner text -->

                    <!-- right image banner -->
                    <div class="col-lg-6 text-center text-lg-end position-relative">
                        <div class="banner-img">
                         <img style="width:600px; height:520px;" src="{{asset('uploads/banner/')}}/{{ $baner->banner_image }}" alt="...">
                        </div>
                    </div>
                    <!-- end right image banner -->

                </div>

            </div>
            <div class="position-absolute top-0 start-0">
                <img src="{{asset('contents/forntend')}}/img/bg/bg-07.png" alt="...">
            </div>
            <div class="position-absolute top-0 end-0">
                <img src="{{asset('contents/forntend')}}/img/bg/bg-08.png" alt="...">
            </div>
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>

            <!-- shape area -->
            <div class="header-shape d-none d-sm-block">
                <img src="{{asset('contents/forntend')}}/img/bg/bg-04.png" class="img-fluid w-100" alt="...">
            </div>
            <!-- end shape area -->

        </div>
