<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="login/assets/images/favicon.png">
    <title>Girls's Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="login/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="login/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="login/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="login/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar  navbar-expand-lg navbar-expand-md navbar-light top-navbar px-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="dashboard.php">
                        <b class="logo-icon">
                            <img src="login/assets/images/logo-icon-nav.png" alt="homepage" class="dark-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="login/assets/images/logo-text-nav.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="form-inline">
                    <a class="btn btn-outline-success my-2 my-sm-0 rounded-pill" href="login/">Login</a>
                </div>
            </nav>
        </header>
        <div class="mt-5">
            <div class="container-fluid">
                <div class="card-group py-2">

                </div>

                <div class="mx-2 nt-3 card py-4 px-3 shadow-md" style="border-radius: 12px">
                    <div class="card-body">
                            <h2 class="text-center text-dark font-weight-bold mb-4">Contact Us</h2>
                            <form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary rounded-pill py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
                            <div id="form-message-warning mt-4"></div>
                    </div>
                </div>


            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                <!-- &copy; 2023 - Girls's Hostel Management System - by <a href="https://freeprojectscodes.com">Freeprojectscodes</a> -->
            </footer> <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="login/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="login/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="login/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="login/dist/js/app-style-switcher.js"></script>
    <script src="login/dist/js/feather.min.js"></script>
    <script src="login/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="login/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="login/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="login/assets/extra-libs/c3/d3.min.js"></script>
    <script src="login/assets/extra-libs/c3/c3.min.js"></script>
    <script src="login/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="login/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="login/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="login/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="login/dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>