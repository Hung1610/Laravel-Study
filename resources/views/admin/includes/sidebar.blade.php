<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-collapsed">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Content Category
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('content-category.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Danh Sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('content-category.create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Thêm</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-collapsed">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Sub Content Category
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Danh Sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Thêm</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-collapsed">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                Content
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url(config('controller.prefix_url') . 'content') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Danh Sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url(config('controller.prefix_url') . 'content/create') }}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Thêm</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-collapsed">
              <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Quản Lý User
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Danh Sách</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Thêm</p>
                  </a>
                </li>
              </ul>
            </li>
            <!--
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Quan li he thong
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Comment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Content</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Content Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Sub Content Category</p>
                  </a>
                </li>
              </ul>
            </li>
          -->
            {{-- single-item --}}
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  Widgets
                  {{-- Badge-new --}}
                  <span class="right badge badge-danger">Gay</span>
                </p>
              </a>
            </li>
            {{-- item has tree-view --}}
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  Charts
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ChartJS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Flot</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inline</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-envelope-o"></i>
                <p>
                  Mailbox
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/mailbox/mailbox.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Compose</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/read-mail.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Read</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">MISCELLANEOUS</li>
            <li class="nav-item">
              <a href="https://adminlte.io/docs" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>Documentation</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
