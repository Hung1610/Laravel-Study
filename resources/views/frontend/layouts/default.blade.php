<!DOCTYPE html>
<html>
  <head>
    @include('frontend.includes.head')
  </head>
  <body>
    @include('frontend.includes.header')
    @include('frontend.includes.left')
    <!-- Page Content -->
   <div class="container">


       @yield('content')

       </div>
       <!-- /.row -->
   </div>
   <!-- end Page Content -->
   @include('frontend.includes.footer')
  </body>

</html>
