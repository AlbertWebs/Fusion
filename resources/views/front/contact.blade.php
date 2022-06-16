@extends('front.master')

@section('content')
<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url('{{asset('images/background/image-7.jpg')}});"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->


<section class="contact-info-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms">
                    <i class="fa fa-map-marker-alt"></i>
                    <a href="#">AmBank House,15th Floor-University Way</a>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms"
                    data-wow-delay="300ms">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@fusionhrsolution.com">info@fusionhrsolution.com</a>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-4">
                <div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <i class="fa fa-phone"></i>
                    <a href="tel:+254111027711">+254 (011)- 102- 7711</a>
                    <br>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section><!-- /.contact-info-two -->

<div class="map-box">
    <iframe class="map-iframe"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8200270973416!2d36.816166599999995!3d-1.2817378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f110ba1e32689%3A0x80259cbc9083bb1c!2sFusion%20HR%20Solutions%20Limited!5e0!3m2!1sen!2ske!4v1655353269754!5m2!1sen!2ske"
        style="border:0;" aria-hidden="false" tabindex="0"></iframe>
</div>
@endsection


