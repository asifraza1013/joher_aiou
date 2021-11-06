@extends ('backend/layout/layout')
@section ('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Comments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL::TO('')}}/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Comment</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @include('msg.flash_messages')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Comments</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($comments))
                                @foreach ($comments as $key=>$item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->uname }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <td><a href="{{ route('backend.comments.remove', $item->id) }}" class="" style="color: red">Remove</a></td>
                                    </tr>
                                @endforeach
                                @else
                                <tr class="text-center">
                                    <td colspan="4">No Record Found!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        @if(count($comments))
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $comments->appends(Request::all())->links() }}
                        </nav>
                        @else
                            <h4>{{ __('You don`t have any comment') }} ...</h4>
                        @endif
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

@endsection
