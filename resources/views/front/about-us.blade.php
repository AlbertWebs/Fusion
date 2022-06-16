@extends('front.master')

@section('content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url('{{asset('theme/images/background/2-2.jpg')}}');"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>About Us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<section class="testimonials-six we-do-section" id="portfolio">
    <div class="auto-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-six__item">
                        <p class="testimonials-six__content">
                            Fusion HR Solutions is a human resources management practice that provides a comprehensive range of
                            human resources solutions with a business focus. Fusion HR Solutions is the nucleus of a multidisciplinary
                            team of human resources specialists. Fusion HR Solutions is a dynamic organization that excels in consulting
                            and training and we are accomplished in delivering results.<br><br>
                            We recognised there was a unique opportunity to partner with organisations looking for a fresh, pragmatic
                            approach to HR and therefore offer our combined diverse skills and experience through Fusion HR Solutions.
                            <br><br>
                            Clients retain us for our unique combination of western and emerging markets knowledge and expertise
                            (Asia, South East Asia, Pacific Islands, Caucasus, Middle East and Africa) and our outcomes-based approach.
                        </p><!-- /.testimonials-six__content -->
                    </div><!-- /.testimonials-six__item -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container thm-swiper__slider -->

    </div><!-- /.auto-container -->
</section>



<section class="call-to-section call-to-section__no-margin">
    <div class="inner clearfix">
        <div class="shape-1 wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;"></div>
        <div class="shape-2 wow fadeInDown animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;"></div>
        <div class="auto-container clearfix">
            <h2>Looking to Engage Us? </h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="about.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact Today</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection


