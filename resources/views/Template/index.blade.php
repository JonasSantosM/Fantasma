<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}" />

    
  <script src="{{asset('js/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('js/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/freelancer.min.js')}}"></script>

</head>
<body>

    @include('Template.menu', ['logged'=>$logged])

    <header class="masthead bg-primary text-white text-center" style="@yield('style')">
    <div class="container">
      <div class="row">

          @yield('header')

          </div>
</div>
</header>

@yield('content')

@include('Template.footer')

</body>
</html>
