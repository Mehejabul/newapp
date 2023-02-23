 <head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Digital Marketing Agency Template" />
    <meta name="description" content="SEO - Digital Marketing Agency Template" />

    <!-- title  -->
    <title>SEO - Digital Marketing Agency Template</title>

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('contents/forntend') }}/css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('contents/forntend') }}/search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('contents/forntend') }}/quform/css/base.css">

    <!-- theme core css -->
    <link href="{{ asset('contents/forntend') }}/css/styles.css" rel="stylesheet">

</head>




 <!-- HEADER ================================================== -->
        <header class="header-style1 menu_area-light">

            <div class="navbar-default">

                <!-- start top search -->
                <div class="top-search bg-primary">
                    <div class="container">
                        <form class="search-form" action="https://seo.websitelayout.net/search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">

                                    @php
                                           $datas = App\Models\BasicSetting::where('basic_status',1)->where('basic_id',1)->firstorFail();
                                    @endphp

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="{{ route('website.index') }}" class="navbar-brand"><img src="{{ asset('uploads/settings/header_logo/') }}/{{ $datas->basic_logo }}" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li><a href="{{ route('website.index') }}">Home</a></li>
                                        <li>
                                            <a href="#!">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="clients.html">Clients</a></li>
                                                <li><a href="404.html">Page 404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Services</a>
                                            <ul>
                                                <li><a href="services.html">All Services</a></li>
                                                <li><a href="seo-optimization.html">SEO Optimization</a></li>
                                                <li><a href="seo-marketing.html">SEO Marketing</a></li>
                                                <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">Case Studies</a>
                                            <ul>
                                                <li><a href="case-studies-column-2.html">Case Studies Column 2</a></li>
                                                <li><a href="case-studies-column-3.html">Case Studies Column 3</a></li>
                                                <li><a href="case-studies-fullwidth.html">Case Studies Full Width</a></li>
                                                <li><a href="case-studies-details.html">Case Studies Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">Blog</a>
                                            <ul>
                                                {{--  $post = App\Models\Post::all();  --}}
                                                <li><a href="{{ route('blog.grid') }}">Blog Grid</a></li>
                                                <li><a href="{{ route('blog.list') }}">Blog List</a></li>
                                                <li><a href="{{ route('blog.detail') }}">Blog Detail</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contacts</a></li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav">
                                        <ul>
                                            <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
