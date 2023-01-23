<!DOCTYPE html>
<html lang="en">
blog grid
@include('website.includes.header')
        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Blog Grid</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">Blog Grid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="{{ asset('contents/forntend') }}/img/banner/page-title2.png" class="position-absolute top-0 start-0" alt="...">
            <img src="{{ asset('contents/forntend') }}/img/banner/page-title1.png" class="position-absolute bottom-0 end-0" alt="...">
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </section>

        <!-- BLOG
        ================================================== -->
        <section class="blog-grid">
            <div class="container">
                <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                    <h6 class="text-secondary"><span>Blog Posts</span></h6>
                    <h2 class="mb-0 h1">Our latest blog</h2>
                </div>
                <div class="row">
                    @foreach ($recent_post as $post )
                        <div class="col-lg-4 col-md-6 mb-1-6 mb-md-1-9 mb-lg-2-5">
                        <article class="card card-style2 border-none h-100">
                            <div class="card-img">
                                <img style="width:100%;" src="{{asset('uploads/post/')}}/{{ $post->post_feature_image }}" alt="...">
                            </div>
                            <div class="blog-info-tag">
                                <div class="text-end"><a href="#" class="bg-light-pink"> {{ $post->postcategory->postcate_name }} </a></div>
                            </div>
                            <div class="card-body">
                                <small class="font-weight-500">{{ $post->created_at->format('d M.Y') }}</small>
                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">{{ $post->post_title }}</a></h3>
                                <p class="mb-3">{{ Str::limit($post->post_details, 100) }}</p>
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img style="height: 80px; width:80px;" src="{{asset('uploads/user/image/')}}/{{ $users->photo }}" alt="...">
                                    </div> <span class="text-light-pink">{{ $post->creator->name }} </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach

                    {{--  <div class="col-lg-4 col-md-6 mb-1-6 mb-md-1-9 mb-lg-2-5">
                        <article class="card card-style2 border-none h-100">
                            <div class="card-img">
                                <img src="{{asset('contents/forntend')}}/img/blog/blog-02.jpg" alt="...">
                            </div>
                            <div class="blog-info-tag">
                                <div class="text-end"><a href="#!" class="bg-yellow">Marketing</a></div>
                            </div>
                            <div class="card-body">
                                <small class="font-weight-500">01 Feb 2021</small>
                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">The seven secrets that you shouldn't know about Seo.</a></h3>
                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{asset('contents/forntend')}}/img/avatar/avatar-02.jpg" alt="...">
                                    </div> <span class="text-yellow">Ivo Janata</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-1-6 mb-md-1-9 mb-lg-2-5">
                        <article class="card card-style2 border-none h-100">
                            <div class="card-img">
                                <img src="{{asset('contents/forntend')}}/img/blog/blog-03.jpg" alt="...">
                            </div>
                            <div class="blog-info-tag">
                                <div class="text-end"><a href="#!" class="bg-blue">SEO Analysis</a></div>
                            </div>
                            <div class="card-body">
                                <small class="font-weight-500">29 Jan 2021</small>
                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">Things that make you love and hate Seo.</a></h3>
                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{asset('contents/forntend')}}/img/avatar/avatar-03.jpg" alt="...">
                                    </div> <span class="text-blue">Lisa Michalski</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-1-6 mb-md-1-9 mb-lg-0">
                        <article class="card card-style2 border-none h-100">
                            <div class="card-img">
                                <img src="{{asset('contents/forntend')}}/img/blog/blog-04.jpg" alt="...">
                            </div>
                            <div class="blog-info-tag">
                                <div class="text-end"><a href="#!" class="bg-purple">Digital marketing</a></div>
                            </div>
                            <div class="card-body">
                                <small class="font-weight-500">18 Jan 2021</small>
                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">The reasons why we love digital marketing.</a></h3>
                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{asset('contents/forntend')}}/img/avatar/avatar-04.jpg" alt="...">
                                    </div> <span class="text-purple">Brenda Barton</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-1-6 mb-md-0">
                        <article class="card card-style2 border-none h-100">
                            <div class="card-img">
                                <img src="{{asset('contents/forntend')}}/img/blog/blog-05.jpg" alt="...">
                            </div>
                            <div class="blog-info-tag">
                                <div class="text-end"><a href="#!" class="bg-pink">Business</a></div>
                            </div>
                            <div class="card-body">
                                <small class="font-weight-500">12 Jan 2021</small>
                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">Why you should not go to business.</a></h3>
                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{asset('contents/forntend')}}/img/avatar/avatar-05.jpg" alt="...">
                                    </div> <span class="text-pink">Stanley Jenkins</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="card card-style2 border-none h-100">
                            <div class="card-img">
                                <img src="{{asset('contents/forntend')}}/img/blog/blog-06.jpg" alt="...">
                            </div>
                            <div class="blog-info-tag">
                                <div class="text-end"><a href="#!" class="bg-light-blue">Analysis</a></div>
                            </div>
                            <div class="card-body">
                                <small class="font-weight-500">06 Jan 2021</small>
                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">Is Analysis The Most Trending Thing Now?</a></h3>
                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{asset('contents/forntend')}}/img/avatar/avatar-06.jpg" alt="...">
                                    </div> <span class="text-light-blue">Robert Anderson</span>
                                </div>
                            </div>
                        </article>
                    </div>  --}}
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
        </section>

      @include('website.includes.footer')
</body>
</html>
