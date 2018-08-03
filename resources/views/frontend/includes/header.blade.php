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
                        <a href="{{route('gioithieu')}}" class="amain">Giới thiệu</a>
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
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">  <i class="fa fa-user fa-fw"></i>
                    {{Session::get('user')->name}}
                     <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
              </li>
          </li>

          @if(Session::get('user')->is_admin==1)
          <li>
            <a class="amain" href="{{route('admin')}}"><i class="fa fa-unlock-alt"></i> Admin Page</a>
          </li>
          @endif
          
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
