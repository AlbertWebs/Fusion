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
<section class="get-quote-three">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Still stuck ask directly<span class="dot">.</span></h2>
        </div>
        <div class="form-box">
            <div class="default-form">
                <form method="post" action="#" id="contact-forsm" novalidate="novalidate">
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="username" value="" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="email" value="" placeholder="Email Address" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="subject" value="" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="message" placeholder="Write Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-one">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Send message</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<hr>


<section class="contact-info-two">
    <div class="auto-container">
        <div class="row">

            <div class="col-md-12 col-lg-6">
                <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms"
                    data-wow-delay="300ms">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@fusionhrsolution.com">info@fusionhrsolution.com</a>
                </div><!-- /.contact-info-two__card -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-6">
                <div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <i class="fa fa-phone"></i>
                    <a href="tel:+254111027711">+254111027711 | +254111027722 | +254111027733</a>
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


