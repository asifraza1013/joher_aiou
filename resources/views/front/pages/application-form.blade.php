@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Application Form</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Application Form</span>
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
            @if(count($link))
            @foreach($link as $links)
            <div class="col-sm-6 col-lg-3">
                <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                    <div class="image bottom25">
                        <img src="{{ asset('img/form.jpg') }}" alt="Course" class="border_radius" style="width: 200px; height: 150px;">
                    </div>
                    <h4 class="bottom10">{{ $item->description }}</h4>
                    @if(!empty($links->link))
                    <a class="btn_common yellow border_radius" href="{{ $link->link }}">Click For Video</a>
                    @endif
                    @if(!empty($links->link1))
                    <a class="btn_common yellow border_radius" href="{{ $link->link1 }}">Click For Download</a>
                    @endif
                </div>
            </div>
            @endforeach
            @else
            <div class="container bg-light pt-lg-5 pt-2 p-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="red">No Data Found</h3>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- Courses ends -->
@endsection
