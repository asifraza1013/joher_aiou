@extends('front.layout.app')
@section('content')

<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Past Papers</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('guesspaper') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Past Papers</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->

@if(count($description))
<div class="container bg-light pt-lg-5 pt-2 p-5">
    <div class="card" style="font-family: system-ui;">
        <div class="card-body">
            @foreach($description as $descriptions)
            <p>{!!$descriptions->description!!}</p>
            @if(!empty($descriptions->link))
            <a href="{{URL::to('')}}/{{$descriptions->link}}" class="btn btn-primary ">Click For Info </a>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endif
<div class="container pt-lg-5 pt-2">
    <div class="card shadow">
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
        <table class="table" id="book-table">
            <thead class="thead-dark" style="background: black; color: white">
                <tr>
                    <th>Course Code </th>
                    <th>Course Name</th>
                    <th>Past Paers</th>
                    <th>5 Year Past Paper Unsolved </th>
                </tr>
            </thead>
            <tbody>
                @foreach($guess as $guesses)
                <tr>
                    <td>{{$guesses->course_id}}</td>
                    <td>{{$guesses->name}}</td>
                    <td>

                        @if($guesses->pdffile == 'null')
                        @if($guesses->link == 'null')
                        Not Uploaded
                        @else
                        <a href="{{$guesses->link}}" class="text-primary">Download </a>
                        @endif
                        @else

                        <a href="{{URL::to('')}}/{{$guesses->pdffile}}" class="text-primary">Download </a>
                        @endif</td>

                    <td>

                        @if($guesses->pdffile == 'null')
                        @if($guesses->link1 == 'null')
                        Not Uploaded

                        @else
                        <a href="{{$guesses->link1}}" class="text-primary">Download </a>
                        @endif
                        @else
                        <a href="{{URL::to('')}}/{{$guesses->pdffile1}}" class="text-primary">Download </a>
                        @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
