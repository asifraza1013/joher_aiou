<!doctype html>
<html lang="en">

@include('front.inc.head')

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

@include('front.inc.header')

@yield('content')

@include('front.inc.footer')

<script src="{{ asset('assets/front/js/jquery-2.2.3.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootsnav.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-countTo.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/front/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/front/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/front/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/front/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/front/js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/functions.js') }}"></script>

</body>
</html>
