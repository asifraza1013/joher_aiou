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
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9779744540969113"
     crossorigin="anonymous"></script>
<!-- Square Adds -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9779744540969113"
     data-ad-slot="1859384769"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
