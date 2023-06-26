<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="{{ asset('admin/assets/images/faces/') }}" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard/') }}">
            <span class="menu-title">Sewa</span>
            <i class="mdi mdi-book-open-page-variant menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard/') }}">
            <span class="menu-title">Mobil</span>
            <i class="mdi mdi-account-multiple menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard/') }}">
              <span class="menu-title">Merk</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard/') }}">
              <span class="menu-title">Perawatan</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard/') }}">
              <span class="menu-title">Jenis Perawatan</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
        
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">