<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="\">FoodHub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link  {{ ($title==="Home")?'active' : '' }}" href="\">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ ($title==="About")?'active' : '' }}" href="\about">About </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ ($title==="Order")?'active' : '' }}" href="\order">Order </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==="Menu")?'active' : '' }}" href="\menu">Menu</a>
        </li>
        {{-- <li class="nav-item disabled">
            <a class="nav-link disabled" href="#">Payment</a>
        </li> --}}
      </ul>
      @if(Auth::guard('user')->check())
        <li  class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome,{{Auth::guard('user')->user()->name}}
          </a>
          @if(Auth::guard('user')->user()->admin==true)
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
          @else
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/transaksi">My Cart</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
          @endif
        </li>
      @elseif(Auth::guard('vendors')->check())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome,{{Auth::guard('vendors')->user()->name}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
        </ul>
      </li>
      @else
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title==="login")?'active' : '' }}" href="/login">Login</a>
        </li>
      </ul>
      @endif

      
    </div>
  </nav>
  