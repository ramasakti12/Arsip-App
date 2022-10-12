@include('master.head')

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('master.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('master.topbar')
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    @yield('content')
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            @include('master.footer')
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../asset/vendor/jquery/jquery.min.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../asset/js/ruang-admin.min.js"></script>
    @stack('notify')

</body>

</html>
