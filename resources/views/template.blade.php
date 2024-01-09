<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mall</title>

    <!-- Custom fonts for this template-->
    <link href="/bs-template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/bs-template/css/sb-admin-2.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Topbar Navbar -->
                <div class="d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 ">
                    <h1 class="h3 mb-0 text-gray-800">Mall</h1>
                </div>
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-sm-block"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 text-gray-600 normal">Login</span>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- End of Topbar -->
            @yield('content')
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="/bs-template/vendor/jquery/jquery.min.js"></script>
    <script src="/bs-template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/bs-template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/bs-template/js/sb-admin-2.min.js"></script>


</body>

@yield('script')


</html>
