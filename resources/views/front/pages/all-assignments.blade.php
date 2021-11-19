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
            @foreach($assignment as $assignments)
            @if( $assignments->wclass == 'MATRIC (General, Dars-i Nizami)' || $assignments->wclass == 'INTERMEDIATE (FA,
            ICOM, Dars-i Nizami)' || $assignments->wclass == 'BACHELOR (BA, B.COM, BLIS, Dars-i Nizami)'
            )
            <tr>

                <td>{{$assignments->course_id}}</td>
                <td>{{$assignments->name}}</td>
                <td>
                    @if($assignments->a1 == 'null')

                    @if($assignments->link1 == 'null')

                    Not Uploaded

                    @else
                    <a href="{{$assignments->link1}}" class="btn btn-primary">Download Assignment 1</a>
                    @endif
                    @else <a href="{{URL::to('')}}/{{$assignments->a1}}" class="btn btn-primary">Download Assignment
                        1</a>
                    @endif

                </td>
                <td>
                    @if($assignments->a2 == 'null' )

                    @if($assignments->link2 == 'null')

                    Not Uploaded

                    @else
                    <a href="{{$assignments->link2}}" class="btn btn-primary">Download Assignment 2</a>
                    @endif

                    @else <a href="{{URL::to('')}}/{{$assignments->a2}}" class="btn btn-primary">Download Assignment
                        2</a>
                    @endif
                <td>
                    @if($assignments->a3 == 'null' )


                    @if($assignments->link3 == 'null')

                    Not Uploaded

                    @else
                    <a href="{{$assignments->link3}}" class="btn btn-primary">Download Assignment 3</a>
                    @endif

                    @else <a href="{{URL::to('')}}/{{$assignments->a3}}" class="btn btn-primary">Download Assignment
                        3</a>
                    @endif
                <td>
                    @if($assignments->a4 == 'null' )
                    @if($assignments->link4 == 'null')

                    Not Uploaded

                    @else
                    <a href="{{$assignments->link4}}" class="btn btn-primary">Download Assignment 4</a>
                    @endif

                    @else <a href="{{URL::to('')}}/{{$assignments->a4}}" class="btn btn-primary">Download Assignment
                        4</a>

                    @endif
                </td>
            </tr>
            @else
            <tr>

                <td>{{$assignments->course_id}}</td>
                <td>{{$assignments->name}}</td>
                <td>
                    @if($assignments->a1 == 'null')
                    @if($assignments->link1 == 'null')

                    Not Uploaded

                    @else
                    <a href="{{$assignments->link1}}" class="btn btn-primary">Download Assignment</a>
                    @endif

                    @else <a href="{{URL::to('')}}/{{$assignments->a1}}" class="btn btn-primary">Download Assignment
                        1</a>
                    @endif

                </td>
                <td>
                    @if($assignments->a2 == 'null')
                    @if($assignments->link2 == 'null')

                    Not Uploaded

                    @else
                    <a href="{{$assignments->link2}}" class="btn btn-primary">Download Assignment</a>
                    @endif

                    @else <a href="{{URL::to('')}}/{{$assignments->a2}}" class="btn btn-primary">Download Assignment
                        1</a>
                    @endif

                </td>
                <td>
                    Not Included

                </td>
                <td>
                    Not Included
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
