<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sigin In Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class=" animation__wobble rounded-circle" src="./dist/img/pp.jpeg" alt="AdminLTELogo" height="150"
                width="150">
        </div>
        <div class="row flex-column justify-content-center align-items-center" style="height:90vh;">
            <div class="card card-secondary px-0" style="width:60vh;">
                <?php
                session_start();
                 if(isset($_SESSION['error'])){
                    print "
                    <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                        <strong>Error:</strong> ".$_SESSION['error']."
                    </div>";
                    unset($_SESSION['error']);
                }
                ?>
                <div class=" card-header text-center">Admin Login</div>
                <form action="valdate_login.php" class="px-4" method="post">
                    <div class="card-header text-center">
                        <input type="text" name="username" class="form-control my-3" placeholder="Username or Email">
                        <input type="password" name="pasword" class="form-control my-3" placeholder="Enter password">
                    </div>
                    <div class=" card-header text-center">
                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    </div>
                </form>
            </div>
        </div>






        <!-- Main Footer -->

    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>