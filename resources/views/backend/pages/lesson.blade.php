 @extends ('backend/layout/layout')
  @section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lesson Plan</h1>
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
              <h3 class="card-title">All lesson Plans</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Name</th>
                   <th>Course Name</th>
                  <th>Course Id</th>
                   <th>Update Flie</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              @foreach($lesson as $lessons) 
            
                <tr>
                  <td>{{$lessons->name}}</td>
                  <td>{{$lessons->wclass}}
                  </td>
                  <td>{{$lessons->course_id}}
                  </td>
                  <td>
                      
                       @if($lessons->pdffile == 'null')
                        @if($lessons->link == 'null')
                      <a href="" data-toggle="modal" data-target="#updatelessons{{$lessons->id}}" class="btn btn-primary">Update </a>
                      @else
                    <a href="{{URL::to('')}}/{{$lessons->link}}" class="btn btn-success">Link</a>
                    <a href="{{URL::to('')}}/deletelessonl1/{{$lessons->id}}" class="btn btn-danger">Delete</a>
                    @endif
                    
                    @else
                    <a href="{{URL::to('')}}/{{$lessons->a1}}" class="btn btn-success">View 1</a>
                    <a href="{{URL::to('')}}/deletelesson1/{{$lessons->id}}" class="btn btn-danger">Delete</a>
                  @endif
                      
                      
                      </td>
                      
                      
                       <td>
                      
                     
                      <a href="" data-toggle="modal" data-target="#lessons{{$lessons->id}}" class="btn btn-success">Edit </a>
                   

                   
                    <a href="{{URL::to('')}}/deletelesson/{{$lessons->id}}" class="btn btn-danger">Delete</a>
                 
                      
                      </td>
                  
                </tr>

<div class="modal fade" id="lessons{{$lessons->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editlesson" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control " name="wclass" value="" required  autofocus>
                                  <option>{{$lessons->wclass}}</option>
                                  @foreach($class as $classes)
                                  <option>{{$classes->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                </div> 
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$lessons->id}}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="course_id" value="{{$lessons->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="name" value="{{$lessons->name}}" required  autofocus>
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
      
      
      <div class="modal fade" id="updatelessons{{$lessons->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editlesson" method="POST" enctype="multipart/form-data">
                 @csrf
                 
                  <input type="hidden" name="id" value="{{$lessons->id}}">
                 <div class="form-group row">
                     
                     
                          

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$lessons->wclass}}" required  autofocus>
                                 
                               
                            </div>
                </div> 
                <div class="form-group row">
                 
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$lessons->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$lessons->name}}" required  autofocus>
                            </div>
                </div>
               
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pdf') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control " name="pdffile" value="{{$lessons->pdffile}}" >
                            </div>
                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link" value="{{$lessons->pdffile}}" >
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



              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Course Name</th>
                   <th>Course Name</th>
                  <th>Course Id</th>
                  <th>Update File </th>
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