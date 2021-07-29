 @extends ('backend/layout/layout')
  @section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Video Lectures</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::TO('')}}/dashboard">Home</a></li>
              <li class="breadcrumb-item active">All Vide Links</li>
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
              <h3 class="card-title">All Video Links</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course ID</th>
                  
                  <th>Name</th>
                  <th>Class</th>
                  
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              @foreach($video as $videos) 
               
                <tr>
                  <td>{{$videos->course_id}}</td>
                  <td>{{$videos->name}}</td>
                  <td>{{$videos->class}}</td>
                 
                  <td>
                  <a href="" data-toggle="modal" data-target="#videos{{$videos->id}}" class="btn btn-success">Edit</a>
                <a href="{{URL::to('')}}/deletevideos/{{$videos->id}}" class="btn btn-danger">Delete</a></td>
                  
                </tr>

<div class="modal fade" id="videos{{$videos->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editvideos" method="POST" enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" name="id" value="{{$videos->id}}">
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="course_id" value="{{$videos->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="name" value="{{$videos->name}}" required  autofocus>
                            </div>
                </div>
              <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control " name="class" value="" required  autofocus>
                                  <option>{{$videos->class}}</option>
                                  @foreach($class as $classes)

                                  <option>{{$classes->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                </div>
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="link" value="{{$videos->link}}" required  autofocus>
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
                  <th>Course ID</th>
                  <th>Name</th>
                  <th>Class</th>
                  
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