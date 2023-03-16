<!DOCTYPE html>
<html lang="en">
@include('website.includes.header')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section top-position bg-primary">
    <div class="container z-index-1 position-relative">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Contacts</h1>
            </div>
            <div class="col-md-12">
                <ul class="mb-0 ps-0">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a class="dot-divider"></a></li>
                    <li><a href="#!">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <img src="{{ asset('contents/forntend') }}/img/banner/page-title2.png" class="position-absolute top-0 start-0"
        alt="...">
    <img src="{{ asset('contents/forntend') }}/img/banner/page-title1.png" class="position-absolute bottom-0 end-0"
        alt="...">
    <div class="home_bubble">
        <div class="square-shape2"></div>
        <div class="bubble b_three"></div>
        <div class="square-shape1 d-none d-sm-block"></div>
        <div class="bubble b_six d-none d-sm-block"></div>
    </div>
</section>

<!-- CONTACT INFO
        ================================================== -->
<section class="pb-0">
    <div class="container">
        <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
            <h6 class="text-secondary"><span>get in touch</span></h6>
            <h2 class="mb-0 h1">Ready to get started?</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-1-6 mb-md-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".2s">
                <div class="bg-blue-opacity text-center p-1-9 rounded h-100">
                    <i
                        class="fas fa-map-marker-alt text-blue display-22 display-sm-20 display-md-18 display-lg-17 display-xl-14 mb-3"></i>
                    <h3 class="h5 mb-2 mb-sm-3">Company Address</h3>
                    <span class="d-block mb-1 font-weight-500">74 Guild Street 542B</span>
                    <span class="font-weight-500">NewYork - USA</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-1-6 mb-md-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".4s">
                <div class="bg-pink-opacity text-center p-1-9 rounded h-100">
                    <i
                        class="far fa-clock text-pink display-22 display-sm-20 display-md-18 display-lg-17 display-xl-14 mb-3"></i>
                    <h3 class="h5 mb-2 mb-sm-3">Opening Hours</h3>
                    <span class="d-block mb-1 font-weight-500">Mon - Fri: 10:00am - 06:00pm</span>
                    <span class="font-weight-500">
                        Sat: 10:00am - 02.00pm</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="bg-purple-opacity text-center p-1-9 rounded h-100">
                    <i
                        class="fas fa-mobile-alt text-purple display-22 display-sm-20 display-md-18 display-lg-17 display-xl-14 mb-3"></i>
                    <h3 class="h5 mb-2 mb-sm-3">Contact Directly</h3>
                    <span class="d-block mb-1 font-weight-500">demo@example.com</span>
                    <span class="font-weight-500">54786547521</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP
        ================================================== -->
<section>
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="map-wrapper">
                    <iframe width="100%" height="350" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM
        ================================================== -->
<section class="pt-0 overflow-visible">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="pr-lg-1-6">
                    <figure class="mb-0">
                        <img src="{{ asset('contents/forntend') }}/img/content/contact.svg" alt="...">
                    </figure>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="contact-wrapper">
                    <h3 class="h4 mb-1-6">Drop us a line</h3>

                    <form class="quform" action="{{ route('contact_page.store') }}" method="post"
                        enctype="multipart/form-data" onclick="">
                        @csrf

                        <div class="quform-elements">

                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element">
                                        <label for="name">Your Name <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Your name here" />
                                        </div>
                                         @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element">
                                        <label for="email">Your Email <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email"
                                                placeholder="Your email here" />
                                        </div>
                                         @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element">
                                        <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject"
                                                placeholder="Your subject here" />
                                        </div>
                                     @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element">
                                        <label for="phone">Contact Number</label>
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone"
                                                placeholder="Your phone here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element">
                                        <label for="message">Message <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <textarea class="form-control" id="message" name="message" rows="3"
                                                placeholder="Tell us a few words"></textarea>
                                        </div>
                                         @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn" type="submit"><span>Send Message</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                    </div>
                                </div>
                                <!-- End Submit button -->

                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.includes.footer')
</body>

</html>
