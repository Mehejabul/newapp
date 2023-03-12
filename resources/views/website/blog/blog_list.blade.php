<!DOCTYPE html>
<html lang="en">


@include('website.includes.header')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Blog List</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">Blog List</a></li>
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

        <!-- BLOG LIST
        ================================================== -->
        <section class="blog-list">
            <div class="container">
                <div class="row">
                    <!-- blog left -->
                    <div class="col-lg-8 col-md-12 mb-6 mb-lg-0">
                        <div class="row">
                            @foreach ($posts as $post )
                            <div class="col-lg-12 mb-1-6 mb-md-1-9">
                                <article class="card card-style2 border-none">
                                    <div class="card-img">
                                        <img style="width:100%;height:460px;" src="{{asset('uploads/post')}}/{{ $post->post_feature_image }}" alt="..." img-fluid>
                                    </div>
                                    <div class="blog-info-tag">
                                        <div class="text-end"><a href="#!" class="bg-light-pink">{{ $post->postcategory->postcate_name }}</a></div>
                                    </div>
                                    <div class="card-body">
                                        <small class="font-weight-500">{{ $post->created_at->format("d Y M") }}</small>
                                        <h3 class="h4 mt-2 mb-3">
                                            <a href="{{ route('blog.detail',['slug' => $post->post_slug]) }}">{{ $post->post_title }}</a></h3>
                                        <p class="mb-3">{!! Str::limit($post->post_details, 200) !!}</p>
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                               <img style="height: 80px; width:80px;" src="{{asset('uploads/user/image/')}}/{{ $users->photo }}" alt="...">
                                            </div> <span class="text-light-pink">{{ $post->creator->name }}</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                             @endforeach
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- start pager  -->
                                <div class="text-center mt-6 mt-lg-7">
                                    <div class="pagination text-extra-dark-gray">
                                        <ul>
                                            <li><a href="#!"><i class="fas fa-long-arrow-alt-left"></i> </a></li>
                                            <li class="active"><a href="#!">1</a></li>
                                            <li><a href="#!">2</a></li>
                                            <li><a href="#!">3</a></li>
                                            <li><a href="#!"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end pager -->
                            </div>
                        </div>
                    </div>
                    <!-- end blog left -->

                    <!-- blog right -->
                    <div class="col-lg-4 col-md-12">
                        <div class="ps-lg-1-6 ps-xl-1-9">
                            <div class="side-bar">
                                <div class="widget">
                                    <h6 class="widget-title">Search</h6>
                                    <form action="#!" class="search-bar">
                                        <input type="search" name="search" placeholder="Type here ..." />
                                        <a href="#!" class="btn-newsletter"><i class="far fa-paper-plane"></i></a>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Reviews</h6>
                                    <div class="owl-carousel owl-theme client-carousel">
                                        <div class="text-center">
                                            <div class="mb-3">
                                                <img class="rounded-circle" src="{{ asset('contents/forntend') }}/img/avatar/avatar-06.jpg" alt="...">
                                            </div>
                                            <h3 class="h5"><a href="#!">Rebecca Harrison</a></h3>
                                            <p>I don't always clop, but when I do, it's because of digital marketing.</p>
                                            <ul class="social-icons ps-0">
                                                <li>
                                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">
                                                <img class="rounded-circle" src="{{ asset('contents/forntend') }}/img/avatar/avatar-07.jpg" alt="...">
                                            </div>
                                            <h3 class="h5"><a href="#!">Smith Jones</a></h3>
                                            <p>I'd be lost without digital marketing. The best on the net!</p>
                                            <ul class="social-icons ps-0">
                                                <li>
                                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-3">
                                                <img class="rounded-circle" src="{{ asset('contents/forntend') }}/img/avatar/avatar-08.jpg" alt="...">
                                            </div>
                                            <h3 class="h5"><a href="#!">Erica Turner</a></h3>
                                            <p>Digital marketing is worth much more than I paid. The best on the net!</p>
                                            <ul class="social-icons ps-0">
                                                <li>
                                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#!"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Categories</h6>
                                    <ul class="cat-list">
                                        @foreach ( $categories as $category)
                                            <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>{{ $category->postcate_name}}<span>4</span></a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Popular Posts</h6>
                                    @foreach ($popular_post as $p_post )
                                         <div class="media mb-3 border-bottom pb-3 border-color-extra-light-gray">
                                        <img style="height:80px;width:80px;" class="me-3 border-radius-4" src= "{{asset('uploads/post')}}/{{ $p_post->post_feature_image }}" alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="h6 mb-1"><a href="#!">{{ $p_post->post_title }}</a></h4>
                                            <a href="#!" class="small"><i class="far fa-calendar-check me-2"></i>{{ $p_post->created_at->format('d Y M') }}</a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Archives</h6>
                                    <ul class="archive-list">
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>April 2021<span>3</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>March 2021<span>2</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>February 2021<span>1</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>January 2021<span>9</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>December 2021<span>6</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Popular Tags</h6>
                                    <ul class="blog-tags ps-0">
                                        @foreach ( $tags as $tag)
                                           <li><a href="#!">{{ $tag->tag_name }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end blog right -->
                </div>
            </div>
        </section>
    </div>

 @include('website.includes.footer')
</html>
