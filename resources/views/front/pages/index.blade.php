@extends('front.layout.app')
@section('content')
<!--Slider-->
<section class="rev_slider_wrapper text-center icon_wrap">
    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
    <div id="rev_slider" class="rev_slider" data-version="5.0">
        <ul>
            <!-- SLIDE  -->
            @foreach ($banner as $key=>$item)
            <li data-transition="fade">
                <!-- MAIN IMAGE -->
                <img src="{{ asset($item->img) }}" alt="" data-bgposition="center center" data-bgfit="cover"
                    data-bgparallax="10" class="rev-slidebg">
                <!-- LAYER NR. 1 -->
                @if ($item->title)
                <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                    data-hoffset="['0','0','0','0']" data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"
                    data-responsive_offset="on" data-visibility="['on','on','on','on']" data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800">
                    <h1 class="bolder">{{ $item->title }}</h1>
                </div>
                @endif
            </li>
            @endforeach
        </ul>
    </div><!-- END REVOLUTION SLIDER -->
</section>

<section id="about " class="icon_wrap">
<div class="bg-light p-5">
    <div class="container text-center">
        <h1 class="bolder">What We Offer</h1>
    </div>
</div>
</section>
<!--ABout US-->
<section id="about" class="padding">
    <div class="container">
        <div class="row">
            <div class="icon_wrap padding-bottom-half clearfix">
                <a href="{{ route('admission') }}">
                    <div class="col-sm-3 col-xs-6 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
                        <i class="icon-home"></i>
                        <h4 class="text-capitalize bottom20 margin10">Admissions</h4>
                    </div>
                </a>
                <a href="{{ route('front.lms.portal.tab') }}">
                <div class="col-sm-3 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                    <i class="icon-camera"></i>
                    <h4 class="text-capitalize bottom20 margin10">Aaghi LMS Portal</h4>
                </div>
                </a>
                <a href="{{ route('books') }}">
                <div class="col-sm-3 col-xs-6 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                    <i class="icon-books"></i>
                    <h4 class="text-capitalize bottom20 margin10">Books & Key Books</h4>
                </div>
                </a>
                <a href="{{ route('assignment') }}">
                <div class="col-sm-3 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-book"></i>
                    <h4 class="text-capitalize bottom20 margin10">Solved Assignments</h4>
                    {{-- <p class="no_bottom">Free Download all programs Spring 2021 Solve Assignment in PDF.</p> --}}
                </div>
                </a>
                <a href="{{ route('guesspaper') }}">
                <div class="col-sm-3 col-xs-6 icon_box text-center heading_space wow fadeInUp" data-wow-delay="600ms">
                    <i class="icon-globe"></i>
                    <h4 class="text-capitalize bottom20 margin10">Past Papers</h4>
                    {{-- <p class="no_bottom">Free Download Solved Semester Terminal Exam (STE) Autumn 2020.</p> --}}
                </div>
                </a>
                <a href="{{ route('videolectures') }}">
                <div class="col-sm-3 icon_box text-center heading_space wow fadeInUp" data-wow-delay="400ms">
                    <i class="icon-video"></i>
                    <h4 class="text-capitalize bottom20 margin10">Video Lectures</h4>
                </div>
                </a>
                <a href="{{ route('results') }}">
                <div class="col-sm-3 col-xs-6 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-list"></i>
                    <h4 class="text-capitalize bottom20 margin10">Examination & Results</h4>
                </div>
                </a>
                <a href="{{ route('applicationform') }}">
                <div class="col-sm-3 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-layers"></i>
                    <h4 class="text-capitalize bottom20 margin10">Application Form</h4>
                </div>
                </a>
                <a href="{{ route('teaching') }}">
                <div class="col-sm-3 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-user"></i>
                    <h4 class="text-capitalize bottom20 margin10">Solve Thesis And Teaching Practic</h4>
                </div>
                </a>
                <a href="{{ route('front.compressor.tab') }}">
                <div class="col-sm-3 col-xs-6 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-laptop"></i>
                    <h4 class="text-capitalize bottom20 margin10">Compressor</h4>
                </div>
                <a href="{{ route('front.lms.portal.tab') }}">
                <div class="col-sm-3 col-xs-6 icon_box text-center heading_space wow fadeInUp" data-wow-delay="500ms">
                    <i class="icon-browser"></i>
                    <h4 class="text-capitalize bottom20 margin10">Articles</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABout US-->

@endsection
