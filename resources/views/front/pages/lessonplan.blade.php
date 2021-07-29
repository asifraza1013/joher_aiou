@extends ('front/layout/layout')
  @section ('content')
<div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
           <li class="nav-item  "><a href="{{URL::TO('index')}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="{{URL::TO('admission')}}" class="nav-link">Admissions</a></li>
             <li class="nav-item"><a href="{{URL::TO('about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{URL::TO('books')}}" class="nav-link">Books</a></li>
            <li class="nav-item"><a href="{{URL::TO('assignment')}}" class="nav-link">Assignments</a></li>
            <li class="nav-item"><a href="{{URL::TO('thesis')}}" class="nav-link">Thesis </a></li>
            <li class="nav-item"><a href="{{URL::TO('practice')}}" class="nav-link">Teaching Practice </a></li>
            <li class="nav-item"><a href="{{URL::TO('lessonplan')}}" class="nav-link">Lesson Plans</a></li>
            <li class="nav-item"><a href="{{URL::TO('videolectures')}}" class="nav-link">Video Lectures</a></li>
            <li class="nav-item"><a href="{{URL::TO('guesspaper')}}" class="nav-link">Past Papers</a></li>
            <li class="nav-item"><a href="{{URL::TO('results')}}" class="nav-link">Results</a></li>
            <li class="nav-item "><a href="{{URL::TO('applicationform')}}" class="nav-link">Application Forms</a></li>

             @guest
                            <li class="nav-item ">
                                <a  href="{{ route('login') }}" class="nav-link btn btn-primary" >{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class=" nav-item ">
                                    <a  href="{{ route('register') }}" class="nav-link btn btn-primary" >{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown active">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{URL::to('blog')}}"> {{ __('Dashboard') }}</a>
                                 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>
        </div>
      </div>
    </nav>
      
    <br>

    <section class="ftco-services ftco-no-pb">
         
			<div class="container-wrap">

        <div class="container" style="border: solid;border-color: #0d1128 ;">
        <table id="table_id" class="display">
             <a href="http://techzonesit.com/">
    <thead>
       
        <tr>
           <th>Course Id</th>
            <th>Course Name</th>
             <th>Lesson Plan</th>
            
        </tr>
    </thead>
    <tbody>
    
  @foreach($lesson as $lessons)
        <tr>
            <td>{{$lessons->course_id}}</td>
            <td>{{$lessons->name}}</td>
             
            <td>

              @if($lessons->pdffile == 'null' )
              @if($lessons->link == 'null' )
              Not Uploaded
              @else
              <a href="{{$lessons->link}}" class="btn btn-primary">Download Lesson Plan</a>
          
            @endif
              @else
              <a href="{{URL::to('')}}/{{$lessons->pdffile}}" class="btn btn-primary">Lesson Plan</a>
          
            @endif </td>
        </tr>

       @endforeach
     
    </tbody>
</table>
    </div>   




  
			</div>
			</a>
		</section>
		
		
<br>
		
  @stop