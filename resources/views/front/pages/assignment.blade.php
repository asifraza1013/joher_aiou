@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1 class="text-center">Assignments</h1>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('index') }}">Home</a> <span><i
                            class="fa fa-angle-double-right"></i>Assignments</span>
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
<!-- Courses -->
<section id="course_all" class="padding-bottom">
    <div class="container">
        <div class="card shadow  mt-3 mt-lg-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($class)
                    @foreach ($class as $key=>$item)
                    @if (!is_null($item) && $item->name)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a class="btn_common yellow border_radius" href="{{ route('alladata', $item->id) }}">Click To Get
                                Assignment</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    @else
                    <tr class="text-center">
                        <td colspan="2">No Record Found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Courses ends -->
@endsection
