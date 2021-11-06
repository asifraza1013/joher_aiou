@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Aaghi LMS Portal</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Aaghi LMS Portal</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->

<!-- Courses -->
<section id="course_all" class="padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                    <h3 class="bottom10"><a href="">Online Workshop</a></h3>
                    <p class="bottom10">Click to find more detail.</p>
                    <a class="btn_common yellow border_radius" href="{{ route('front.lms.portal', 'online_workshop') }}">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="course margin_top wow fadeIn" data-wow-delay="500ms">
                    <h3 class="bottom10"><a href="course_detail.html">Online Assignment Submission</a></h3>
                    <p class="bottom20">Click to find more detail.</p>
                    <a class="btn_common yellow border_radius" href="{{ route('front.lms.portal', 'online_assignment_submission') }}">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="course margin_top wow fadeIn" data-wow-delay="600ms">
                    <h3 class="bottom10"><a href="">Online Thesis & Teaching Practice Submission</a></h3>
                    <p class="bottom20">Click to find more detail.</p>
                    <a class="btn_common yellow border_radius" href="{{ route('front.lms.portal', 'thesis_tech_practice_submission') }}">view details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses ends -->
@endsection
