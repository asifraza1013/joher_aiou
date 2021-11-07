@extends('front.layout.app')
@section('content')
<style>
    .d-none{
        display: none !important;
    }
    .reply{
        cursor: pointer;
    }
</style>
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Books</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Comments</span>
                </div>
            </div>
        </div>
    </div>
</section>
@include('msg.flash_messages')
<!--Page Header-->
<div class="container">
    @include('layouts.comments')
</div>
@endsection
