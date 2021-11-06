@extends('front.layout.app')
@section('content')

<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Books</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('books') }}">Books</a> <span><i
                            class="fa fa-angle-double-right"></i>List</span>
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
                <th scope="col">Course Code</th>
                <th scope="col">Course Name</th>
                <th scope="col">Original Book</th>
                <th scope="col">Helping Book</th>
            </tr>
        </thead>
        <tbody>
            @foreach($book as $books)
            @if($books->wclass == $class->name && $books->category == 'Book')
            <tr>
                <td>{{$books->course_id}}</td>
                <td>{{$books->name}}</td>
                <td>
                    @if($books->pdffile == 'null')
                    @if($books->link1 == 'null')
                    Not Uploaded
                    @else
                    <a href="{{$books->link1}}" class="btn btn-primary">Download Book</a>
                    @endif
                    @else
                    <a href="{{URL::to('')}}/{{$books->pdffile}}" class="btn btn-primary">Download Book</a>
                    @endif
                </td>
                <td>
                    @if($books->pdffile1 == 'null')
                    @if($books->link2 == 'null')
                    Not Uploaded
                    @else
                    <a href="{{$books->link2}}" class="btn btn-primary">Download Book</a>
                    @endif
                    @else
                    <a href="{{URL::to('')}}/{{$books->pdffile1}}" class="btn btn-primary">Download Book</a>
                    @endif</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
