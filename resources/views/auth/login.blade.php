@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <div class="card w-50" style="margin: auto">
                    <div class="card-header">
                        <h1 class="text-dark">Login</h1>
                    </div>
                    @if(isset($error))
                    <p style="color:red;">{{ $error}}</p>
                    @endif
                    @if(isset($success))
                    <p style="color:green;">{{ $success}}</p>
                    @endif
                    <div class="card-body">
                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="email" name="email" required>
                                @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                 @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success" name="Login" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->
@endsection
