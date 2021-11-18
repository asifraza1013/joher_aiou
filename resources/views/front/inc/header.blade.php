<div class="topbar p-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pull-left">
                    <span class="info"><a href="{{ route('about') }}"> Have any question?</a></span>
                    <span class="info"><i class="icon-phone2"></i>0316-4962025, 0313-0905455</span>
                </div>
                {{-- <ul class="social_top pull-right">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="icon-twitter4"></i></a></li>
                    <li><a href="#."><i class="icon-google"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<?php
    $auth = null;
    $auth = Auth::user();
?>
<!--Header-->
<header>
    <nav class="navbar navbar-default white bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">
                    <h1 class="logo logo-display">JOHER AIOU.</h1>
                    <h5 class="aiou logo-display">Allama Iqbal Open University</h5>
                    <h1 class="logo logo-scrolled">JOHER AIOU.</h1>
                    <h5 class="aiou logo-scrolled">Allama Iqbal Open University</h5>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('admission') }}">Admissions</a></li>
                    <li><a href="{{ route('books') }}">Books</a></li>
                    <li><a href="{{ route('assignment') }}">Assignments</a></li>
                    {{-- <li><a href="#">Thesis</a></li> --}}
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('practice') }}">Solved Thesis & Teaching Practice</a></li>
                            <li><a href="{{ route('lessonplan') }}">Lesson Plans</a></li>
                            <li><a href="{{ route('videolectures') }}">Video Lectures</a></li>
                            <li><a href="{{ route('guesspaper') }}">Past Papers</a></li>
                            <li><a href="{{ route('results') }}">Results</a></li>
                            <li><a href="{{ route('applicationform') }}">Application Form</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    @if($auth)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $auth->name }}</a>
                        <ul class="dropdown-menu">
                            @if($auth->role == 'admin')
                            <li><a href="{{ route('dashboard') }}">Admin Panel</a></li>
                            @endif
                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--Search-->
{{-- <div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Search here...." required />
        <button type="submit" class="btn btn_common blue">Search</button>
    </form>
</div> --}}
