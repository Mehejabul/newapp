<!DOCTYPE html>
<html lang="en">
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
