@extends('front.layout.app')
@section('content')

<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Video Lecture</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('videolectures') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Video Lecture</span>
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
                <th>Code</th>
                <th>Name </th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
            @if(count($book))
            @foreach($book as $books)
            <tr>
                <td>{{$books->course_id}}</td>
                <td>{{$books->name}}</td>
                <td><a href="{{$books->link}}" class="btn btn-primary">Click For Video</a></td>
            </tr>
            @endforeach
            @else
            <tr class="text-center">
                <td colspan="3">No Record Found!</td>
            </tr>
            @endif
        </tbody>
    </table>
   </div>
</div>
@endsection
