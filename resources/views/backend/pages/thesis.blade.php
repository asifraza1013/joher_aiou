 @extends ('backend/layout/layout')
  @section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thesis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::TO('')}}/dashboard">Home</a></li>
              <li class="breadcrumb-item active">All Thesis</li>
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
              <h3 class="card-title">All Thesis</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                     <th>Course Code</th>
                  <th>Course Name</th>
                    <th>Class Name</th>
                 
                   <th>Thesis File</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              @foreach($thesis as $thesiss) 
             
                <tr>
                      <td>{{$thesiss->course_id}}
                  </td>
                  <td>{{$thesiss->name}}</td>
                  <td>{{$thesiss->wclass}}</td>
                
                  
                  <td>
                      @if($thesiss->pdffile == 'null')
                      
                      
                      @if($thesiss->link1 == 'null')
                     <a href="" data-toggle="modal" data-target="#uploadthesiss{{$thesiss->id}}" class="btn btn-success">Update</a>
                        @else
                        <a href="{{$thesiss->link1}}"  class="btn btn-success">Download Link</a>
                        <a href="{{URL::to('')}}/deletethesislink/{{$thesiss->id}}" class="btn btn-danger">Delete Link</a>
                
                        @endif
                    
                      
                      
                      
                      
                      
                       
                       @else
                      
                      <a href="{{URL::to('')}}/{{$thesiss->pdffile}}" class="btn btn-primary">View</a>
                 
                <a href="{{URL::to('')}}/deletethesisfile/{{$thesiss->id}}" class="btn btn-danger">Delete File</a>
                
                @endif
                </td>
                  
                  <td>
                  <a href="" data-toggle="modal" data-target="#thesiss{{$thesiss->id}}" class="btn btn-success">Edit</a>
                <a href="{{URL::to('')}}/deletethesis/{{$thesiss->id}}" class="btn btn-danger">Delete</a></td>
                  
                </tr>

<div class="modal fade" id="thesiss{{$thesiss->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editthesis" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control " name="wclass" value="" required  autofocus>
                                  <option>{{$thesiss->wclass}}</option>
                                  @foreach($class as $classes)
                                  <option>{{$classes->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$thesiss->id}}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="course_id" value="{{$thesiss->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="name" value="{{$thesiss->name}}" required  autofocus>
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



<div class="modal fade" id="uploadthesiss{{$thesiss->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload Thesis File</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editthesis" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="wclass" value="{{$thesiss->wclass}}" required  autofocus>
                                  
                                 
                            </div>
                </div>
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$thesiss->id}}">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="course_id" value="{{$thesiss->course_id}}" required  autofocus>
                            </div>
                </div>
                
                <div class="form-group row">
                           

                            <div class="col-md-6">
                                <input type="hidden" class="form-control " name="name" value="{{$thesiss->name}}" required  autofocus>
                            </div>
                </div>
                
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">pdf</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control  " name="pdffile" value=""   >
                            </div>
                </div>
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Add Link</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control  " name="link1" value="" >
                            </div>
                </div>
               
               
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Submit</label>

                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-success  " name="pdffile" value="" required  autofocus>
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
                  <th>Course Code</th>
                  <th>Course Name</th>
                    <th>Class Name</th>
                 
                   <th>Thesis File</th>
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