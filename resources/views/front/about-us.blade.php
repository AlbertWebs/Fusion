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

{{--  --}}
<section class="about-ten why-bg" style="padding:50px;">

    <div class="auto-container">
        <div class="row">

            <div class="col-lg-12 d-flex">
                <div class="my-auto">

                    <div class="about-ten__content">
                        <div class="sec-title-eight text-start">
                            <p class="sec-title-eight__text" style="color:#dd2026">Why Choose Us</p><!-- /.sec-title-eight__text -->

                        </div><!-- /.sec-title-eight -->
                        <p class="about-ten__text" style="color:#182e65; line-height:1.8rem">Here at Fusion HR Solutions we guarantee a full outsourcing service
                            for the entire recruitment process as well as partial sup- port in recruitment
                            and selection of candidates for employment</p><!-- /.about-ten__text -->

                            <p class="about-ten__box__text">Our specialization in public sector and non-profit executive search on a
                                nationwide basis.</p>
                            <p class="about-ten__box__text">Our ability to capitalize on an established network of the most respected
                                executives in the nation</p>
                            <p class="about-ten__box__text">Our track record of success in placing senior level executives in particularly
                                sensitive and highly responsible/accountable positions</p>
                            <p class="about-ten__box__text">The quality of our work--indicative of this is the fact that most of our clients
                                have utilized our services on more than one occasion</p>
                            <p class="about-ten__box__text">Our team is skilled in the latest techniques to identify prospec- tive candidates
                                and, as a search progress, to assist in gathering background information
                                on leading candidates</p>
                            <p class="about-ten__box__text">Our experience in recruiting and placing candidates from private sector
                                companies into public sector organizations.</p>
                                    {{--  --}}
                            <p class="about-ten__box__text">Our proven ability to identify and recommend qualified female and
                                minority candidates</p>
                            <p class="about-ten__box__text">Our reputation among clients and candidates for communication (e.g.,
                                acknowledgment of resumes, regular reports to the client, face-to-face
                                interviews with candidates)</p>
                            <p class="about-ten__box__text">The thoroughness of our documented reference and background checks.
                                We do not merely ask for “five work related references.” Rather, we request
                                very specific references from candidates and, where feasible, gather newspaper
                                articles via the Internet</p>

                                    {{--  --}}
                                    <br><br>
                                    <a class="theme-btn btn-style-two" href="{{url('/')}}/contact-us">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Contact Us</span>
                                        </a>
                            <!-- /.about-ten__box__text -->
                        {{-- </div><!-- /.about-ten__box --> --}}
                    </div><!-- /.about-ten__content -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-ten -->
{{--  --}}

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


