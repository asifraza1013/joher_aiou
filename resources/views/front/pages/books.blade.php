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
<!-- Courses -->
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
<section id="course_all" class="padding-bottom">
    <div class="container">
        <div class="row">
            {{-- @foreach ($class as $item)
            @if (!is_null($item) && $item->name)
            <div class="col-sm-6 col-lg-3">
                <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                    <div class="image bottom25">
                        <img src="{{ asset('img/bookss.jpg') }}" alt="Course" class="border_radius"
                            style="width: 200px; height: 150px;">
                    </div>
                    <h4 class="bottom10"><a href="{{ route('alldata', $item->id) }}">Download {{ $item->name }}</a></h4>
                    <a class="btn_common yellow border_radius" href="{{ route('alldata', $item->id) }}">Click To Get
                        Book</a>
                </div>
            </div>
            @endif
            @endforeach --}}
            <div class="card shadow  mt-3 mt-lg-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($class)
                        @foreach ($class as $key=>$item)
                        @if (!is_null($item) && $item->name)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a class="btn_common yellow border_radius"
                                    href="{{ route('alldata', $item->id) }}">Click To Get Book</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        @else
                        <tr class="text-center">
                            <td colspan="2">No Record Found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Courses ends -->
@endsection
