@extends ('front/layout/layout')
  @section ('content')
<div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  "><a href="{{URL::TO('index')}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="{{URL::TO('admission')}}" class="nav-link">Admissions</a></li>
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
                                  @if(Auth::user()->role == "admin")
                                  <a class="dropdown-item" href="{{URL::to('')}}/dashboard"> {{ __('Dashboard') }}</a>
                                  
                                  @endif
                                 
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
			    
		<div class="container" >
			    
			   @foreach($description as $descriptions)
                    @if($descriptions->category == 'Table Thesis')
										<p>{!!$descriptions->description!!}</p>
										
										
										 @if(!empty($descriptions->link))
										   <a href="{{URL::to('')}}/{{$descriptions->link}}" class="btn btn-primary">Click For Info </a>
               
               
                 @endif
										
										
                    @endif
                    @endforeach

</div>		    
			    
			    
				
<div class="container" style="border: solid;border-color: #0d1128 ;">
        <table id="table_id" class="display">
    <thead>
        <tr>
            
            <th>Course Code</th>
            <th>Course Name</th>
            
             <th>Thesis File </th>
            
        </tr>
    </thead>
    <tbody>
      @foreach($thesis as $theses)
        <tr>
             <td>{{$theses->course_id}}</td>
            <td>{{$theses->name}}</td>
            
             <td>@if($theses->pdffile == 'null')
             
             @if($theses->link1 == 'null')
                 Not Uploaded
                 @else
                 
                  <a href="{{$theses->link1}}" class="btn btn-primary">Download Thesis </a>
                 
                 @endif
                 @else
                 <a href="{{URL::to('')}}/{{$theses->pdffile}}" class="btn btn-primary">Download Thesis </a>
                 @endif</td>
           
        </tr>
        @endforeach
       
    </tbody>
</table>
    </div> 
			</div>
		</section>
		
		
<br>
		
    
@stop