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

<section class="fluid-section">
    <div class="outer-container">
        <div class="row clearfix">
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-layer" style="background-image: url({{asset('theme/images/update-01-10-2021/slider/slider-eight-1-1.jpg')}});">
                    </div>
                    <div class="content-box">
                        <h3>Trust Fusion HR recruiters to find the perfect candidate. </h3>
                        <div class="link-box">
                            <a class="theme-btn btn-style-one" href="{{url('/')}}/find-candidates">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-layer" style="background-image: url(images/background/image-5.jpg);">
                    </div>
                    <div class="content-box">
                        <h3>We provide our customers with exceptional service</h3>
                        <div class="link-box">
                            <a class="theme-btn btn-style-two" href="{{url('/')}}/our-services">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Mision Vision and Core Values --}}

<section class="agency-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->

            <!--Right Column-->
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">

                    <div class="sec-title centered">
                        <h5>Our Mission<span class="dot">.</span></h5>
                    </div>

                    <div class="text theme-black">To develop distinctive, client centred, Human Resources concepts and programs that support business
                        goals and provide a unique, cost effective, one stop source for all Human Resources needs”</div>



                    <div class="sec-title centered">
                        <h5>Our Vision<span class="dot">.</span></h5>
                    </div>

                    <div class="text theme-black">To be the premier provider of integrated Human Resources solutions</div>


                </div>
            </div>
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">

                    <div class="sec-title centered">
                        <h5>Our Core Values<span class="dot">.</span></h5>
                    </div>

                    {{-- <h6 class="val-h6">Fair Play</h6>
                    <div class=" theme-black">Fusion HR Solutions practices Respect, Integrity, Openness and Honesty</div>

                    <h6 class="val-h6">Energy</h6>
                    <div class="theme-black">Fusion HR Solutions delivers with Enthusiasm, Passion and with a Smile</div>

                    <h6 class="val-h6">Partnership</h6>
                    <div class="theme-black">Fusion HR Solutions works in collaboration with you. Your Success is Our Success!</div>

                    <h6 class="val-h6">Results</h6>
                    <div class="theme-black">Fusion HR Solutions makes a difference!</div> --}}
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">1.</span> Fair Play</div>
                            <div class="acc-content current" style="display: none;">
                                <div class="content">
                                    <div class="text">Fusion HR Solutions practices Respect, Integrity, Openness and Honesty</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Energy</div>
                            <div class="acc-content" style="display: none;">
                                <div class="content">
                                    <div class="text">Fusion HR Solutions delivers with Enthusiasm, Passion and with a Smile</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> Partnership</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Fusion HR Solutions works in collaboration with you. Your Success is Our Success!</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">4.</span> Results</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Fusion HR Solutions makes a difference!</div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-section call-to-section__no-margin">
    <div class="inner clearfix">
        <div class="shape-1 wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;"></div>
        <div class="shape-2 wow fadeInDown animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;"></div>
        <div class="auto-container clearfix">
            <h2>Looking to Engage Us? </h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="{{url('/')}}/contact-us">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact Today</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection


