<!DOCTYPE html>
<html lang="en">


@include('website.includes.header')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Clients</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">Clients</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="img/banner/page-title2.png" class="position-absolute top-0 start-0" alt="...">
            <img src="img/banner/page-title1.png" class="position-absolute bottom-0 end-0" alt="...">
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </section>

        <!-- CLIENTS
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                    <h6 class="text-secondary"><span>Our Clients</span></h6>
                    <h2 class="mb-0 h1">Our trusted clients</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-1-6 mb-sm-1-9 wow fadeInUp" data-wow-delay=".2s">
                        <div class="clients-wrapper">
                            <a href="#!">
                                <img class="main-image" src="{{asset('contents/forntend')}}/img/partners/partner-01.png" alt="...">
                                <img class="hover-image" src="{{asset('contents/forntend')}}/img/partners/partner-02.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-6 mb-sm-1-9 wow fadeInUp" data-wow-delay=".4s">
                        <div class="clients-wrapper">
                            <a href="#!">
                                <img class="main-image" src="{{asset('contents/forntend')}}/img/partners/partner-03.png" alt="...">
                                <img class="hover-image" src="{{asset('contents/forntend')}}/img/partners/partner-04.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-6 mb-sm-1-9 wow fadeInUp" data-wow-delay=".6s">
                        <div class="clients-wrapper">
                            <a href="#!">
                                <img class="main-image" src="{{asset('contents/forntend')}}/img/partners/partner-05.png" alt="...">
                                <img class="hover-image" src="{{asset('contents/forntend')}}/img/partners/partner-06.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-6 mb-sm-1-9 mb-lg-0 wow fadeInUp" data-wow-delay=".8s">
                        <div class="clients-wrapper">
                            <a href="#!">
                                <img class="main-image" src="{{asset('contents/forntend')}}/img/partners/partner-07.png" alt="...">
                                <img class="hover-image" src="{{asset('contents/forntend')}}/img/partners/partner-08.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-1-6 mb-sm-0 wow fadeInUp" data-wow-delay="1s">
                        <div class="clients-wrapper">
                            <a href="#!">
                                <img class="main-image" src="{{asset('contents/forntend')}}/img/partners/partner-09.png" alt="...">
                                <img class="hover-image" src="{{asset('contents/forntend')}}/img/partners/partner-10.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="clients-wrapper">
                            <a href="#!">
                                <img class="main-image" src="{{asset('contents/forntend')}}/img/partners/partner-11.png" alt="...">
                                <img class="hover-image" src="{{asset('contents/forntend')}}/img/partners/partner-12.png" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL
        ================================================== -->
        <section class="bg-img cover-background" data-background="img/bg/bg-05.png">
            <div class="container">
                <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                    <h6 class="text-secondary"><span>Client’s love</span></h6>
                    <h2 class="mb-0 h1">Words from our clients</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme wow fadeInUp" data-wow-delay=".2s">
                    <div class="testimonial-wrapper pink">
                        <div class="testimonial-quote pink"></div>
                        <div class="testimonial-image">
                            <img src="{{asset('contents/forntend')}}/img/avatar/avatar-01.jpg" alt="...">
                        </div>
                        <p class="mb-3">A fulfilled client is one who will keep on purchasing from you, rarely look around, allude different clients and by and large be a whiz advocate for your business.</p>
                        <h4 class="h5 mb-1">Christy Stapleton</h4>
                        <p class="mb-0">Computer Programmer</p>
                    </div>
                    <div class="testimonial-wrapper purple">
                        <div class="testimonial-quote purple"></div>
                        <div class="testimonial-image">
                            <img src="{{asset('contents/forntend')}}/img/avatar/avatar-02.jpg" alt="...">
                        </div>
                        <p class="mb-3">Doing an amazing job includes making clients "feel extraordinary" and assisting them with excursion when it may not make sense. Quality is recalled long after the cost is failed to remember.</p>
                        <h4 class="h5 mb-1">Jens Ostergaard</h4>
                        <p class="mb-0">Mainframe Programmer</p>
                    </div>
                    <div class="testimonial-wrapper blue">
                        <div class="testimonial-quote blue"></div>
                        <div class="testimonial-image">
                            <img src="{{asset('contents/forntend')}}/img/avatar/avatar-03.jpg" alt="...">
                        </div>
                        <p class="mb-3">Understand what your clients need most and what your organization does best. Zero in on where those two meet. The client's discernment is your world.</p>
                        <h4 class="h5 mb-1">Mubin Bazzi</h4>
                        <p class="mb-0">Systems Programmer</p>
                    </div>
                    <div class="testimonial-wrapper yellow">
                        <div class="testimonial-quote yellow"></div>
                        <div class="testimonial-image">
                            <img src="{{asset('contents/forntend')}}/img/avatar/avatar-04.jpg" alt="...">
                        </div>
                        <p class="mb-3">We consider our to be as welcomed visitors to a gathering, and we are the hosts. It's our work each day to make each significant part of the client experience somewhat better.</p>
                        <h4 class="h5 mb-1">Cecilie Fleischer</h4>
                        <p class="mb-0">Applications Programmer</p>
                    </div>
                </div>
            </div>
        </section>
</body>

@include('website.includes.footer')

</html>
