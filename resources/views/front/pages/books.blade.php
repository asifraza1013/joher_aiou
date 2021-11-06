@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Books</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Books</span>
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
            @foreach ($class as $item)
            @if (!is_null($item) && $item->name)
            <div class="col-sm-6 col-lg-3">
                <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                    <div class="image bottom25">
                        <img src="{{ asset('img/bookss.jpg') }}" alt="Course" class="border_radius" style="width: 200px; height: 150px;">
                    </div>
                    <h4 class="bottom10"><a href="{{ route('alldata', $item->id) }}">Download {{ $item->name }}</a></h4>
                    <a class="btn_common yellow border_radius" href="{{ route('alldata', $item->id) }}">Click To Get Book</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- Courses ends -->
@endsection
