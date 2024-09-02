<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-motorcycle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Denz Motor</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Daftar Motor -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('motor.index') }}">
            <i class="fas fa-fw fa-motorcycle"></i>
            <span>Daftar Motor</span>
        </a>
    </li>

    <!-- Nav Item - Daftar Pesan -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.pesan.index') }}">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Daftar Pesan</span>
        </a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt fa-fw"></i>
            <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>


</ul>