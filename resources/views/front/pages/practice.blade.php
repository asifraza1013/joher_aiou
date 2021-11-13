@extends('front.layout.app')
@section('content')
<style>
      @media (min-width: 480px) {
        .setting{
        width: 32% !important;
        left:33% !important;
    }
    .setting-1{
        width: 32% !important;
    }
    .setting-2{
        width: 32% !important;
        left:66% !important;
    }
      }
</style>
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Teaching Practice</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Teaching Practice</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->


<!--Testimonial-->
<section id="testinomila_page" class="padding">
    <div class="container">
        {{-- <div class="row">
        <div class="col-md-12 wow fadeInDown">
          <h2 class="heading heading_space">What People Say ?<span class="divider-left"></span></h2>
        </div>
      </div> --}}
        <div id="js-grid-masonry" class="cbp">
            <div class="row">
                <div class="cbp-item setting-1">
                    <div class="cbp-caption-defaultWrap">
                        <div class="testimonial_wrap">
                            <div class="testimonial_text text-center">
                                <a href="http://techzonesit.com/"><i class="icon-books"
                                        style="font-size: 45px;color:#ffb600"></i></a>
                                <p>Solve Teaching Practice Booklet 8607.</p>
                            </div>
                            <div class="testimonial_pic">
                                <a class="btn_common yellow border_radius" href="{{ url('/teaching') }}">Click For Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item setting">
                    <div class="cbp-caption-defaultWrap">
                        <div class="testimonial_wrap">
                            <div class="testimonial_text text-center">
                                <a href="http://techzonesit.com/"><i class="icon-books"
                                        style="font-size: 45px;color:#ffb600"></i></a>
                                <p>Solve Research Project 8613,8675,8657,6464.</p>
                            </div>
                            <div class="testimonial_pic">
                                <a class="btn_common yellow border_radius" href="{{ url('/research') }}">Click for Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item setting-2">
                    <div class="cbp-caption-defaultWrap">
                        <div class="testimonial_wrap">
                            <div class="testimonial_text text-center">
                                <a href="{{ route('thesis') }}"><i class="icon-books"
                                        style="font-size: 45px;color:#ffb600"></i></a>
                                <p>Plagerism Checker & Remove.</p>
                            </div>
                            <div class="testimonial_pic">
                                <a class="btn_common yellow border_radius" href="{{ route('front.admission.detail', 'plag_checker') }}">Check Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="cbp-item setting-2">
                    <div class="cbp-caption-defaultWrap">
                        <div class="testimonial_wrap">
                            <div class="testimonial_text text-center">
                                <a href="{{ route('thesis') }}"><i class="icon-books"
                                        style="font-size: 45px;color:#ffb600"></i></a>
                                <p>Solved Thesis.</p>
                            </div>
                            <div class="testimonial_pic">
                                <a class="btn_common yellow border_radius" href="{{ route('thesis') }}">Click for Download Thesis</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
