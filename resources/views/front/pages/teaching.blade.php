@extends('front.layout.app')
@section('content')

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

@if(count($description))
<div class="container bg-light pt-lg-5 pt-2 p-5">
    <div class="card">
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
    <table class="table" id="book-table">
        <thead class="thead-dark" style="background: black; color: white">
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Thesis File </th>
            </tr>
        </thead>
        <tbody>
            @if(count($thesis))
            @foreach($thesis as $theses)
            <tr>
                <td>{{$theses->course_id}}</td>
                <td>{{$theses->name}}</td>
                <td>@if($theses->pdffile == 'null')
                    @if($theses->link1 == 'null')
                    Not Uploaded
                    @else
                    <a href="{{$theses->link1}}" class="btn btn-primary">Download Thesis </a>
                    @endif
                    @else
                    <a href="{{URL::to('')}}/{{$theses->pdffile}}" class="btn btn-primary">Download Thesis </a>
                    @endif</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
   </div>
</div>
@endsection
