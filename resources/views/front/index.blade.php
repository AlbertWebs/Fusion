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



<section class="about-eleven">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-eleven__images wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="{{asset('theme/images/update-01-10-2021/resources/featured-image-15.jpg')}}" alt="">
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
    <div class="auto-containers" style="margin:10px;">
        <div class="sec-title-eight text-center">

            <h2 class="sec-title-eight__title">Our Areas Of Expertise</h2><!-- /.sec-title-eight__title -->
        </div><!-- /.sec-title-eight -->
        <div class="row">
            <div class="col-md-6 col-lg-2 col-sm-6 col-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Civil & Architecture
                                </a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="digital-marketing.html">Electrical</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Mechanical</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Security</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Welding</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Heavy Equipments</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Administration</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Hotel & Hospitality</a>
                        </h3><!-- /.service-eight__title -->

                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            {{--  --}}
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Cleaning & Housekeeping</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Agriculture & Plantation</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Denting & Painting</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Supermarkets and Hypermarkets</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->

            {{--  --}}
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Power Gas and Water</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Medical Paramedical</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Manufacturing & Production</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            <div class="col-md-6 col-lg-2 col-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="900ms">
                <div class="service-eight__card">
                    <div class="service-eight__card__inner">
                        <h3 class="service-eight__title">
                            <a href="#">Garments & Textiles</a>
                        </h3><!-- /.service-eight__title -->
                    </div><!-- /.service-eight__card__inner -->
                </div><!-- /.service-eight__card -->
            </div><!-- /.col-md-6 col-lg-3 -->
            {{--  --}}
            {{--  --}}
        </div><!-- /.row -->

    </div><!-- /.auto-container -->
</section><!-- /.service-eight -->

<section class="about-ten">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-ten__image">
                    <img src="{{asset('theme/images/update-01-10-2021/slider/western-chinese-business-hong-kong.jpg')}}" alt="">
                </div><!-- /.about-ten__image -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7 d-flex">
                <div class="my-auto">

                    <div class="about-ten__content">
                        <div class="sec-title-eight text-start">
                            <p class="sec-title-eight__text" style="color:#dd2026">Why Choose Us</p><!-- /.sec-title-eight__text -->

                        </div><!-- /.sec-title-eight -->
                        <p class="about-ten__text" style="color:#182e65; line-height:1.5rem">Here at Fusion HR Solutions we guarantee a full outsourcing service
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
                            <p class="about-ten__box__text">Our proactive recruitment of candidates who may not be seeking new
                                    employment and would not normally respond to routine ad- vertising, or
                                    who may come from non-traditional sources</p>
                                    <br><br>
                                    <a class="theme-btn btn-style-two" href="{{url('/')}}/about-us">
                                            <i class="btn-curve"></i>
                                            <span class="btn-title">Discover More</span>
                                        </a>
                            <!-- /.about-ten__box__text -->
                        {{-- </div><!-- /.about-ten__box --> --}}
                    </div><!-- /.about-ten__content -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.about-ten -->

<section class="project-eight service-eight">
    <div class="auto-container">
        <div class="sec-title-eight text-center">
            <p class="sec-title-eight__text">Empowering for a better tomorrow</p><!-- /.sec-title-eight__text -->
            <h2 class="sec-title-eight__title">Our Services</h2><!-- /.sec-title-eight__title -->
            <h5 class="theme-text" style="font-size:16px; max-width:500px; margin:0 auto;">Your most valuable resources are your employees. Fusion HR Solutions is your best choice in recruiting, training, and retaining your employees.
                Fusion HR Solutions offers the following services detailed below at an friendly cost. We offer the following services <span class="dot">.</span></h5>
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
                <?php $Services = DB::table('services')->get(); ?>
                @foreach ($Services as $Service)
                <div class="swiper-slide">
                    <div class="project-eight__item">
                        <img src="{{asset('theme/images/update-01-10-2021/project/')}}/{{$Service->image}}" alt="">
                        <div class="project-eight__content">
                            <a class="project-eight__link" href="{{url('/')}}/services/{{$Service->slung}}"><i
                                    class="flaticon-right-arrow"></i></a>
                            <h3 class="project-eight__title"><a href="{{url('/')}}/services/{{$Service->slung}}">{{$Service->title}}
                                    </a>
                            </h3><!-- /.project-eight__title -->
                        </div><!-- /.project-eight__content -->
                    </div><!-- /.project-eight__item -->
                </div><!-- /.swiper-slide -->
                @endforeach
              </div>
        </div>
    </div><!-- /.auto-container -->
</section><!-- /.project-seven -->










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
<hr>
<section class="sponsor-eight">
    <div class="auto-container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 1000 }, "breakpoints": {
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
                "slidesPerView": 2
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 2
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 3
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 3
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
