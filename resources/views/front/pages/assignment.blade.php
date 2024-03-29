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

<!-- Courses -->
<section id="course_all" class="padding-bottom">
    <div class="container">
        <div class="card shadow  mt-3 mt-lg-5">
            <div class="four-assignment">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 0;
                        @endphp
                        @if($class)
                        @foreach ($uclass as $key=>$item)
                        @php
                            $count += 1;
                        @endphp
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item }}</td>
                            <td>
                                <a class="btn_common yellow border_radius"
                                    href="{{ route('alladata', Crypt::encrypt($item)) }}">Click To Get
                                    Assignment</a>
                            </td>
                        </tr>
                        @endforeach


                        @foreach ($class as $key=>$item)
                        @if(!array_key_exists($item->wclass, $uclass))
                        @php
                            $count += 1;
                        @endphp
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item->wclass }}</td>
                            <td>
                                <a class="btn_common yellow border_radius"
                                    href="{{ route('alladata', Crypt::encrypt($item->wclass)) }}">Click To Get
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
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9779744540969113"
                     crossorigin="anonymous"></script>
                <!-- Horizontal for Footer -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9779744540969113"
                     data-ad-slot="3540132096"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
</section>
<!-- Courses ends -->
@endsection
