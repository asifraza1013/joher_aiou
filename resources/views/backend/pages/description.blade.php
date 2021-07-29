 @extends ('backend/layout/layout')
  @section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Links</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{URL::TO('')}}/dashboard">Home</a></li>
              <li class="breadcrumb-item active">All Links</li>
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
              <h3 class="card-title">All Links</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Description</th>
                  
                  <th>Category</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
              @foreach($description as $descriptions) 
               
                <tr>
                  <td>{!!$descriptions->description!!}</td>
                  
                  </td>
                  <td>{{$descriptions->category}}
                  </td>
                  <td>
                  <a href="" data-toggle="modal" data-target="#descriptions{{$descriptions->id}}" class="btn btn-success">Edit</a>
                <a href="{{URL::to('')}}/deletedescription/{{$descriptions->id}}" class="btn btn-danger">Delete</a></td>
                  
                </tr>

<div class="modal fade" id="descriptions{{$descriptions->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{URL::TO('')}}/editdescription" method="POST" >
                 @csrf
                <div class="form-group row">
                  <input type="hidden" name="id" value="{{$descriptions->id}}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control " name="description" value="" required  autofocus>{{$descriptions->description}} </textarea>
                            </div>
                </div>
                
                
                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control " name="category" value="" required  autofocus>
                                  <option>{{$descriptions->category}}</option>
                                  <option>Books</option>
                                  <option>Assignments</option>
                                  <option>Result</option>
                                  <option>Application</option>
                                  <option>Admission</option>
                                  <option>Thesis</option>
                                  <option>Video</option>
                                  <option>Guess Papers</option>
                                </select>
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
                  <th>Description</th>
                  <th>Link</th>
                  <th>Category</th>
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