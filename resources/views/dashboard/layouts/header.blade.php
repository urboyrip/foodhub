<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Food Hub</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap d-flex">
        @if(Auth::guard('vendors')->check())
        <a class="nav-link px-3" href="/dashboard/vendors/{{ Auth::guard('vendors')->user()->slug }}/edit">Edit Profile</a>
        @endif
        <a class="nav-link px-3" href="/">Go Home</a>
      </div>
    </div>
  </header>