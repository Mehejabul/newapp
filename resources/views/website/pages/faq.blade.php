<!DOCTYPE html>
<html lang="en">
    @include('website.includes.header')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>FAQ</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">FAQ</a></li>
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

        <!-- FAQ
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".1s">
                    <h6 class="text-secondary"><span>FAQ</span></h6>
                    <h2 class="mb-0 h1">Ask me your questions</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 d-none d-lg-block wow fadeInLeft" data-wow-delay=".1s">
                        <img src="{{asset('contents/forntend')}}/img/content/contact.svg" alt="...">
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".1s">
                        <div id="accordion" class="accordion-style">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Where do I start my SEO technique?
                                    </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        You can do to begin your site's SEO on the correct foot – regardless of whether you can't employ you will hear at last around three sorts of connections and third party referencing strategies.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why SEO requires some energy before you see the advantages?
                                    </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        It's a fundamental piece of any effective showcasing procedure. First off, SEO represents website streamlining, and it's the cycle of What's more.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Does visitors have an effect on rankings?
                                    </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        Web optimization pulls in guests from web indexes, convenience is about transformation. Brand makes reference to on news locales can affect search rankings.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       For what reason is SEO significant?
                                    </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        This is a direct result of one vital explanation your SEO is something you can handle. There are numerous things about your business.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    For what reason my business need a developing web presence?
                                    </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        In case you're an entrepreneur vacillating about making a site, I'll save you some Your online presence additionally underpins advertising efforts, client care, customer relationship.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ FORM
        ================================================== -->
        <section class="bg-img bg-primary cover-background" data-background="{{asset('contents/forntend')}}/img/bg/bg-01.png">
            <div class="container">
                <div class="section-heading heading-white mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                    <h6 class="text-white"><span>get quote</span></h6>
                    <h2 class="mb-0 h1 text-white">Make an free consultant</h2>
                </div>
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".2s">
                    <div class="col-md-10 col-lg-9 faq-form">
                        <form class="quform" action="#" method="post" enctype="multipart/form-data" onclick="">

                                <div class="quform-elements">

                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="name">Your Name <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="email">Your Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <label for="message">Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="quform-captcha">
                                                        <div class="quform-captcha-inner">
                                                            <img src="quform/images/captcha/courier-new-light.png" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn butn-yellow" type="submit"><span>Send Message</span></button>
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
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </section>

        <!-- CONTACT INFO
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                    <h6 class="text-secondary"><span>contact us</span></h6>
                    <h2 class="mb-0 h1">We are here for you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-1-6 mb-md-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".2s">
                        <div class="bg-blue-opacity text-center p-1-9 rounded h-100">
                            <i class="fas fa-map-marker-alt text-blue display-22 display-sm-20 display-md-18 display-lg-17 display-xl-14 mb-3"></i>
                            <h3 class="h5 mb-2 mb-sm-3">Company Address</h3>
                            <span class="d-block mb-1 font-weight-500">74 Guild Street 542B</span>
                            <span class="font-weight-500">NewYork - USA</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-1-6 mb-md-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".4s">
                        <div class="bg-pink-opacity text-center p-1-9 rounded h-100">
                            <i class="far fa-clock text-pink display-22 display-sm-20 display-md-18 display-lg-17 display-xl-14 mb-3"></i>
                            <h3 class="h5 mb-2 mb-sm-3">Opening Hours</h3>
                            <span class="d-block mb-1 font-weight-500">Mon - Fri: 10:00am - 06:00pm</span>
                            <span class="font-weight-500">
                            Sat: 10:00am - 02.00pm</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="bg-purple-opacity text-center p-1-9 rounded h-100">
                            <i class="fas fa-mobile-alt text-purple display-22 display-sm-20 display-md-18 display-lg-17 display-xl-14 mb-3"></i>
                            <h3 class="h5 mb-2 mb-sm-3">Contact Directly</h3>
                            <span class="d-block mb-1 font-weight-500">info@yourdomain.com</span>
                            <span class="font-weight-500">(+44) 123 456 789</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>

@include('website.includes.footer')

</html>
