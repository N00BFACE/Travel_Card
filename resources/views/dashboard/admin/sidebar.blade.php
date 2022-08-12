<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{'/admin/home'}}" class="brand-link">
      <i class="fas fa-solid fa-qrcode"></i>
      <i class="fas fa-solid fa-bus" ></i>
      <span class="brand-text font-weight-light">Transit Access Pass</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{'/admin/dashboard'}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a class="nav-link active">
                <i class="nav-icon far fa-solid fa-user"></i>
                <p>User List</p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{'/admin/user/pending'}}" class="nav-link">
                      <i class="nav-icon far fa-solid fa-clock"></i>
                      <p>Pending User List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{'/admin/user/active'}}" class="nav-link">
                      <i class="nav-icon far fa-solid fa-thumbs-up"></i>
                      <p>Approved User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{'/admin/user/suspend'}}" class="nav-link">
                      <i class="nav-icon far fa-solid fa-thumbs-down"></i>
                      <p>Suspended User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{'/admin/user/reject'}}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-trash"></i>
                    <p>Rejected User</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
