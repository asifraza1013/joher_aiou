@extends('front.layout.app')
@section('content')
<style>
    .nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs.dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}
</style>
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
        <h1 class="text-center">Two Assignment</h1>
        <div class="card shadow  mt-3 mt-lg-5">
            <div class="four-assignment" style="max-height: 600px;overflow: auto;">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($class)
                        @foreach ($class as $key=>$item)
                        @if ($item->link3 == 'null' && $item->link4 == 'null')
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->wclass }}</td>
                            <td>
                                <a class="btn_common yellow border_radius"
                                    href="{{ route('alladata', $item->wclass) }}">Click To Get
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
    </div>
</section>
<section id="course_all" class="padding-bottom mt-lg-5">
    <div class="container">
        <h1 class="text-center bold">Four Assignment</h1>
        <div class="card shadow  mt-3 mt-lg-5">
            <div class="two-assignment" style="max-height: 600px;overflow: auto;">
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
                        @if ($item->link3 != 'null' && $item->link4 != 'null')
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->wclass }}</td>
                            <td>
                                <a class="btn_common yellow border_radius"
                                    href="{{ route('alladata', $item->wclass) }}">Click To Get
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
    </div>
</section>
<!-- Courses ends -->
@endsection
