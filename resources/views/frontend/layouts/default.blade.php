<!DOCTYPE html>
<html>
  <head>
    @include('frontend.includes.head')
  </head>
  <body>
    @include('frontend.includes.header')
    <!-- Page Content -->
   <div class="container">
     @include('frontend.includes.left')

       @yield('content')

       </div>
       <!-- /.row -->
   </div>
   <!-- end Page Content -->
   @include('frontend.includes.footer')
  </body>
</html>
