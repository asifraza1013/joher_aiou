@extends ('backend/layout/layout')
@section ('content')

@if ($errors->any())
<div class="alert alert-danger">
    <center>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </center>
</div>
@endif
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Books</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL::TO('')}}/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Book</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Books</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Class Name</th>

                                    <th>Text Book</th>
                                    <th>Help Book</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($book as $books)
                                @if($books->category == "Book")
                                <tr>
                                    <td>{{$books->course_id}}
                                    </td>
                                    <td>{{$books->name}}</td>
                                    <td>{{$books->wclass}}
                                    </td>

                                    <td>
                                        @if($books->pdffile == 'null' )


                                        @if($books->link1 == 'null')
                                        <a href="" data-toggle="modal" data-target="#bookupload1{{$books->id}}"
                                            class="btn btn-primary">Update</a>
                                        @else
                                        <a href="{{$books->link1}}" class="btn btn-success">Download Link</a>
                                        <a href="{{URL::to('')}}/deletelink1/{{$books->id}}"
                                            class="btn btn-danger">Delete</a>

                                        @endif

                                        @else


                                        <a href="{{URL::to('')}}/{{$books->pdffile}}" class="btn btn-primary">View</a>
                                        <a href="{{URL::to('')}}/deletebooks/{{$books->id}}"
                                            class="btn btn-danger">Delete</a>
                                        @endif


                                    </td>
                                    <td>
                                        @if($books->pdffile1 == 'null')

                                        @if($books->link2 == 'null')
                                        <a href="" data-toggle="modal" data-target="#bookupload2{{$books->id}}"
                                            class="btn btn-primary">Update</a>
                                        @else
                                        <a href="{{$books->link2}}" class="btn btn-success">Download Link</a>
                                        <a href="{{URL::to('')}}/deletelink2/{{$books->id}}"
                                            class="btn btn-danger">Delete</a>
                                        @endif

                                        @else
                                        <a href="{{URL::to('')}}/{{$books->pdffile1}}" class="btn btn-primary">View</a>
                                        <a href="{{URL::to('')}}/deletebooks1/{{$books->id}}"
                                            class="btn btn-danger">Delete</a>

                                        @endif

                                    </td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#books{{$books->id}}"
                                            class="btn btn-success">Edit</a>
                                        <a href="{{URL::to('')}}/deletebook/{{$books->id}}"
                                            class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>

                                <div class="modal fade" id="books{{$books->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Default Modal</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{URL::TO('')}}/editbook" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Class
                                                            Name') }}</label>

                                                        <div class="col-md-6">
                                                            <select type="text" class="form-control " name="wclass"
                                                                value="" required autofocus>
                                                                <option>{{$books->wclass}}</option>
                                                                @foreach($class as $classes)
                                                                <option>{{$classes->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="id" value="{{$books->id}}">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Course
                                                            Id') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control " name="course_id"
                                                                value="{{$books->course_id}}" required autofocus>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Course
                                                            Name') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control " name="name"
                                                                value="{{$books->name}}" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{
                                                            __('Category') }}</label>

                                                        <div class="col-md-6">
                                                            <select type="text" class="form-control " name="category"
                                                                value="" required autofocus>
                                                                <option>{{$books->category}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="pdffile"
                                                                value="{{$books->pdffile}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="pdffile1"
                                                                value="{{$books->pdffile1}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Link
                                                            1') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control " name="link1"
                                                                value="{{$books->link1}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Link
                                                            2') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control " name="link2"
                                                                value="{{$books->link2}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">Submit</label>

                                                        <div class="col-md-6">
                                                            <input type="submit" class="form-control btn btn-success "
                                                                name="pdffile" value="" required autofocus>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                </div>

                                <!-- update book 1 -->
                                <div class="modal fade" id="bookupload1{{$books->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Default Modal</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{URL::TO('')}}/editbook" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="wclass"
                                                                value="{{$books->wclass}}" required autofocus>


                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="id" value="{{$books->id}}">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="course_id"
                                                                value="{{$books->course_id}}" required autofocus>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="name"
                                                                value="{{$books->name}}" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="category"
                                                                value="{{$books->category}}" required autofocus>


                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Pdf')
                                                            }}</label>

                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control " name="pdffile"
                                                                value="" multiple />
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="link2"
                                                                value="{{$books->link2}}" multiple />
                                                        </div>
                                                    </div>




                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{
                                                            __('Download Link') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control " name="link1"
                                                                value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="pdffile1"
                                                                value="{{$books->pdffile1}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">Submit</label>

                                                        <div class="col-md-6">
                                                            <input type="submit" class="form-control btn btn-success "
                                                                name="pdffile" value="" required autofocus>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                </div>
                                <!-- end  -->
                                <!-- update book 2 -->
                                <div class="modal fade" id="bookupload2{{$books->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Default Modal</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{URL::TO('')}}/editbook" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="wclass"
                                                                value="{{$books->wclass}}" required autofocus>


                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="id" value="{{$books->id}}">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="course_id"
                                                                value="{{$books->course_id}}" required autofocus>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="name"
                                                                value="{{$books->name}}" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="category"
                                                                value="{{$books->category}}" required autofocus>


                                                        </div>
                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="pdffile"
                                                                value="{{$books->pdffile1}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{ __('Pdf')
                                                            }}</label>


                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control " name="pdffile1"
                                                                value="{{$books->pdffile1}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">


                                                        <div class="col-md-6">
                                                            <input type="hidden" class="form-control " name="link1"
                                                                value="{{$books->link1}}" multiple />
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">{{
                                                            __('Download Link') }}</label>

                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control " name="link2"
                                                                value="" multiple />
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-right">Submit</label>

                                                        <div class="col-md-6">
                                                            <input type="submit" class="form-control btn btn-success "
                                                                name="pdffile" value="" required autofocus>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                </div>
                                <!-- end  -->


                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Class Name</th>

                                    <th>Text Book</th>
                                    <th>Help Book</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
