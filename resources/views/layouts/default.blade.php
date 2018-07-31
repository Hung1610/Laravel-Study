<!DOCTYPE html>
<html>
  <head>
    @include('includes.head')
  </head>
  <body>
    @include('includes.header')
    <!-- Page Content -->
   <div class="container">
     @include('includes.left')
     <div class="col-md-9">
       @yield('content')
     </div>
       </div>
       <!-- /.row -->
   </div>
   <!-- end Page Content -->
   @include('includes.footer')
  </body>
</html>
