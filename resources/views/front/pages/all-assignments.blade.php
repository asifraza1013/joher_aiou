@extends('front.layout.app')
@section('content')
<style>
</style>
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
    <h2 for="" class="bold text-center m-2">Two Assignments</h2>
    <div class="table-block">
        <table class="table" id="book-table">
            <thead class="thead-dark" style="background: black; color: white">
                <tr>
                    <th>Course Code </th>
                    <th>Course Name</th>
                    <th>Assignment 1</th>
                    <th>Assignment 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assignment as $item)
                @if($item->link3 == 'null' && $item->link4 == 'null')
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
                        @if($item->link2 == 'null')
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
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<hr class="mt-3">
<hr class="mt-3">
<hr class="mt-3">
<div class="container pt-lg-5 pt-2">
    <h2 for="" class="bold text-center m-2">Four Assignments</h2>
    <div class="table-block">
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
                @if($item->link3 != 'null' && $item->link4 != 'null')
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
                        @if($item->link2 == 'null')
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
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
