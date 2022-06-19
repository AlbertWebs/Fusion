@extends('front.master')

@section('content')
@foreach ($Services as $item)


<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url('{{asset('theme/images/background/2-2.jpg')}}');"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{$item->title}}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">{{$item->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  --}}
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="main-image image">
                        {{-- <img src="{{asset('theme/images/update-01-10-2021/project/')}}/{{$item->image}}" alt=""> --}}
                    </div>
                    <div class="text-content">

                        <p style="font-size:25px; color:#000000">{{$item->content}}</p>


                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">

                    <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>All Services</h4>
                            </div>
                            <ul>
                                <?php $Services = DB::table('services')->get(); ?>
                                @foreach ($Services as $Service)
                                <li @if($Service->id == $item->id) class="active" @endif><a href="{{url('/')}}/services/{{$Service->slung}}">{{$Service->title}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>




                </aside>
            </div>

        </div>
    </div>
</div>
@endforeach
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
{{--  --}}
@endsection


