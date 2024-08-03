<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item d-flex align-items-center">
            <span class="mr-2 text-gray-600 font-weight-bold">{{ Auth::user()->name }}</span>
            <img class="img-profile rounded-circle" src="{{ asset('vendor/img/undraw_profile.svg') }}" alt="User Profile" style="width: 40px; height: 40px;">
        </li>
    </ul>
</nav>
<!-- End of Topbar -->
