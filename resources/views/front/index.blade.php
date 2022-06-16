@extends('front.master')

@section('content')
<section class="slider-eight">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": { "el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "autoplay": { "delay": 5000 }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url('{{asset('theme/images/update-01-10-2021/slider/slider-eight-1-1.jpg')}}');">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-eight__content">
                        <p class="slider-eight__text"><span>Helping businesses since 1987</span></p>
                        <!-- /.slider-eight__text -->
                        <h2 class="slider-eight__title">Reach the Limits
                            with Consulting
                            Agency.</h2>
                        <!-- /.slider-eight__title -->
                        <div class="slider-eight__btns">
                            <a href="#" class="slider-eight__btn thm-btn__eight">Case Studies</a>
                            <!-- /.thm-btn__eight -->
                            <a href="#" class="slider-eight__btn slider-eight__btn--two thm-btn__eight">Contact
                                Now</a>
                            <!-- /.thm-btn__eight -->
                        </div><!-- /.slider-eight__btns -->

                    </div><!-- /.slider-eight__content -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url('{{asset('theme/images/update-01-10-2021/slider/slider-eight-1-2.jpg')}}');">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-eight__content">
                        <p class="slider-eight__text"><span>Helping businesses since 1987</span></p>
                        <!-- /.slider-eight__text -->
                        <h2 class="slider-eight__title">Reach the Limits
                            with Consulting
                            Agency.</h2>
                        <!-- /.slider-eight__title -->
                        <div class="slider-eight__btns">
                            <a href="#" class="slider-eight__btn thm-btn__eight">Case Studies</a>
                            <!-- /.thm-btn__eight -->
                            <a href="#" class="slider-eight__btn slider-eight__btn--two thm-btn__eight">Contact
                                Now</a>
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
        <h3 class="call-to-section-four__title">Empowering for a better tomorrow</h3>
        <!-- /.call-to-section-four__title -->
        <a href="#"
            target="_blank" class="thm-btn__eight call-to-section-four__btn">Sign Up Now</a>
        <!-- /.thm-btn__eight -->
    </div><!-- /.auto-container -->
</section><!-- /.call-to-section-four -->

<section class="about-eleven">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-eleven__images wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="{{asset('theme/images/update-01-10-2021/resources/about-11-1-1.jpg')}}" alt="">
                    <img src="{{asset('theme/images/update-01-10-2021/resources/about-11-1-2.jpg')}}" alt="">
                </div><!-- /.about-eleven__images -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-eleven__content">
                    <div class="sec-title-eight text-start">
                        <p class="sec-title-eight__text">Our Company Introduction</p>
                        <!-- /.sec-title-eight__text -->
                        <h2 class="sec-title-eight__title">We Ensure Only Quality
                            Consulting Services
                            for our Clients</h2><!-- /.sec-title-eight__title -->
                    </div><!-- /.sec-title-eight -->
                    <p class="about-eleven__summery">Quis aliqua sunt nisi consectetur anim ullamco ea deserunt
                        non voluptate nisi sit elit exercitation eu Lorem. Mollit occaecat nisi occaecat fugiat
                        ullamco.</p><!-- /.about-eleven__summery -->
                    <div class="about-eleven__box">
                        <div class="about-eleven__box__item">
                            <i class="flaticon-headhunting"></i>
                            <h3 class="about-eleven__box__title">Qualified
                                Consultants</h3>
                        </div><!-- /.about-eleven__box__item -->
                        <div class="about-eleven__box__item">
                            <i class="flaticon-background-check"></i>
                            <h3 class="about-eleven__box__title">Trusted Since
                                1987</h3>
                        </div><!-- /.about-eleven__box__item -->
                    </div><!-- /.about-eleven__box -->
                    <div class="about-eleven__progress">
                        <div class="about-eleven__progress-top">
                            <p>Finance & Consulting</p>
                        </div><!-- /.about-eleven__progress__top -->
                        <div class="about-eleven__progress-line">
                            <span class="count-bar" data-percent="77%">
                                <b>77%</b>
                            </span>
                        </div><!-- /.about-eleven__progress-line -->
                    </div><!-- /.about-eleven__progress -->
                    <div class="about-eleven__info">
                        <div class="about-eleven__info__image">
                            <img src="{{asset('theme/images/update-01-10-2021/resources/about-11-1-3.jpg')}}" alt="">
                        </div><!-- /.about-eleven__info__image -->
                        <div class="about-eleven__info__content">
                            <h3 class="about-eleven__info__name">Christine Eve</h3>
                            <!-- /.about-eleven__info__name -->
                            <p class="about-eleven__info__text">Co Founder & Consultant</p>
                            <!-- /.about-eleven__info__text -->
                        </div><!-- /.about-eleven__info__content -->
                    </div><!-- /.about-eleven__info -->
                </div><!-- /.about-eleven__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-eleven -->

<section class="service-eight">
    <div class="auto-container">
        <div class="sec-title-eight text-center">
            <p class="sec-title-eight__text">Our Services List</p><!-- /.sec-title-eight__text -->
            <h2 class="sec-title-eight__title">What We’re Offering</h2><!-- /.sec-title-eight__title -->
        </div><!-- /.sec-title-eight -->
        <div class="row">
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="digital-marketing.html">Consumer
                                Products</a>
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
                            <a href="digital-marketing.html">Audit
                                Marketing</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-analysis"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="digital-marketing.html">Advice
                                Bankings</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-business"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-3 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="digital-marketing.html">Marketing
                                Rules</a>
                        </h3><!-- /.service-eight__title -->
                        <div class="service-eight__icon">
                            <i class="flaticon-global"></i>
                        </div><!-- /.service-eight__icon -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.service-eight -->

<section class="about-ten">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-ten__image">
                    <img src="{{asset('theme/images/update-01-10-2021/resources/about-10-1-1.jpg')}}" alt="">
                </div><!-- /.about-ten__image -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7 d-flex">
                <div class="my-auto">

                    <div class="about-ten__content">
                        <div class="sec-title-eight text-start">
                            <p class="sec-title-eight__text">Why Choose Us</p><!-- /.sec-title-eight__text -->
                            <h2 class="sec-title-eight__title">The Largest Business
                                Experts</h2><!-- /.sec-title-eight__title -->
                        </div><!-- /.sec-title-eight -->
                        <p class="about-ten__text">Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur.</p><!-- /.about-ten__text -->
                        <div class="about-ten__box">
                            <h3 class="about-ten__box__title">Customer Experience</h3>
                            <!-- /.about-ten__box__title -->
                            <p class="about-ten__box__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Dolor sit amet, adipsicing elit.</p>
                            <!-- /.about-ten__box__text -->
                        </div><!-- /.about-ten__box -->
                        <div class="about-ten__box">
                            <h3 class="about-ten__box__title">Customer Experience</h3>
                            <!-- /.about-ten__box__title -->
                            <p class="about-ten__box__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Dolor sit amet, adipsicing elit.</p>
                            <!-- /.about-ten__box__text -->
                        </div><!-- /.about-ten__box -->
                    </div><!-- /.about-ten__content -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-ten -->


<section class="project-eight">
    <div class="auto-container">
        <div class="sec-title-eight text-center">
            <p class="sec-title-eight__text">Recent Cases</p><!-- /.sec-title-eight__text -->
            <h2 class="sec-title-eight__title">New Case Studies</h2><!-- /.sec-title-eight__title -->
        </div><!-- /.sec-title-eight -->
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 2, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "slidesPerView": 1
            },
            "375": {
                "slidesPerView": 1
            },
            "480": {
                "slidesPerView": 2
            },
            "767": {
                "slidesPerView": 3
            },
            "1199": {
                "slidesPerView": 4
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-1.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-2.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-3.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-4.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->

                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-1.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-2.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-3.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/project-8-4.jpg')}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="portfolio-single.html"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="portfolio-single.html">Business
                                    Growth</a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div><!-- /.auto-container -->
</section><!-- /.project-seven -->

<section class="testimonials-eight">
    <div class="auto-container">
        <div class="sec-title-eight text-center">
            <p class="sec-title-eight__text">Customers Feedbacks</p><!-- /.sec-title-eight__text -->
            <h2 class="sec-title-eight__title">What They’re Saying</h2><!-- /.sec-title-eight__title -->
        </div><!-- /.sec-title-eight -->
        <div class="row">
            <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="testimonials-eight__card">
                    <div class="testimonials-eight__stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonials-eight__stars -->
                    <p class="testimonials-eight__text">I was impresed by the company services, lorem ipsum is
                        simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.
                    </p><!-- /.testimonials-eight__text -->
                    <div class="testimonials-eight__info">
                        <div class="testimonials-eight__image">
                            <img src="{{asset('theme/images/update-01-10-2021/resources/testi-8-1.jpg')}}" alt="">
                        </div><!-- /.testimonials-eight__image -->
                        <div class="testimonials-eight__meta">
                            <h3 class="testimonials-eight__name">Christine Rose</h3>
                            <!-- /.testimonials-eight__name -->
                            <p class="testimonials-eight__designation">Customer</p>
                            <!-- /.testimonials-eight__designation -->
                        </div><!-- /.testimonials-eight__meta -->
                    </div><!-- /.testimonials-eight__info -->
                </div><!-- /.testimonials-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="testimonials-eight__card">
                    <div class="testimonials-eight__stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonials-eight__stars -->
                    <p class="testimonials-eight__text">I was impresed by the company services, lorem ipsum is
                        simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.
                    </p><!-- /.testimonials-eight__text -->
                    <div class="testimonials-eight__info">
                        <div class="testimonials-eight__image">
                            <img src="{{asset('theme/images/update-01-10-2021/resources/testi-8-2.jpg')}}" alt="">
                        </div><!-- /.testimonials-eight__image -->
                        <div class="testimonials-eight__meta">
                            <h3 class="testimonials-eight__name">Christine Rose</h3>
                            <!-- /.testimonials-eight__name -->
                            <p class="testimonials-eight__designation">Customer</p>
                            <!-- /.testimonials-eight__designation -->
                        </div><!-- /.testimonials-eight__meta -->
                    </div><!-- /.testimonials-eight__info -->
                </div><!-- /.testimonials-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="testimonials-eight__card">
                    <div class="testimonials-eight__stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><!-- /.testimonials-eight__stars -->
                    <p class="testimonials-eight__text">I was impresed by the company services, lorem ipsum is
                        simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia.
                    </p><!-- /.testimonials-eight__text -->
                    <div class="testimonials-eight__info">
                        <div class="testimonials-eight__image">
                            <img src="{{asset('theme/images/update-01-10-2021/resources/testi-8-3.jpg')}}" alt="">
                        </div><!-- /.testimonials-eight__image -->
                        <div class="testimonials-eight__meta">
                            <h3 class="testimonials-eight__name">Christine Rose</h3>
                            <!-- /.testimonials-eight__name -->
                            <p class="testimonials-eight__designation">Customer</p>
                            <!-- /.testimonials-eight__designation -->
                        </div><!-- /.testimonials-eight__meta -->
                    </div><!-- /.testimonials-eight__info -->
                </div><!-- /.testimonials-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.testimonials-eight -->

<section class="video-seven">
    <div class="video-seven__parallax  jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <img src="{{asset('theme/images/update-01-10-2021/background/video-seven-1-1.jpg')}}" class="jarallax-img" alt="">
    </div>
    <div class="auto-container">
        <h3 class="video-seven__title">Mission is to Protect Your
            Business & More</h3><!-- /.video-seven__title -->
        <a href="https://www.youtube.com/watch?v=8DP4NgupAhI" class="video-seven__btn lightbox-image">
            <i class="fa fa-play"></i>
            <i class="ripple"></i></a><!-- /.video-btn lightbox-image -->
    </div><!-- /.auto-container -->
</section><!-- /.video-seven -->

<section class="blog-eight">
    <div class="auto-container">
        <div class="sec-title-eight text-center">
            <p class="sec-title-eight__text">From the Blog</p><!-- /.sec-title-eight__text -->
            <h2 class="sec-title-eight__title">News & Articles</h2><!-- /.sec-title-eight__title -->
        </div><!-- /.sec-title-eight -->
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="blog-eight__card">
                    <div class="blog-eight__image">
                        <img src="{{asset('theme/images/update-01-10-2021/blog/blog-8-1.jpg')}}" alt="">
                    </div><!-- /.blog-eight__image -->
                    <div class="blog-eight__content">
                        <div class="blog-eight__date">16 sep</div><!-- /.blog-eight__date -->
                        <h3 class="blog-eight__title">
                            <a href="blog-single.html">Made two Companies
                                Stronger than Ever</a>
                        </h3><!-- /.blog-eight__title -->
                        <p class="blog-eight__text">Lorem ipsum dolor sit amet, conse elit sed do eiusm od
                            tempor ut labore.</p><!-- /.blog-eight__text -->
                        <div class="blog-eight__meta">
                            <a href="#"><i class="far fa-user-circle"></i>by Admin</a>
                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                        </div><!-- /.blog-eight__meta -->
                    </div><!-- /.blog-eight__content -->
                </div><!-- /.blog-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="blog-eight__card">
                    <div class="blog-eight__image">
                        <img src="{{asset('theme/images/update-01-10-2021/blog/blog-8-2.jpg')}}" alt="">
                    </div><!-- /.blog-eight__image -->
                    <div class="blog-eight__content">
                        <div class="blog-eight__date">16 sep</div><!-- /.blog-eight__date -->
                        <h3 class="blog-eight__title">
                            <a href="blog-single.html">Made two Companies
                                Stronger than Ever</a>
                        </h3><!-- /.blog-eight__title -->
                        <p class="blog-eight__text">Lorem ipsum dolor sit amet, conse elit sed do eiusm od
                            tempor ut labore.</p><!-- /.blog-eight__text -->
                        <div class="blog-eight__meta">
                            <a href="#"><i class="far fa-user-circle"></i>by Admin</a>
                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                        </div><!-- /.blog-eight__meta -->
                    </div><!-- /.blog-eight__content -->
                </div><!-- /.blog-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="blog-eight__card">
                    <div class="blog-eight__image">
                        <img src="{{asset('theme/images/update-01-10-2021/blog/blog-8-3.jpg')}}" alt="">
                    </div><!-- /.blog-eight__image -->
                    <div class="blog-eight__content">
                        <div class="blog-eight__date">16 sep</div><!-- /.blog-eight__date -->
                        <h3 class="blog-eight__title">
                            <a href="blog-single.html">Made two Companies
                                Stronger than Ever</a>
                        </h3><!-- /.blog-eight__title -->
                        <p class="blog-eight__text">Lorem ipsum dolor sit amet, conse elit sed do eiusm od
                            tempor ut labore.</p><!-- /.blog-eight__text -->
                        <div class="blog-eight__meta">
                            <a href="#"><i class="far fa-user-circle"></i>by Admin</a>
                            <a href="#"><i class="far fa-comments"></i>2 Comments</a>
                        </div><!-- /.blog-eight__meta -->
                    </div><!-- /.blog-eight__content -->
                </div><!-- /.blog-eight__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.blog-eight -->

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
@endsection
