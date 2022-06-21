@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">{{ $title }}</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ $backRpute }}">{{ $backPage }}</a> <span><i
                            class="fa fa-angle-double-right"></i>{{ $title }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->
<div class="container bg-light pt-lg-5 pt-2 p-5">
    <div class="card" style="font-family: system-ui;">
        <div class="card-body">
            @if(count($description))
            @foreach($description as $descriptions)
            <p>{!!$descriptions->description!!}</p>
            @if(!empty($descriptions->link))
            <a href="{{URL::to('')}}/{{$descriptions->link}}" class="btn btn-primary ">Click For Info </a>
            @endif
            @endforeach
            @else
            <h5 class="red text-center">No Data Found</h5>
            @endif
        </div>
    </div>
</div>
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
@endsection
