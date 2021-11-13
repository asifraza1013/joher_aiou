@extends ('backend/layout/layout1')
@section ('content')
<!-- Content Wrapper. Contains page content -->
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Books</h3>

                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#books">ADD<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Assignment<sup style="font-size: 20px"></sup></h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!-- data-toggle="modal" data-target="#assignment" -->
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#assignment">ADD <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Thesis & Teaching Practice</sup></h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#thesis">ADD<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Guess Papers</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>


            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Banner</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#banner">ADD <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Notifications</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#notification">ADD<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Links<sup style="font-size: 20px"></sup></h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#link">ADD <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Video Links</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#video">ADD<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Add Classes</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#classes">ADD<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Add Description</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#description">ADD<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- lesson plan -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Lesson Plan</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#lesson">ADD <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Add Applications</h3>

                            <p> </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#applications">ADD Now<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="books">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Books</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{URL::TO('')}}/addbook" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <select type="text" class="form-control " name="wclass" value="" required
                                            autofocus>
                                            @foreach($class as $classes)
                                            <option>{{$classes->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="course_id" value="" required
                                            autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="name" value="" required
                                            autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category')
                                        }}</label>

                                    <div class="col-md-6">
                                        <select type="text" class="form-control " name="category" value="" required
                                            autofocus>
                                            <option>Book</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                    <div class="col-md-6">
                                        <input type="submit" class="form-control btn btn-success " name="pdffile"
                                            value="" required autofocus>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>

            <div class="modal fade" id="assignment">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Assignment</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{URL::TO('')}}/addassignment" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <select type="text" class="form-control " name="wclass" value="" required
                                            autofocus>
                                            @foreach($class as $classes)
                                            <option>{{$classes->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="course_id" value="" required
                                            autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="name" value="" required
                                            autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                    <div class="col-md-6">
                                        <input type="submit" class="form-control btn btn-success " name="pdffile"
                                            value="" required autofocus>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>

            <div class="modal fade" id="thesis">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Thesis & Teaching Practice</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">





                            <form action="{{URL::TO('')}}/addthesis" method="POST" enctype="multipart/form-data"
                                id="my-awesome-dropzone">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <select type="text" class="form-control " name="wclass" value="" required
                                            autofocus>
                                            @foreach($class as $classes)
                                            <option>{{$classes->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="course_id" value="" required
                                            autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="name" value="" required
                                            autofocus>
                                    </div>
                                </div>

                                <!--<div class="form-group row">-->
                                <!--            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pdf') }}</label>-->

                                <!--            <div class="col-md-6">-->
                                <!--                <input type="file" class="form-control " name="pdffile" value=""   autofocus>-->
                                <!--            </div>-->



                                <!--</div>-->
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                    <div class="col-md-6">
                                        <input type="submit" class="form-control btn btn-success " name="" value=""
                                            required autofocus>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>

            <div class="modal fade" id="guess">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Guess Papers</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{URL::TO('')}}/addguess" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <select type="text" class="form-control " name="wclass" value="" required
                                            autofocus>
                                            @foreach($class as $classes)
                                            <option>{{$classes->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="course_id" value="" required
                                            autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="name" value="" required
                                            autofocus>
                                    </div>
                                </div>
                                < <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pdf')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input type="file" class="form-control " name="pdffile" value="" required
                                            autofocus>
                                    </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value=""
                                    required autofocus>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <div class="modal fade" id="link">
            <div class="modal-dialog" style="max-width: 800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Link</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/addlink" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">{{ __('Description ')
                                    }}</label>

                            <textarea type="text" class="form-control link-desc" name="description" value="" id="link-desc" required
                                autofocus> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">{{ __('Link') }}</label>
                                <input type="text" class="form-control " name="link" value="">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">{{ __('Link') }}</label>
                                <input type="text" class="form-control " name="link1" value="">
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-form-label text-md-right">{{ __('Category')
                                    }}</label>

                            <select type="text" class="form-control " name="category" value="" required
                                autofocus>
                                <option value="" selected disabled>Please select --</option>
                                @foreach (config('constants.categorires') as $key=>$item)
                                <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-form-label text-md-right">Submit</label>
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value=""
                                        required autofocus>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <div class="modal fade" id="banner">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Banners</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/addbanner" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title ')
                                    }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="title" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Image')
                                    }}</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control " name="img" value="" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                <div class="col-md-6">
                                    <input type="submit" class="form-control btn btn-success " name="" value="" required
                                        autofocus>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <div class="modal fade" id="notification">
            <div class="modal-dialog" style="max-width: 800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/addnotification" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Notification ')
                                    }}</label>
                                 <textarea type="text" class="form-control noti-desc" name="noti" value="" required
                                 autofocus id="noti-desc"> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Notification
                                    Title') }}</label>
                                <input type="text" class="form-control " name="name" value="" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('More Detail
                                    Link') }}</label>
                                <input type="text" class="form-control " name="date" value="" required autofocus>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>
                                <input type="submit" class="form-control btn btn-success " name="" value="" required
                                    autofocus>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <div class="modal fade" id="video">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Lecture Link</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/addvlink " method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id')
                                    }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="course_id" value="" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="name" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                    }}</label>

                                <div class="col-md-6">
                                    <select type="text" class="form-control " name="class" value="" required autofocus>
                                        @foreach($class as $classes)
                                        <option>{{$classes->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="link" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                <div class="col-md-6">
                                    <input type="submit" class="form-control btn btn-success " name="pdffile" value=""
                                        required autofocus>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>


        <div class="modal fade" id="classes">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/addclass" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                    }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="name" value="" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                <div class="col-md-6">
                                    <input type="submit" class="form-control btn btn-success " name="pdffile"
                                        value="Submit" required autofocus>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>




        <!-- ///////////////////////////////////////////////////////////////////////////// -->


        <div class="modal fade" id="description">
            <div class="modal-dialog" style="max-width: 800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Description</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/adddescription" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description')
                                    }}</label>

                                <textarea type="text" class="form-control desc-des" name="description" value="" required
                                    autofocus id="desc-des"> </textarea>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category')
                                    }}</label>

                                    <select type="text" class="form-control " name="category" value="" required
                                        autofocus>
                                        <option value="" disabled selected>-- select --</option>
                                        @foreach (config('constants.categorires') as $key=>$item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>
                                <input type="submit" class="form-control btn btn-success " name="pdffile"
                                    value="Submit" required autofocus>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <!-- ////////////////////////////////////////////////////////////// -->


        <div class="modal fade" id="lesson">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Lesson Plan</h4>
                        <button type="button" class="close" data-dismiss="modal" arisa-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::TO('')}}/addlesson" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name')
                                    }}</label>

                                <div class="col-md-6">
                                    <select type="text" class="form-control " name="wclass" value="" required autofocus>
                                        @foreach($class as $classes)
                                        <option>{{$classes->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id')
                                    }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="course_id" value="" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name')
                                    }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control " name="name" value="" required autofocus>
                                </div>
                            </div>

                            <!--<div class="form-group row">-->
                            <!--            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lesson Plan') }}</label>-->

                            <!--            <div class="col-md-6">-->
                            <!--                <input type="file" class="form-control " name="pdffile" value="" required  autofocus>-->
                            <!--            </div>-->
                            <!--</div>-->

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                                <div class="col-md-6">
                                    <input type="submit" class="form-control btn btn-success " name="" value="" required
                                        autofocus>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>


        @include('backend.partials.modals')

        <!-- /////////////////////////////////////////////////////////////////// -->

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'link-desc' );
    CKEDITOR.replace( 'noti-desc' );
    CKEDITOR.replace( 'desc-des' );
    CKEDITOR.replace( 'desc-application' );
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
@stop
