@extends('front.layout.app')
@section('content')

<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1>About US</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>About Us</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->

<!--ABout US-->
<section id="about" class="padding">
    <div class="container aboutus">
        <div class="row">
            <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
                <h2 class="heading heading_space text-upercase">Welcome to JOHER AIOU <span class="divider-left"></span></h2>
                <h4 class="bottom25">This website & YouTube channel <span><a href="https://www.youtube.com/channel/UCaOu2WbAoxRpM596YtRcvvg" style="color: red; font-weight: bolder">Joher Videos</a></span> is a unique Platform for AIOU all Programs Students (Specially distance Learning) because through this Platform. </h4>
                <p class="bottom25">We give proper guidance and counselling through these platforms. And in this website we give <strong>free of cost</strong> All Programs solve Original Books, Key Books, Solve Assignment, and complete Videos tutorials about from taking Admission to get degree from university.</p>
                <p class="bottom25">We also Provide Assignment Services in which Students get or made at very low Price Solve Assignment, Lesson Plan, Thesis Project, etc. So Finally <strong>‘We give our best’</strong> for a good Future, keep in Prayers every Time our Team.</p>
            </div>
            <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image">
                    <img src="{{ asset('img/about-us.jpg') }}" alt="Edua">
                </div>
            </div>
            <div class="col-md-12 wow fadeInLeft" data-wow-delay="300ms">
                <div class="card p-4 mt-3">
                    <div class="card-header">
                        <h2 class="heading heading_space text-upercase">Keep in Touch<span class="divider-left"></span></h2>
                    </div>
                    <div class="body">
                        <div class="row p-2">
                            <div class="icon_wrap padding-bottom-half clearfix">
                                <a href="https://youtube.com/channel/UCaOu2WbAoxRpM596YtRcvvg">
                                    <div class="col-sm-4 col-xs-4 col-lg-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
                                        <i class="fa fa-youtube"></i>
                                        <h4 class="text-capitalize bottom20 margin10">Joher Videos</h4>
                                        <p>Click Here to get Youtube Videos</p>
                                    </div>
                                </a>
                                <a href="{{ route('front.lms.portal.tab') }}">
                                <div class="col-sm-4 col-lg-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                                    <i class="fa fa-facebook"></i>
                                    <h4 class="text-capitalize bottom20 margin10">Joher AIOU</h4>
                                    <p>Click Here to get facebook Page</p>
                                </div>
                                </a>
                                <a href="#">
                                <div class="col-sm-4 col-lg-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                                    <i class="fa fa-whatsapp"></i>
                                    <h4 class="text-capitalize bottom20 margin10">Whatsapp</h4>
                                    <p>0316-4962025 / 0313-0905455</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABout US-->
@endsection
