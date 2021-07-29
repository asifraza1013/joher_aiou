@extends ('front/layout/layout')
  @section ('content')
<div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  "><a href="{{URL::TO('index')}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item active"><a href="{{URL::TO('admission')}}" class="nav-link">Admissions</a></li>
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
				<div class="row no-gutters">
          <div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            	<a href="http://techzonesit.com/">	<span class="flaticon-reading"></span></a>
              </div>
              <div class="media-body p-2 mt-3">
              <center>  <h3 class="heading">  Solve Teaching
                
                Practice Booklet 8607
               </center>
                <p>
                  
              <br> 
              
              
              
               
                <a class="btn btn-success" href="{{URL::TO('')}}/teaching">Click For Download 8607</a>
              
              
             
              <br></p>
             
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            	<a href="http://techzonesit.com/">	<span class="flaticon-books"></span><a/>
              </div>
              <div class="media-body p-2 mt-3">
8613           <h3 class="heading">Solve Research Project 
                
                
                </h3>
              
                <p>
                  
              <br>
             
               <a class="btn btn-success" href="{{URL::TO('')}}/research">Click For Download 8613</a>
              
             
                
              
              <br></p>
              
              </div>
            </div>    
          </div>
          
          
        </div>
			</div>
		</section>
		
		
<br>


		
    @stop