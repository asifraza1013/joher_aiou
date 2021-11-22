@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Assignment List</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('assignment') }}">Assignments</a> <span><i
                            class="fa fa-angle-double-right"></i>Assignments List</span>
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
                <th>Course Code </th>
                <th>Course Name</th>
                <th>Assignment 1</th>
                <th>Assignment 2</th>
                <th>Assignment 3</th>
                <th>Assignment 4</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignment as $item)
               <tr>
                   <td>{{ $item->course_id }}</td>
                   <td>{{ $item->name }}</td>
                   <td>
                       @if($item->link1 == 'null')
                       <span class="red">Not Uploaded</span>
                       @else
                        <a href="{{ $item->link1 }}"><u>assignment 1</u></a>
                       @endif
                   </td>
                   <td>
                    @if($item->link2  == 'null')
                    <span class="red">Not Uploaded</span>
                    @else
                     <a href="{{ $item->link2 }}"><u>assignment 2</u></a>
                    @endif
                   </td>
                   <td>
                    @if($item->link3 != 'null')
                    <a href="{{ $item->link3 }}"><u>assignment 3</u></a>
                    @endif
                   </td>
                   <td>
                    @if($item->link4 != 'null')
                    <a href="{{ $item->link4 }}"><u>assignment 4</u></a>
                    @endif
                   </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
