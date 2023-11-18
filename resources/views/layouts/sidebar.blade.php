 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<<<<<<< HEAD
        <a href="/dashboard" class="brand-link">
=======
        <a href="dashboard" class="brand-link">
>>>>>>> 0d4639852fb41fae328ef243dea58451ef55941b
        <img src="adminlte/dist/img/maktab-lite.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Maktab<b>App</b></span>
        </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminlte/dist/img/maktab-lite.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<<<<<<< HEAD

          <li class="nav-header">User Access</li>
          <li class="nav-item has-treeview {{ (request()->is('user*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Management
=======
        <li class="nav-header">User Access</li>
        <li class="nav-item has-treeview {{ (request()->is('user*')) ? 'active menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users Authorization
>>>>>>> 0d4639852fb41fae328ef243dea58451ef55941b
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
<<<<<<< HEAD

              {{-- Role --}}
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-shield-alt nav-icon"></i>
=======
              <li class="nav-item">
                <a href="user" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ (request()->is('permission*')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ (request()->is('role*')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
>>>>>>> 0d4639852fb41fae328ef243dea58451ef55941b
                  <p>Role</p>
                </a>
              </li>

              {{-- Permission --}}
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-cogs nav-icon"></i>
                  <p>Permission</p>
                </a>
              </li>

              {{-- Users --}}
              <li class="nav-item">
                <a href="/user" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
