<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        @if(Auth::guard('vendors')->check() == false)
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/vendors*') ? 'active': '' }}" href="/dashboard/vendors">
            <span data-feather="file"></span>
            Vendors
          </a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/orders*') ? 'active': '' }}" href="/dashboard/orders">
            <span data-feather="file"></span>
            Orders
          </a>
        </li>
        @endif
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('dashboard/menu*') ? 'active': '' }}" href="/dashboard/menu">
            <span data-feather="shopping-cart"></span>
            Menu
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Customers
          </a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link  disabled" href="#">
            <span data-feather="bar-chart-2"></span>
            transaction
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">
            <span data-feather="layers"></span>
            Reports 
          </a>
        </li> --}}
      </ul>
    </div>
  </nav>