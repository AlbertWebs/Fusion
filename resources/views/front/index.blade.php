@extends('front.master')

@section('content')
<section class="slider-eight">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": false, "effect": "fade", "pagination": { "el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "autoplay": { "delay": 5000 }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url('{{asset('theme/images/update-01-10-2021/slider/slider-eight-1-1.jpg')}}');">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-eight__content">
                        <p class="slider-eight__text"><span>Empowering for a better tomorrow</span></p>
                        <!-- /.slider-eight__text -->
                        <h2 class="slider-eight__title">Fusing People Recruitment</h2>
                        <!-- /.slider-eight__title -->
                        <div class="slider-eight__btns">
                            <a href="#" class="slider-eight__btn thm-btn__eight">Recruit Now</a>
                            <!-- /.thm-btn__eight -->
                            <a href="#" class="slider-eight__btn slider-eight__btn--two thm-btn__eight">Find Your Dream Job</a>
                            <!-- /.thm-btn__eight -->
                        </div><!-- /.slider-eight__btns -->

                    </div><!-- /.slider-eight__content -->
                </div>
            </div>


        </div>

    </div>
</section><!-- /.slider-six -->

<section class="call-to-section-four">
    <div class="auto-container">
        <h3 class="call-to-section-four__title">Looking to recruit?
        </h3>
        {{-- <br>
        <p>
            Trust Approach People recruiters to find the perfect candidate. An exclusive consultant supports you in all your local and international recruitment projects.
        </p> --}}
        <!-- /.call-to-section-four__title -->
        <a href="#"
            target="_blank" class="thm-btn__eight call-to-section-four__btn">Discover our expertise</a>
        <!-- /.thm-btn__eight -->
    </div><!-- /.auto-container -->
</section><!-- /.call-to-section-four -->

<section class="about-eleven">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-eleven__images wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="{{asset('theme/images/update-01-10-2021/resources/about-11-1-1.jpg')}}" alt="">
                </div><!-- /.about-eleven__images -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6">
                <div class="about-eleven__content">
                    <div class="sec-title-eight text-start">
                        <p class="sec-title-eight__text">Fusion HR Solutions Limited</p>
                        <!-- /.sec-title-eight__text -->
                        <h2 class="sec-title-eight__title">We Ensure Only Quality
                            Consulting Services
                            for our Clients</h2><!-- /.sec-title-eight__title -->
                    </div><!-- /.sec-title-eight -->
                    <p class="about-eleven__summery" style="color:#000000">Fusion HR Solutions is a human resources management practice that provides a comprehensive range of human resources solutions with a business focus. Fusion HR Solutions is the nucleus of a multidisciplinary team of human resources specialists. Fusion HR Solutions is a dynamic organization that excels in consulting and training and we are accomplished in delivering results.</p><!-- /.about-eleven__summery -->
                    <br><br>
                    <a class="theme-btn btn-style-two" href="{{url('/')}}/about-us">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover More</span>
                        </a>


                </div><!-- /.about-eleven__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-eleven -->

<section class="service-eight">
    <div class="auto-container">
        <div class="sec-title-eight text-center">
            <p class="sec-title-eight__text">Our Services List</p><!-- /.sec-title-eight__text -->
            <h2 class="sec-title-eight__title">Our areas of expertise</h2><!-- /.sec-title-eight__title -->
        </div><!-- /.sec-title-eight -->
        <div class="row">
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Civil/Architecture
                                </a><br>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-vector-4"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="digital-marketing.html">Electrical</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-business"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Mechanical</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-global"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Security</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-global"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Welding</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="fas fa-wrench"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Heavy Equipments</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="fas fa-cog"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Administration</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="fas fa-user"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Hotel & Hospitality</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="fa fa-bed"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            {{--  --}}
        </div><!-- /.row -->

    </div><!-- /.auto-container -->
</section><!-- /.service-eight -->

<section class="about-ten">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-ten__image">
                    <img src="{{asset('theme/images/update-01-10-2021/slider/slider-eight-1-1.jpg')}}" alt="">
                </div><!-- /.about-ten__image -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7 d-flex">
                <div class="my-auto">


                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-ten -->




        <section class="service-eight">
            <div class="auto-container">
                <div class="sec-title-eight text-center">
                    <p class="sec-title-eight__text">Our Services List</p><!-- /.sec-title-eight__text -->
                    <h2 class="sec-title-eight__title">Our Services</h2><!-- /.sec-title-eight__title -->
                </div><!-- /.sec-title-eight -->
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow fadeInLeft m-b-10" data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-eight__item">
                                    <img src="{{asset('theme/images/update-01-10-2021/project/project-1-3.jpg')}}" alt="">
                                    <div class="project-eight__content">
                                        <a class="project-eight__link" href="#"><i
                                                class="flaticon-right-arrow"></i></a>
                                        <h3 class="project-eight__title"><a href="#">Recruitment
                                                </a>
                                        </h3><!-- /.project-eight__title -->
                                    </div><!-- /.project-eight__content -->
                                </div><!-- /.project-eight__item -->
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-eight__item">
                                    <img src="{{asset('theme/images/update-01-10-2021/project/project-1-3.jpg')}}" alt="">
                                    <div class="project-eight__content">
                                        <a class="project-eight__link" href="#"><i
                                                class="flaticon-right-arrow"></i></a>
                                        <h3 class="project-eight__title"><a href="#">Training & skills development</a>
                                        </h3><!-- /.project-eight__title -->
                                    </div><!-- /.project-eight__content -->
                                </div><!-- /.project-eight__item -->
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-eight__item">
                                    <img src="{{asset('theme/images/update-01-10-2021/project/project-1-3.jpg')}}" alt="">
                                    <div class="project-eight__content">
                                        <a class="project-eight__link" href="#"><i
                                                class="flaticon-right-arrow"></i></a>
                                        <h3 class="project-eight__title"><a href="#">Benefits and remuneration</a>
                                        </h3><!-- /.project-eight__title -->
                                    </div><!-- /.project-eight__content -->
                                </div><!-- /.project-eight__item -->
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-eight__item">
                                    <img src="{{asset('theme/images/update-01-10-2021/project/project-1-3.jpg')}}" alt="">
                                    <div class="project-eight__content">
                                        <a class="project-eight__link" href="#"><i
                                                class="flaticon-right-arrow"></i></a>
                                        <h3 class="project-eight__title"><a href="#">Audits</a>
                                        </h3><!-- /.project-eight__title -->
                                    </div><!-- /.project-eight__content -->
                                </div><!-- /.project-eight__item -->
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-eight__item">
                                    <img src="{{asset('theme/images/update-01-10-2021/project/project-1-3.jpg')}}" alt="">
                                    <div class="project-eight__content">
                                        <a class="project-eight__link" href="#"><i
                                                class="flaticon-right-arrow"></i></a>
                                        <h3 class="project-eight__title"><a href="#">Labour and employee relations</a>
                                        </h3><!-- /.project-eight__title -->
                                    </div><!-- /.project-eight__content -->
                                </div><!-- /.project-eight__item -->
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-eight__item">
                                    <img src="{{asset('theme/images/update-01-10-2021/project/project-1-3.jpg')}}" alt="">
                                    <div class="project-eight__content">
                                        <a class="project-eight__link" href="#"><i
                                                class="flaticon-right-arrow"></i></a>
                                        <h3 class="project-eight__title"><a href="#">Regulatory Compliance</a>
                                        </h3><!-- /.project-eight__title -->
                                    </div><!-- /.project-eight__content -->
                                </div><!-- /.project-eight__item -->
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>



                </div>
            </div>
        </section>







<section class="sponsor-eight">
    <div class="auto-container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/images/update-01-10-2021/sponsor/sponsor-2-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div><!-- /.auto-container -->
</section><!-- /.sponsor-eight -->
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
@endsection
