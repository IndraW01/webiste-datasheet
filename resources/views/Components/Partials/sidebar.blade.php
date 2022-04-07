<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Datasheet</li>
      <li class="nav-item {{ request()->routeIs('datasheets.control.valve.*') ? 'active' : '' }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#datasheet" aria-expanded="false" aria-controls="datasheet">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Datasheet</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="datasheet">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ request()->routeIs('datasheets.control.valve.general.*') ? 'active' : '' }}""> <a class="nav-link" href="{{ route('datasheets.control.valve') }}">Control Valve</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">ON/OFF Valve</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Pressure Safety Valve</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
