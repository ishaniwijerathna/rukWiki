<!doctype html>
<html lang="en">

<head>
@include('partials.head')

</head>

  <body>
@include('partials.nav')
<br>



  <div class="container">
     @include('partials.messages')

    @yield('content')
  </div> 

@include('partials.javascript')

   </body>
</html>