@extends('front.layout.app')
@section('content')

<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Lesson Plan</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Lesson Plan</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->

<div class="container pt-lg-5 pt-2">
    <table class="table" id="book-table">
        <thead class="thead-dark" style="background: black; color: white">
            <tr>
                <th>Course Id</th>
                <th>Course Name</th>
                <th>Lesson Plan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lesson as $lessons)
            <tr>
                <td>{{$lessons->course_id}}</td>
                <td>{{$lessons->name}}</td>
                <td>
                    @if($lessons->pdffile == 'null' )
                    @if($lessons->link == 'null' )
                    Not Uploaded
                    @else
                    <a href="{{$lessons->link}}" class="btn btn-primary">Download Lesson Plan</a>
                    @endif
                    @else
                    <a href="{{URL::to('')}}/{{$lessons->pdffile}}" class="btn btn-primary">Lesson Plan</a>

                    @endif </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
