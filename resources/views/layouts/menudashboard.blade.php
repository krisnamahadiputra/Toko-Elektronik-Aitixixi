<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/admin/dashboard" class="nav-link">
          <i class="nav-icon fas fa-th "></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
<li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>
          Produk
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/admin/products" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/category" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/courier" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Couriers</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/discount" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Discounts</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
          Transaksi
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/admin/transaction" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Transaksi</p>
          </a>
        </li>
      </ul>
    </li>
      <li class="nav-item">
       <a href="{{route('logoutadmin')}}" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            Log Out
          </p>
        </a>
      </li>
    </ul>
  </nav>