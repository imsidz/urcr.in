<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

            <li class="nav-item">
                <a href="/admin/category" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Category
                    <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
              <a href="/admin/subcategory" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Sub Category
                  <span class="right badge badge-danger"></span>
                  </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="/admin/childcategory" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Child Category
                <span class="right badge badge-danger"></span>
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/style" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Styles
                <span class="right badge badge-danger"></span>
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/banners" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Banners
                <span class="right badge badge-danger"></span>
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/material" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Materials
                <span class="right badge badge-danger"></span>
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/variant" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                Variants
                <span class="right badge badge-danger"></span>
                </p>
            </a>
          </li>
            <li class="nav-item">
                <a href="/admin/products" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Product
                    <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/admin/orders" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Orders
                    <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-th"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>

            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->