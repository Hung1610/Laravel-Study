<!DOCTYPE html>
<html>
  <head>
    @include('frontend.includes.head')c
  </head>
  <body>
    @include('frontend.includes.header')
    <!-- Page Content -->
   <div class="container">
     @include('frontend.includes.left')
     <div class="col-md-9">
       @yield('content')
     </div>
       </div>
       <!-- /.row -->
   </div>
   <!-- end Page Content -->
   @include('frontend.includes.footer')
  </body>
</html>
