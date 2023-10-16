  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Mastor Ecommerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ Request::is('dashboard') ? 'menu-open' : '' }}">
            <a href="{{ url('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('categories*', 'add-category*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('categories*', 'add-category*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}">
                <a href="{{ url('categories') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categories</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('add-category') ? 'active' : '' }}">
                <a href="{{ url('add-category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{ Request::is('products*', 'add-products*') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ Request::is('products*', 'add-products*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                      Products
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item {{ Request::is('products') ? 'active' : '' }}">
                      <a href="{{ url('products') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Products</p>
                      </a>
                  </li>
                  <li class="nav-item {{ Request::is('add-products') ? 'active' : '' }}">
                      <a href="{{ url('add-products') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Products</p>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="nav-item {{ Request::is('variations*', 'add-variation*') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ Request::is('variations*', 'add-variation*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                      Variations
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item {{ Request::is('variations') ? 'active' : '' }}">
                      <a href="{{ url('variations') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>View Variations</p>
                      </a>
                  </li>
                  <li class="nav-item {{ Request::is('add-variation') ? 'active' : '' }}">
                      <a href="{{ url('add-variation') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Variation</p>
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