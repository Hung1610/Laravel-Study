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
          <h2>Đăng Nhập</h2>
          <form method="post" action="{{route('postlogin')}}">
            @csrf
            <input type="text" name="username" placeholder="Tên Người Dùng" required/>
            <input type="password" name="password" placeholder="Mật Khẩu" required/>
            <button>Login</button>
          </form>
        </div>
        <div class="form">
          <h2>Tạo Tài Khoản</h2>
          <form method="post" action="{{route('postregister')}}">
            @csrf
            <input type="text" name="name" placeholder="Username" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <input type="email" name="email" placeholder="Email Address" required/>
            <input type="text" name="address" placeholder="Address" required/>
            <button>Register</button>
          </form>
        </div>
        <div class="cta"><a href="">Quên Mật Khẩu?</a></div>
      @if(Session::get('loi'))
      <div class="alert alert-danger"role="alert">
        {{Session::get('loi')}}
      </div>
      @endif
      @if(Session::get('register'))
      <div class="alert alert-success" role="alert">
        {{Session::get('register')}}
      </div>
      @endif
      </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <script  src="js/index.js"></script>


  </body>
</html>
