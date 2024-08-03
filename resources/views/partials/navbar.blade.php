<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <!-- Add your links here -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sales.index') }}">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Customer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
