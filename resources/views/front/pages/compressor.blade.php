@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Compressor</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Compressor</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->

<div class="container bg-light pt-lg-5 pt-2 p-5">
    <div class="card">
        <div class="card-body">
            @if($description)
            <h3 class="red">{!! $description->description !!}</h3>
            @else
            <h5 class="red">No Data Found</h5>
            @endif
        </div>
    </div>
</div>
@endsection
