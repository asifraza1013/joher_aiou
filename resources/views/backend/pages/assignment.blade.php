 @extends ('backend/layout/layout')
  @section ('content')
 @if ($errors->any())
    <div class="alert alert-danger">
      <center>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul></center>
    </div>
@endif
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assignments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Assignments</li>
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
              <h3 class="card-title">All Assignments</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Class Name</th>
                  <th>Assignment 1</th>
                   <th>Assignment 2</th>
                    <th>Assignment 3</th>
                     <th>Assignment 4</th>
                  <th>Action</th>

                  
                </tr>
                </thead>
                <tbody>
              @foreach($assignment as $assignments) 
              
                <tr>
                    <td>{{$assignments->course_id}}
                  </td>
                  <td>{{$assignments->name}}</td>
                  <td>{{$assignments->wclass}}</td>
                  
                  <td>
                     @if($assignments->a1 == 'null')
                     
                     @if($assignments->link1 == 'null')
                      <a href="" data-toggle="modal" data-target="#updatea1{{$assignments->id}}" class="btn btn-primary">Update </a>
                      
                       @else
                     <a href="{{$assignments->link1}}"  class="btn btn-success">Download Assignment</a>
                      <a href="{{URL::to('')}}/deletel1/{{$assignments->id}}" class="btn btn-danger">Delete</a>
                     
                     @endif
                      @else

                    <a href="{{URL::to('')}}/{{$assignments->a1}}" class="btn btn-success">View 1</a>
                    <a href="{{URL::to('')}}/deletea1/{{$assignments->id}}" class="btn btn-danger">Delete</a>
                  @endif</td>
                  <td>
                     @if($assignments->a2 == 'null')
                     @if($assignments->link2 == 'null')
                      <a href="" data-toggle="modal" data-target="#updatea2{{$assignments->id}}" class="btn btn-primary">Update </a>
                      
                       @else
                     <a href="{{$assignments->link2}}"  class="btn btn-success">Download Assignment</a>
                      <a href="{{URL::to('')}}/deletel2/{{$assignments->id}}" class="btn btn-danger">Delete</a>
                     
                     @endif
                      
                      @else

                  <a href="{{URL::to('')}}/{{$assignments->a2}}" class="btn btn-success">View 2</a>
                  <a href="{{URL::to('')}}/deletea2/{{$assignments->id}}" class="btn btn-danger">Delete</a>
                @endif</td>
                  <td>
                     @if($assignments->a3 == 'null')
                      @if($assignments->link3 == 'null')
                      <a href="" data-toggle="modal" data-target="#updatea3{{$assignments->id}}" class="btn btn-primary">Update </a>
                      @else
                     <a href="{{$assignments->link3}}"  class="btn btn-success">Download Assignment</a>
                      <a href="{{URL::to('')}}/deletel3/{{$assignments->id}}" class="btn btn-danger">Delete</a>
                     
                     @endif
                      @else

                <a href="{{URL::to('')}}/{{$assignments->a3}}" class="btn btn-success">View 3</a>
                <a href="{{URL::to('')}}/deletea3/{{$assignments->id}}" class="btn btn-danger">Delete</a>
              @endif</td>
                <td>
                   @if($assignments->a4 == 'null')
                   @if($assignments->link4 == 'null')
                      <a href="" data-toggle="modal" data-target="#updatea4{{$assignments->id}}" class="btn btn-primary">Update </a>
                       @else
                     <a href="{{$assignments->link4}}"  class="btn btn-success">Download Assignment</a>
                      <a href="{{URL::to('')}}/deletel4/{{$assignments->id}}" class="btn btn-danger">Delete</a>
                     
                     @endif
                      
                      @else

                <a href="{{URL::to('')}}/{{$assignments->a4}}" class="btn btn-success">View 4</a>
                <a href="{{URL::to('')}}/deletea4/{{$assignments->id}}" class="btn btn-danger">Delete</a>
              @endif</td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#assignments{{$assignments->id}}" class="btn btn-success">Edit</a>
                <a href="{{URL::to('')}}/deleteassignment/{{$assignments->id}}" class="btn btn-danger">Delete</a></td>
                  
                </tr>

<div class="modal fade" id="assignments{{$assignments->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editassignment" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control " name="wclass" value="" required  autofocus>
                                  <option>{{$assignments->wclass}}</option>
                                  @foreach($class as $classes)
                                  <option>{{$classes->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$assignments->id}}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="course_id" value="{{$assignments->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="name" value="{{$assignments->name}}" required  autofocus>
                            </div>
                </div>
                   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment1') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a1" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment2') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a2" value="" >
                            </div>
                </div>

                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment3') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a3" value="" >
                            </div>
                </div>

                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment4') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a4" value="" >
                            </div>
                </div>
                
                
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 1') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link1" value="" >
                            </div>
                </div>
                
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 2') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link2" value="" >
                            </div>
                </div>
                
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 3') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link3" value="" >
                            </div>
                </div>
                
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 4') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link4" value="" >
                            </div>
                </div>
                
               
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value="" required  autofocus>
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

<!-- //////////////////////update a1 ///////////////////////////////////// -->

<div class="modal fade" id="updatea1{{$assignments->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editassignment" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$assignments->wclass}}" required  autofocus>
                                  
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$assignments->id}}">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$assignments->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$assignments->name}}" required  autofocus>
                            </div>
                </div>
                   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment1') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a1" value="" >
                            </div>
                </div>
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 1') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link1" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link2" value="{{$assignments->link2}}" >
                            </div>
                </div>
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link3" value="{{$assignments->link3}}" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link4" value="{{$assignments->link4}}" >
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value="" required  autofocus>
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


               <!-- end -->

<!-- //////////////////////update a2 ///////////////////////////////////// -->

<div class="modal fade" id="updatea2{{$assignments->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editassignment" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$assignments->wclass}}" required  autofocus>
                                  
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$assignments->id}}">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$assignments->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$assignments->name}}" required  autofocus>
                            </div>
                </div>
                   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment2') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a2" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 2') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link2" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link1" value="{{$assignments->link1}}" >
                            </div>
                </div>
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link3" value="{{$assignments->link3}}" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link4" value="{{$assignments->link4}}" >
                            </div>
                </div>
                
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value="" required  autofocus>
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


               <!-- end -->


<!-- //////////////////////update a3 ///////////////////////////////////// -->

<div class="modal fade" id="updatea3{{$assignments->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editassignment" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$assignments->wclass}}" required  autofocus>
                                  
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$assignments->id}}">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$assignments->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$assignments->name}}" required  autofocus>
                            </div>
                </div>
                   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment3') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a3" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 3') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link3" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link2" value="{{$assignments->link2}}" >
                            </div>
                </div>
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link1" value="{{$assignments->link1}}" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link4" value="{{$assignments->link4}}" >
                            </div>
                </div>
                
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value="" required  autofocus>
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


               <!-- end -->
<!-- //////////////////////update a4 ///////////////////////////////////// -->

<div class="modal fade" id="updatea4{{$assignments->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editassignment" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$assignments->wclass}}" required  autofocus>
                                  
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$assignments->id}}">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$assignments->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$assignments->name}}" required  autofocus>
                            </div>
                </div>
                   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Assignment4') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="a4" value="" >
                            </div>
                </div>

 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 4') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link4" value="" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link2" value="{{$assignments->link2}}" >
                            </div>
                </div>
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link3" value="{{$assignments->link3}}" >
                            </div>
                </div>

                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link1" value="{{$assignments->link1}}" >
                            </div>
                </div>
                
                
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success " name="pdffile" value="" required  autofocus>
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


               <!-- end -->





               @endforeach
                </tbody>
                <tfoot>
                <tr>
                     <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Class Name</th>
                  <th>Assignment 1</th>
                   <th>Assignment 2</th>
                    <th>Assignment 3</th>
                     <th>Assignment 4</th>
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