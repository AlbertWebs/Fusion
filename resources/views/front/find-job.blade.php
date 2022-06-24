@extends('front.masters')

@section('content')


<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="login-wrapper">
        {{-- <div class="login-bg" style="background-image: url('{{asset('theme/images/update-1-12-2020/background/login-bg.jpg')}}');"></div> --}}
        <!-- /.login-bg -->
        <div class="login-content">
            <div class="login-content__inners">
                <div class="logo-box">
                    {{-- <div class="logo text-center"><a href="{{url('/')}}"
                            title="Fusion HR Solutions "><img src="{{url('/')}}/uploads/logo/Fusion-logo.png"
                                width="80" id="dLogo" class="main-logo" alt="Fusion HR Solutions "
                                title="Fusion HR Solutions "></a></div> --}}
                </div>
                <br><br> <br><br>
                <div class="col-md-6" style="margin: 0 auto;">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name *">
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Email *">
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Mobile *">
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Address *">
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <input type="text" placeholder="Profession *">
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <input type="text" placeholder="Highest Level Of Education*">
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <input type="file" placeholder="Confirm Password *">
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        <button type='submit' class="theme-btn btn-style-one">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Submit</span>
                        </button>
                        <p class="signup-link">Data Collection Is Protected By Our <a href="{{url('/')}}/privacy-policy">Privacy Policy</a></p>
                    </form>
                    <p class="copyright-text text-center">© copyright {{date('Y')}} by Fusion HR Solutions</p><!-- /.copyright-text -->
                </div>
            </div><!-- /.login-content__inner -->
        </div><!-- /.login-content -->
    </section><!-- /.login-wrapper -->

</div>
<!--End pagewrapper-->
@endsection


