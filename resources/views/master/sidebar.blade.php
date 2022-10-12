<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="../asset/img/logo/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">E-ARSIP</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Menu
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('arsip') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Arsip</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>About</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
