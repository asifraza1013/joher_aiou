@extends('front.layout.app')
@section('content')
<!--Page Header-->
<section class="page_header padding-top padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <div class="card w-50" style="margin: auto">
                    <div class="card-header">
                        <h1 class="text-dark">Register</h1>
                    </div>
                    @if(isset($error))
                    <p style="color:red;">{{ $error}}</p>
                    @endif
                    @if(isset($success))
                    <p style="color:green;">{{ $success}}</p>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="email" name="email" required>
                                @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                @if ($errors->has('phone')) <p style="color:red;">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                 @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                 @if ($errors->has('password_confirmation')) <p style="color:red;">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success" name="Register" value="Register">
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
