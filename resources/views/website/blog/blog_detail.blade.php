<!DOCTYPE html>
<html lang="en">

@include('website.includes.header')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Blog Detail</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">Blog Detail</a></li>
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

        <!-- BLOG DETAILS
        ================================================== -->
        <section class="blogs">
            <div class="container">
                <div class="row">
                    <!-- blog left -->
                    <div class="col-lg-8 col-md-12 mb-1-9 mb-lg-0">
                        <div class="posts-wrapper">
                            <!-- post -->
                            <div class="post-content">
                                   @foreach ( $posts as $post )



                                <div class="post-meta">
                                    <div class="mb-1-6 mb-md-1-9">
                                        <img style="width:100%; height:435px;" src="{{asset('uploads/post')}}/{{ $post->post_feature_image }}" alt="..." img-fluid alt="...">
                                    </div>
                                    <h2 class="h3">{{ $post->post_title }}</h2>
                                    <ul class="meta-list ps-0">
                                        <li>
                                            <a href="#!">
                                                <i class="fa fa-user me-1 text-primary-color"></i> Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fa fa-calendar me-1 text-primary-color"></i> Jan 18, 2021
                                            </a>
                                        </li>
                                        <li class="mr-0">
                                            <a href="#!">
                                                <i class="fa fa-comments me-1 text-primary-color"></i> 10 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-1-6 mb-md-1-9">
                                    <p>{{ $post->post_details }}</p>
                                    <p class="mb-0">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                </div>
                                @endforeach
                                <div class="row mb-1-6 mb-md-1-9">
                                    <div class="col-lg-12">
                                        <h3 class="h5">Step #1: Always remember your goals!</h3>
                                        <p class="mb-1-6 mb-xl-1-9">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                        <blockquote>
                                            <p class="lead fst-italic font-weight-400 mb-1">
                                                I will let my mum know about this, she could really make use of seo! Your company is truly upstanding and is behind its product 100%.
                                            </p>
                                            <cite>– Beverly Sturdivant</cite>
                                        </blockquote>
                                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                                <div class="row mb-1-6 mb-md-1-9">
                                    <div class="col-lg-12">
                                        <h3 class="h5">Step #2: Know your digital goals</h3>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <img class="rounded" src="{{asset('contents/forntend')}}/img/blog/blog-detail-05.jpg" alt="...">
                                            </div>
                                            <div class="col-6">
                                                <img class="rounded" src="{{asset('contents/forntend')}}/img/blog/blog-detail-03.jpg" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-1-6 mb-md-1-9">
                                        <h3 class="h5">Step #3: Get specific</h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                        <ul class="list-style2 list-unstyled ps-0 mb-0">
                                            <li><i class="fas fa-check"></i>Exclusive design</li>
                                            <li><i class="fas fa-check"></i>We Provide Awesome Services</li>
                                            <li><i class="fas fa-check"></i>Your business deserves best design</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>

                                <div class="separator"></div>
                                <div class="row g-0">
                                    <div class="col-md-6 mb-1-6 mb-md-0">
                                        <div class="tags">
                                            <h5 class="h6 mb-2">Related Tags</h5>
                                            <ul class="blog-tags ps-0">
                                                <li><a href="#!">Marketing</a></li>
                                                <li><a href="#!">SEO</a></li>
                                                <li><a href="#!">PPC</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="h6 text-md-end text-start mb-2">Share Post</h5>
                                        <div class="share-post">
                                            <ul class="mb-0">
                                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end post -->

                            <div class="author-info-wrapper">
                                <div class="author-info-avatar">
                                    <img src="{{asset('contents/forntend')}}/img/avatar/avatar-08.jpg" alt="...">
                                </div>
                                <div class="author-info-content">
                                    <h4 class="h5 mb-3">Emilio Weaver</h4>
                                    <p>You won't regret it. I just can't get enough of digital marketing. I want to get a T-Shirt with digital marketing on it so I can show it off to everyone.</p>
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
                            <div class="mb-1-6 mb-sm-2-9">
                                <h3 class="h4 mb-1-6">Related Posts</h3>
                                <div class="row">
                                    @foreach ($releted_post as $r_post )

                                    <div class="col-lg-6 col-md-12">
                                        <article class="card card-style2 border-none h-100">
                                            <div class="card-img">
                                                <img style="width:100%; height:220px;" src="{{asset('uploads/post')}}/{{ $r_post->post_feature_image }}" alt="...">
                                            </div>
                                            <div class="blog-info-tag">
                                                <div class="text-end"><a href="#!" class="bg-yellow">{{ $r_post->postcategory->postcate_name }}</a></div>
                                            </div>
                                            <div class="card-body">
                                                <small class="font-weight-500">{{  $r_post->created_at->format("d Y M")  }}</small>
                                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">{{ $r_post->post_title }}</a></h3>
                                                <p class="mb-3">{{  Str::limit($r_post->post_details, 200)  }}</p>
                                                <div class="blog-author">
                                                    <div class="blog-author-img">
                                                        <img style="height: 80px; width:80px;" src="{{asset('uploads/user/image/')}}/{{ $users->photo }}" alt="...">
                                                    </div> <span class="text-yellow">{{ $r_post->creator->name }}</span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- comment -->
                            <div class="comments-area">
                                <h3 class="h4 mb-1-6">Comments</h3>
                                <div class="media border-bottom mb-4 pb-4 border-color-extra-light-gray">
                                    <img class="rounded-circle" src="{{asset('contents/forntend')}}/img/avatar/avatar-03.jpg" alt="...">
                                    <div class="media-body ms-4">
                                        <h4 class="h6 mb-2"><a href="#!">Denis Irwin</a></h4>
                                        <p class="mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div>
                                            <a href="#!" class="text-dark display-30 display-md-29">
                                                <i class="fa fa-reply display-31 pr-2" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media border-bottom mb-4 pb-4 border-color-extra-light-gray">
                                    <img class="rounded-circle" src="{{asset('contents/forntend')}}/img/avatar/avatar-04.jpg" alt="...">
                                    <div class="media-body ms-4">
                                        <h4 class="h6 mb-2"><a href="#!">Erica Turner</a></h4>
                                        <p class="mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div>
                                            <a href="#!" class="text-dark display-30 display-md-29">
                                                <i class="fa fa-reply display-31 pr-2" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <img class="rounded-circle" src="{{asset('contents/forntend')}}/img/avatar/avatar-05.jpg" alt="...">
                                    <div class="media-body ms-4">
                                        <h4 class="h6 mb-2"><a href="#!">John Martin</a></h4>
                                        <p class="mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div>
                                            <a href="#!" class="text-dark display-30 display-md-29">
                                                <i class="fa fa-reply display-31 pr-2" aria-hidden="true"></i> Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -->
                                <div class="mt-1-9">
                                    <h3 class="h4 mb-1-6">Post a Comment</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="reply" rows="6" class="form-control" placeholder="Your Reply"></textarea>
                                        </div>
                                        <div>
                                            <button class="butn" type="submit"><span>Leave Reply</span></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end form -->
                            </div>
                            <!-- end comment -->
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
                                        <a href="#!" class="btn-newsletter"><i class="fas fa-search"></i></a>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Reviews</h6>
                                    <div class="owl-carousel owl-theme client-carousel">
                                        @foreach ($reviews as $review)

                                        <div class="text-center">
                                            <div class="mb-3">
                                                <img class="rounded-circle"
                                                style="height: 80px; width:80px;" src="{{asset('uploads/review/')}}/{{ $review->reviewer_image }}" alt="...">
                                            </div>
                                            <h3 class="h5"><a href="#!">{{ $review->reviewer_name }}</a></h3>
                                            <p>{{ $review->reviewer_description }}</p>
                                            <ul class="social-icons ps-0">
                                                <li>
                                                    <a href="{{ $review->reviwer_facebook }}"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $review->reviwer_twitter }}"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $review->reviwer_instagram }}"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ $review->reviwer_instagram }}"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Categories</h6>
                                    <ul class="cat-list">
                                        @foreach ($categories as $category )


                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>{{ $category->postcate_name }}<span>4</span></a>
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
 @include('website.includes.footer')



    </div>


</body>


</html>
