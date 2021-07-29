@extends ('front/layout/layout')
  @section ('content')
<div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  "><a href="{{URL::TO('index')}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="{{URL::TO('admission')}}" class="nav-link">Admissions</a></li>
            <li class="nav-item active"><a href="{{URL::TO('about')}}" class="nav-link">About</a></li>

            <li class="nav-item"><a href="{{URL::TO('books')}}" class="nav-link">Books</a></li>
            <li class="nav-item"><a href="{{URL::TO('assignment')}}" class="nav-link">Assignments</a></li>
            <li class="nav-item"><a href="{{URL::TO('thesis')}}" class="nav-link">Thesis </a></li>
            <li class="nav-item"><a href="{{URL::TO('practice')}}" class="nav-link">Teaching Practice </a></li>
            <li class="nav-item"><a href="{{URL::TO('lessonplan')}}" class="nav-link">Lesson Plans</a></li>
            <li class="nav-item"><a href="{{URL::TO('videolectures')}}" class="nav-link">Video Lectures</a></li>
            <li class="nav-item"><a href="{{URL::TO('guesspaper')}}" class="nav-link">Past Papers</a></li>
            <li class="nav-item"><a href="{{URL::TO('results')}}" class="nav-link">Results</a></li>
            <li class="nav-item  "><a href="{{URL::TO('applicationform')}}" class="nav-link">Application Forms</a></li>

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




<section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url({{URL::to('')}}/public/images/about.jpg); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">JOHER AIOU</h2>
            <p>This website & YouTube channel<a href="https://www.youtube.com/channel/UCaOu2WbAoxRpM596YtRcvvg"> <strong> Joher Videos </strong> </a>is a unique Platform for <strong> AIOU </strong> all Programs Students (Specially distance Learning) because through this Platform.</p>
            <p>We give proper guidance and counselling through these platforms. And in this website we give <strong> free of cost </strong> All Programs solve Original Books, Key Books, Solve Assignment, and complete Videos tutorials about from taking Admission to get degree from university.</p>
            <p>We also Provide Assignment Services in which Students get or made at very low Price Solve Assignment, Lesson Plan, Thesis Project, etc.
            So Finally <strong>‘We give our best’ </strong> for a good Future, keep in Prayers every Time our Team.
            </p>
          </div>
        </div>
      </div>
    </section>
    

    

  
<center><h2 class="mb-4">OUR TEAM</h2></center>
    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <a href="{{URL::to('')}}/public/images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{URL::to('')}}/public/images/course-1.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="{{URL::to('')}}/public/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{URL::to('')}}/public/images/image_2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="{{URL::to('')}}/public/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{URL::to('')}}/public/images/image_3.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="{{URL::to('')}}/public/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{URL::to('')}}/public/images/image_4.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

  


 @stop