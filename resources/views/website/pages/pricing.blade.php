<!DOCTYPE html>
<html lang="en">

@include('website.includes.header')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Pricing</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">Pricing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="{{asset('contents/forntend')}}/img/banner/page-title2.png" class="position-absolute top-0 start-0" alt="...">
            <img src="{{asset('contents/forntend')}}/img/banner/page-title1.png" class="position-absolute bottom-0 end-0" alt="...">
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </section>

        <!-- PRICING
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                    <h6 class="text-secondary"><span>Best Pricing</span></h6>
                    <h2 class="mb-0 h1">Choose your pricing plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".2s">
                        <div class="card-style3 card border-0">
                            <div class="card-body p-0">
                                <span class="title-table bg-light-pink">basic</span>
                                <div class="mb-1-9">
                                    <img class="w-50 w-sm-30 w-md-50 w-lg-60" src="{{asset('contents/forntend')}}/img/icons/icon-01.svg" alt="...">
                                </div>
                                <div class="pricing">
                                    <p class="price text-light-pink"><sup>$</sup>79</p>
                                    <p class="text-light-pink">Monthly Package</p>
                                </div>
                                <div class="mb-1-9">
                                    <ul class="card-list ps-0">
                                        <li><a href="#!">SERP Analyzer</a></li>
                                        <li><a href="#!">Content Editor</a></li>
                                        <li><a href="#!">Site Explorer</a></li>
                                        <li><a href="#!">NLP Analysis</a></li>
                                    </ul>
                                </div>
                                <a href="#!" class="butn butn-light-pink m-0"><span>Get Started Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-style3 card border-0">
                            <div class="card-body p-0">
                                <span class="title-table bg-yellow">pro</span>
                                <div class="mb-1-9">
                                    <img class="w-50 w-sm-30 w-md-50 w-lg-60" src="{{asset('contents/forntend')}}/img/icons/icon-02.svg" alt="...">
                                </div>
                                <div class="pricing">
                                    <p class="price text-yellow"><sup>$</sup>179</p>
                                    <p class="text-yellow">Monthly Package</p>
                                </div>
                                <div class="mb-1-9">
                                    <ul class="card-list ps-0">
                                        <li><a href="#!">SERP Analyzer</a></li>
                                        <li><a href="#!">Content Editor</a></li>
                                        <li><a href="#!">Site Explorer</a></li>
                                        <li><a href="#!">NLP Analysis</a></li>
                                    </ul>
                                </div>
                                <a href="#!" class="butn butn-yellow m-0"><span>Get Started Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                        <div class="card-style3 card border-0">
                            <div class="card-body p-0">
                                <span class="title-table bg-blue">business</span>
                                <div class="mb-1-9">
                                    <img class="w-50 w-sm-30 w-md-50 w-lg-60" src="{{asset('contents/forntend')}}/img/icons/icon-03.svg" alt="...">
                                </div>
                                <div class="pricing">
                                    <p class="price text-blue"><sup>$</sup>279</p>
                                    <p class="text-blue">Monthly Package</p>
                                </div>
                                <div class="mb-1-9">
                                    <ul class="card-list ps-0">
                                        <li><a href="#!">SERP Analyzer</a></li>
                                        <li><a href="#!">Content Editor</a></li>
                                        <li><a href="#!">Site Explorer</a></li>
                                        <li><a href="#!">NLP Analysis</a></li>
                                    </ul>
                                </div>
                                <a href="#!" class="butn butn-blue m-0"><span>Get Started Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

@include('website.includes.footer')

</html>
