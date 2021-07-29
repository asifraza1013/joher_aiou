 @extends ('backend/layout/layout')
  @section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Guess Papers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::TO('')}}/dashboard">Home</a></li>
              <li class="breadcrumb-item active">All Guess Papers</li>
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
              <h3 class="card-title">All Guess Papers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                     <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Class Name</th>
                 
                  <th>File 1</th>
                  <th>Flie 2</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              @foreach($guess as $guesses) 
             
                <tr>
                    <td>{{$guesses->course_id}}
                  </td>
                  <td>{{$guesses->name}}</td>
                  <td>{{$guesses->wclass}}</td>
                  

                  <td> @if($guesses->pdffile == 'null')
                  @if($guesses->link == 'null')
                  
                     <a href="" data-toggle="modal" data-target="#guessupload1{{$guesses->id}}" class="btn btn-primary">Update</a>
                      @else
                    
                     <a href="{{URL::to('')}}/{{$guesses->link}}"  class="btn btn-success"> Link 1</a>
                      <a href="{{URL::to('')}}/deletepdflink/{{$guesses->id}}" class="btn btn-danger">Delete</a>
                       @endif
                    @else
                   

                    <a href="{{URL::to('')}}/{{$guesses->pdffile}}"  class="btn btn-success">View</a>
                    <a href="{{URL::to('')}}/deletepdffile/{{$guesses->id}}" class="btn btn-danger">Delete</a>
                 @endif
               </td>
                  <td> @if($guesses->pdffile1 == 'null')
                  
                  @if($guesses->link1 == 'null')
                     <a href="" data-toggle="modal" data-target="#guessupload2{{$guesses->id}}" class="btn btn-primary">Update</a>
                     @else
                      <a href="{{URL::to('')}}/{{$guesses->link1}}"  class="btn btn-success"> Link 2</a>
                       <a href="{{URL::to('')}}/deletepdflink1/{{$guesses->id}}" class="btn btn-danger">Delete</a>
                     @endif
                    @else
                   

                    <a href="{{URL::to('')}}/{{$guesses->pdffile1}}"  class="btn btn-success">View</a>
                    <a href="{{URL::to('')}}/deletepdffile1/{{$guesses->id}}" class="btn btn-danger">Delete</a>
                 @endif
               </td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#guesses{{$guesses->id}}" class="btn btn-success">Edit</a>
                <a href="{{URL::to('')}}/deleteguess/{{$guesses->id}}" class="btn btn-danger">Delete</a></td>
                  
                </tr>

<div class="modal fade" id="guesses{{$guesses->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editguess" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control " name="wclass" value="" required  autofocus>
                                  <option>{{$guesses->wclass}}</option>
                                  @foreach($class as $classes)
                                  <option>{{$classes->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$guesses->id}}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="course_id" value="{{$guesses->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="name" value="{{$guesses->name}}" required  autofocus>
                            </div>
                </div>
               
                 <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link" value="{{$guesses->link}}" >
                            </div>
                </div>
                
                 <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link1" value="{{$guesses->link1}}" >
                            </div>
                </div>
                
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link" value="{{$guesses->link1}}" >
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

<!-- update file 1 -->
<div class="modal fade" id="guessupload1{{$guesses->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editguess" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$guesses->wclass}}" required  autofocus>
                                  
                               
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$guesses->id}}">
                            
                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$guesses->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                          

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$guesses->name}}" required  autofocus>
                            </div>
                </div>
               

                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('pdf1') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="pdffile" value="" >
                            </div>
                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 1') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link" value="" >
                            </div>
                </div>
               
               <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link1" value="{{$guesses->link1}}" >
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


<!-- update file 1 -->
<div class="modal fade" id="guessupload2{{$guesses->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editguess" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$guesses->wclass}}" required  autofocus>
                                  
                               
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$guesses->id}}">
                            
                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$guesses->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                          

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$guesses->name}}" required  autofocus>
                            </div>
                </div>
               

                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('pdf2') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="pdffile1" value="" >
                            </div>
                </div>
               
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link 2') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link1" value="" >
                            </div>
                </div>
                
                 <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="link" value="{{$guesses->link}}" >
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
              
                <tr>
                   <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Class Name</th>
                 
                  <th>File 1</th>
                  <th>Flie 2</th>
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