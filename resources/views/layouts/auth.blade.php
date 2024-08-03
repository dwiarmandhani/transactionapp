<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB Admin 2 - @yield('title')</title>
    
    <!-- SB Admin 2 CSS -->
    <link href="{{ asset('vendor/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link href="{{ asset('vendor/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    {{-- PWA --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- End Page Content -->

            </div>
            <!-- End of Main Content -->


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
