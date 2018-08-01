<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top navchinh" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color:white;" href="{{route('index')}}">Trang Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="amain">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#" class="amain">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			    </form>

          @if(Session::get('user'))
           <ul class="nav navbar-nav pull-right">
          <li>
            <a>
              <span class ="glyphicon glyphicon-user"></span>
              {{Session::get('user')->name}}
            </a>
          </li>-->

          <li>
            <a class="amain" href="{{route('logout')}}">Đăng xuất</a>
          </li>
            </ul>
          @else
			    <ul class="nav navbar-nav pull-right">
                    <li>
                        <a class="amain" href="{{route('register')}}">Đăng ký</a>
                    </li>
                    <li>
                        <a class="amain" href="{{route('login')}}">Đăng nhập</a>
                    </li>
                </ul>
        @endif
            </div>



            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
