<!DOCTYPE html>
<html>
  <head>
    @include('frontend.includes.head')
    <!-- login page css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <!-- Form Mixin-->
      <!-- Input Mixin-->
      <!-- Button Mixin-->
      <!-- Pen Title-->
      <!-- Form Module-->
      <div class="module form-module">
        <div class="toggle"><i class="fa fa-times fa-pencil"></i>
        </div>
        <div class="form">
          <h2>Create an account</h2>
          <form method="post" id="apply" action="{{route('postregister')}}">
            @csrf
            <input type="text" name="name" placeholder="Username" required/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="email" name="email" placeholder="Email Address" required/>
            <input type="text" name="address" placeholder="Address" required/>
            <button id="button-register">Register</button>
          </form>
        </div>
        <div class="form">
          <h2>Login to your account</h2>
          <form method="post" action="{{route('postlogin')}}">
            @csrf
            <input type="text" name="username" placeholder="Username" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <button>Login</button>
          </form>
        </div>
        <div class="cta"><a href="">Forgot your password?</a></div>
        @foreach($errors->all() as $error)
          <div class="alert alert-danger" style="margin-bottom: 0%;" role="alert">
            {{$error}}
          </div>
        @endforeach
      </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <script  src="js/index.js"></script>
  </body>
</html>
