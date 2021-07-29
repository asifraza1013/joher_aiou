@extends ('front/layout/layout')
  @section ('content')
   <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item active "><a href="{{URL::TO('index')}}" class="nav-link pl-0">Home</a></li>
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
             <li class="nav-item "><a href="{{URL::TO('compressor')}}" class="nav-link"> Compressor</a></li>
             

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

<div class="alert" style="background: ;"><center>{!! Session::has('msg') ? Session::get("msg") : '' !!}</center></div>     
    <section class="slider_section" style="height: 500px;">
   
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    
   
  </ol>
  
   <a href="https://techzonesit.com/">

  <div class="carousel-inner">
    @foreach($banner as $key => $banners)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
      <img style="height:200px; width:300px;" class="d-block w-100" src="{{$banners->img}}" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
    
   <a href="https://techzonesit.com/">  <p style="color:red;">{{$banners->title}}</p></a>
  </div>
    </div>
   @endforeach
  </div>
 
     </a>
  



  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>
		
  
		<section class="ftco-section what_weOffer ftco-no-pt ftc-no-pb">
		     <a href="https://techzonesit.com/">
			<div class="container">
				<div class="row d-flex">
					
					<div class="col-md- wrap-about py-5 pr-md-4 ftco-animate">
          	<h1  ><strong> What We Offer</strong></h1>
						
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<a href="{{URL::TO('admission')}}"><h3>Admissions</h3></a>
                    @foreach($description as $descriptions)
                    @if($descriptions->category == 'Admission')
										<p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-books"></span></div>
									<div class="text pl-3">
										<a href="{{URL::TO('books')}}"><h3>Books & Key Books</h3></a>
										@foreach($description as $descriptions)
                    @if($descriptions->category == 'Books')
                    {!!$descriptions->description!!}
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
									<a href="{{URL::TO('assignment')}}">	<h3>Solved Assignments</h3></a>
										@foreach($description as $descriptions)
                    @if($descriptions->category == 'Assignments')
                   <p> {!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
									<a href="{{URL::TO('guesspaper')}}">	<h3>Past Papers</h3></a>
										@foreach($description as $descriptions)
                    @if($descriptions->category == 'Guess Papers')
                    <p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-teacher"></span></div>
									<div class="text pl-3">
									<a href="{{URL::TO('videolectures')}}">	<h3>Video Lectures</h3></a>
										@foreach($description as $descriptions)
                    @if($descriptions->category == 'Video')
                    <p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
									<a href="{{URL::TO('results')}}">	<h3>Results</h3></a>
										@foreach($description as $descriptions)
                    @if($descriptions->category == 'Result')
                    <p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
									<a href="{{URL::TO('applicationform')}}">	<h3>Application Forms</h3> </a>
									@foreach($description as $descriptions)
                    @if($descriptions->category == 'Application')
                    <p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                  <div class="text pl-3">
                  <a href="{{URL::TO('thesis')}}">  <h3>Thesis</h3></a>
                      @foreach($description as $descriptions)
                    @if($descriptions->category == 'Thesis')
                    <p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<a href="{{URL::TO('lessonplan')}}"><h3>Lesson Plan</h3></a>
                    @foreach($description as $descriptions)
                    @if($descriptions->category == 'Lesson')
										<p>{!!$descriptions->description!!}</p>
                    @endif
                    @endforeach
									</div>
								</div>
							</div>
              
              
              
              
						</div>
					</div>
				</div>
			</div>
			<a/>
		</section>
		<center>
		    <div>ads</div>
		  <div>  
		  <a href="http://techzonesit.com/"> <img src="{{URL::TO('')}}/public/assets/images/add.png">  </a>   </div>  
		    
		</center>

		 <section class="ftco-section testimony-section">
      <div class="container">
          <a href="http://techzonesit.com/">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Notifications</h2>
            
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              @foreach($noti as $notis)
              @if(!empty($notis))
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <!-- <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                  </div> -->
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p><h1 style="color:#fd5f00;" >{{$notis->name}}</h1></p>
                    <p class="name">{!!$notis->noti!!}</p>
                    <span class="position"><a href="{{$notis->date}}">Click For More Info</a></span>
                  </div>
                </div>
              </div>
              @endif
            @endforeach
            </div>
          </div>
        </div>
        </a>
      </div>
    </section>
    
<br>
 
	
   
@stop