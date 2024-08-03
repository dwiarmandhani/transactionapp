<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sales App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Master Data (Visible for 'admin' role) -->
    {{-- @if (Auth::user()->hasRole('admin')) --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterData" aria-expanded="true" aria-controls="collapseMasterData">
            <i class="fas fa-fw fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseMasterData" class="collapse" aria-labelledby="headingMasterData" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Master:</h6>
                <a class="collapse-item" href="{{ route('barang.index') }}">Barang</a>
                <a class="collapse-item" href="{{ route('customer.index') }}">Customer</a>
            </div>
        </div>
    </li>
    {{-- @endif --}}

    <!-- Nav Item - Sales (Visible for 'admin' role) -->
    {{-- @if (Auth::user()->hasRole('admin')) --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('sales.index') }}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Sales</span>
        </a>
    </li>
    {{-- @endif --}}

    <!-- Nav Item - User and Role Management (Visible for 'admin' role) -->
    {{-- @if (Auth::user()->hasRole('admin')) --}}
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUserRole" aria-expanded="true" aria-controls="collapseUserRole">
            <i class="fas fa-fw fa-users"></i>
            <span>User dan Role</span>
        </a>
        <div id="collapseUserRole" class="collapse" aria-labelledby="headingUserRole" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User dan Role:</h6>
                <a class="collapse-item" href="">User</a>
                <a class="collapse-item" href="">Role</a>
            </div>
        </div>
    </li> --}}
{{-- @endif --}}

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.edit') }}">
        {{-- <a class="nav-link" href=""> --}}
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <a class="nav-link" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="btn btn-primary rounded-circle" id="sidebarToggle">
            
        </button>
    </div>

</ul>
<!-- End of Sidebar -->
