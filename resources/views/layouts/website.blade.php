<!DOCTYPE html>
<html lang="en">




<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">


@include('website.includes.header')

@include('website.includes.banner')

@include('website.includes.about')




@yield('blog_content')

@include('website.includes.footer')

    </div>


    <!-- start scroll to top -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->


</body>


</html>
