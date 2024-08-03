<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales App - @yield('title')</title>
    
    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('vendor/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link href="{{ asset('vendor/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/vendor/datatables/dataTables.bootstrap4.min.css') }}">
    {{-- PWA --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>
<style>
 /* Basic pagination styles */
.pagination {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.pagination a, .pagination span {
    padding: 10px 15px;
    margin: 0 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-decoration: none;
    color: #007bff;
    font-size: 1rem; /* Default font size */
}

.pagination a:hover {
    background-color: #f8f9fa;
}

.pagination .active {
    background-color: #007bff;
    color: white;
    border: 1px solid #007bff;
}

.pagination .disabled {
    color: #6c757d;
    border: 1px solid #ddd;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .pagination a, .pagination span {
        padding: 8px 12px; /* Slightly smaller padding on smaller screens */
        margin: 0 3px; /* Reduce margin to fit more controls if needed */
        font-size: 0.875rem; /* Smaller font size for better fit */
    }
}

@media (max-width: 576px) {
    .pagination {
        flex-direction: column; /* Stack pagination controls vertically on very small screens */
    }

    .pagination a, .pagination span {
        padding: 8px 10px; /* Further reduce padding for small screens */
        margin: 2px 0; /* Vertical margin for stacked pagination */
        font-size: 0.75rem; /* Further reduce font size */
    }
}





</style>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- End Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    @include('layouts.logout-modal')

    <!-- jQuery and Bootstrap JavaScript -->
    <script src="{{ asset('vendor/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- SB Admin 2 JavaScript -->
    <script src="{{ asset('vendor/js/sb-admin-2.min.js') }}"></script>
    
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('{{ asset('service-worker.js') }}')
                    .then((registration) => {
                        console.log('Service Worker registered with scope:', registration.scope);
                    })
                    .catch((error) => {
                        console.log('Service Worker registration failed:', error);
                    });
            });
        }
       

        
    </script>
</body>
</html>
