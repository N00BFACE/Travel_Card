<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{'/home'}}" class="brand-link">
      <i class="fas fa-bus"></i>
      <i class="fas fa-qrcode nav-icon"></i>
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
            <a href="{{'/home'}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!-- Account Settings -->
            <li class="nav-item">
                <a href="{{'/profile'}}" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        Profile
                    </p>
                </a>
            </li>
          <!-- Transaction History -->
          <li class="nav-item">
            <a href="{{'/history'}}" class="nav-link">
              <i class="nav-icon fa fa-history"></i>
              <p>
                  Transaction History
              </p>
            </a>
          </li>
          <!-- Transaction History -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
