<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <img class="img-fluid pr-3" src="/images/nslogo.png" />
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-brand text-center">
        <a href="#">Admin Portal</a>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="/images/user.png"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">{{ Auth::user()->name }}
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->

      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="/home">
                <i class="fa fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="/subscribers">
                <i class="far fa-gem"></i>
                <span>Subscribers</span>
            </a>
          </li>
          <li>
            <a href="/refcodes">
                <i class="fa fa-chart-line"></i>
                <span>Referal Codes</span>
            </a>
          </li>
          <li>
            <a href="/pricebook">
                <i class="fa fa-shopping-cart"></i>
                <span>Pricebook</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Sonar Syncs</span>
          </li>
          <li>
            <a href="/services">
                <i class="fas fa-sync"></i>
                <span>Services</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Fiber Lookups</span>
          </li>
          <li>
            <a href="/bell_pricing">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Bell Pricing</span>
            </a>
          </li>
          <li class="header-menu">
            <span>Services</span>
          </li>
          <li>
            <a href="/grand-stream">
                <i class="fas fa-phone"></i>
                <span>VOIP</span>
            </a>
          </li>
          <li>
            <a href="/iptv">
                <i class="fas fa-tv"></i>
                <span>IPTV</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <ul>
        <li>
          <a href="/nsinfo">
              <i class="fas fa-cogs text-secondary"></i>
          </a>
        </li>
      </ul>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="ml-auto pr-2">
        @csrf
        <button type="submit" class="btn btn-dark"><i class="fa fa-power-off"></i>&nbsp; <span class="text-secondary"> Logout</span></button>
      </form>
    </div>
  </nav>