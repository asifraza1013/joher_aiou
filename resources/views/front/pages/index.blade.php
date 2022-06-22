@extends('front.layout.app')
@section('content')
<!--Slider-->
<section class="rev_slider_wrapper text-center icon_wrap">
    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
    <div id="rev_slider" class="rev_slider slider-h" data-version="5.0">
        <ul>
            <!-- SLIDE  -->
            @foreach ($banner as $key=>$item)
            <li data-transition="fade">
                <!-- MAIN IMAGE -->
                <img src="{{URL::TO('')}}/{{$item->img}}" alt="" data-bgposition="top" data-bgfit="contain"
                    data-bgparallax="10" class="rev-slidebg banner-m" >
                <!-- LAYER NR. 1 -->
                @if ($item->title)
                <div class="tp-caption tp-resizeme banner-m" data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']" data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"
                    data-responsive_offset="on" data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                    {{-- <h1 class="bolder">{{ $item->title }}</h1> --}}
                </div>
                @endif
            </li>
            @endforeach
        </ul>
    </div><!-- END REVOLUTION SLIDER -->
</section>

<section id="about " class="icon_wrap">
<div class="bg-light p-5 d-lg-block d-none">
    <div class="container text-center">
        <h1 class="bolder">What We Offer</h1>
    </div>
</div>
</section>
@include('msg.flash_messages')
<!--ABout US-->
<section id="about" class="padding">
    <div class="container">
        <div class="row desk-view">
            <div class="icon_wrap padding-bottom-half clearfix">
                <a href="{{ route('admission') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                        <i class="fa fa-home"></i>
                        <h4 class="text-capitalize bottom20 margin10">Admissions</h4>
                    </div>
                </a>
                <a href="{{ route('front.lms.portal.tab') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-camera"></i>
                    <h4 class="text-capitalize bottom20 margin10">Aaghi LMS Portal</h4>
                </div>
                </a>
                <a href="{{ route('books') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-book
                    "></i>
                    <h4 class="text-capitalize bottom20 margin10">Books & Key Books</h4>
                </div>
                </a>
                <a href="{{ route('assignment') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-books"></i>
                    <h4 class="text-capitalize bottom20 margin10">Solved Assignments</h4>
                    {{-- <p class="no_bottom">Free Download all programs Spring 2021 Solve Assignment in PDF.</p> --}}
                </div>
                </a>
                <a href="{{ route('guesspaper') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-globe"></i>
                    <h4 class="text-capitalize bottom20 margin10">Past Papers</h4>
                    {{-- <p class="no_bottom">Free Download Solved Semester Terminal Exam (STE) Autumn 2020.</p> --}}
                </div>
                </a>
                <a href="{{ route('videolectures') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-camera"></i>
                    <h4 class="text-capitalize bottom20 margin10">Video Lectures</h4>
                </div>
                </a>
                <a href="{{ route('results') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-list"></i>
                    <h4 class="text-capitalize bottom20 margin10">Examination & Results</h4>
                </div>
                </a>
                <a href="{{ route('applicationform') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-align-center"></i>
                    <h4 class="text-capitalize bottom20 margin10">Application Form</h4>
                </div>
                </a>
                <a href="{{ route('practice') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-align-left"></i>
                    <h4 class="text-capitalize bottom20 margin10">Solve Thesis And Teaching Practic</h4>
                </div>
                </a>
                <a href="{{ route('front.compressor.tab') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-align-right"></i>
                    <h4 class="text-capitalize bottom20 margin10">Compressor</h4>
                </div>
                </a>
                <a href="{{ route('front.lms.portal.tab') }}">
                    <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-tv"></i>
                    <h4 class="text-capitalize bottom20 margin10">Articles</h4>
                </div>
                </a>
                <a href="{{ route('lessonplan') }}">
                <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-book"></i>
                    <h4 class="text-capitalize bottom20 margin10">Lesson Plan</h4>
                </div>
                </a>
                <a href="https://enrollment.aiou.edu.pk/psp/prod/?cmd=login&languageCd=ENG&" target="_blank">
                <div class="col-sm-4 col-xs-4 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="fa fa-lock"></i>
                    <h4 class="text-capitalize bottom20 margin10">CMS Portal</h4>
                </div>
                </a>
                <a href="">
                <div class="col-sm-12 col-xs-12 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
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
                </div>
                </a>
            </div>
        </div>

        <div class="row d-flex mt-lg-0 mobile-view">
            <a href="{{ route('admission') }}">
                <div class="col-sm-4 col-xs-4">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-home fa-1x text text-primary"></i>
                            <h4 class="bold">Admissions</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('front.lms.portal.tab') }}">
                <div class="col-sm-4 col-xs-4">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-camera fa-1x text text-primary"></i>
                            <h4 class="bold">Aaghi LMS Portal</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('books') }}">
                <div class="col-sm-4 col-xs-4">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-book fa-1x text text-primary"></i>
                            <h4 class="bold">Books & Key Books</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('assignment') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-books fa-1x text text-primary"></i>
                            <h4 class="bold">Solved Assignments</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('guesspaper') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-globe fa-1x text text-primary"></i>
                            <h4 class="bold">Past Papers</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('videolectures') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-camera fa-1x text text-primary"></i>
                            <h4 class="bold">Video Lectures</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('results') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-list fa-1x text text-primary"></i>
                            <h4 class="bold">Examination & Results</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('applicationform') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-align-center fa-1x text text-primary"></i>
                            <h4 class="bold">Application Form</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('practice') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-align-left fa-1x text text-primary"></i>
                            <h4 class="bold">Solve Thesis And Teaching Practic</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('front.compressor.tab') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-align-right fa-1x text text-primary"></i>
                            <h4 class="bold">Compressor</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('front.lms.portal.tab') }}">
                <div class="col-sm-4 col-xs-4 mt-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-tv fa-1x text text-primary"></i>
                            <h4 class="bold">Articles</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('lessonplan') }}">
                <div class="col-sm-4 col-xs-4 mt-2 p-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
                            <i class="fa fa-book fa-1x text text-primary"></i>
                            <h4 class="bold">Lesson Plan</h4>
                        </div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="col-sm-12 col-xs-12 mt-2 p-2">
                    <div class="card" style="min-height: 63px">
                        <div class="car-body text-center wow  fadeInUp" data-wow-delay="500ms">
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
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <!-- comment section -->
    @include('layouts.comments')
    </div>
</section>
<!--ABout US-->
@endsection
