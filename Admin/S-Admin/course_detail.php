<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../Authentification/sign_up.php" class="nav-link">Logout</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="profile.php" class="nav-link">Profile</a>
                </li>
            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">E-Learning : Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Hello Alexander Pierce !</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-header">COURSE MANAGEMENT</li>
                        <li class="nav-item">
                            <a href="course_list.php" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Course List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category_list.php" class="nav-link active">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>Category List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add_category.php" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-header">ACCOUNT MANAGEMENT</li>
                        <li class="nav-item">
                            <a href="student_list.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Students List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="professor_list.php" class="nav-link">
                                <i class="nav-icon fas fa-school"></i>
                                <p>Professors List</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 ml-auto">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Course Detail</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Course Detail</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted">Total Subscriptions</span>
                                                            <span class="info-box-number text-center text-muted mb-0">2300</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted"><i class="far fa-fw fa-clock"></i>Total time</span>
                                                            <span class="info-box-number text-center text-muted mb-0">5 hour</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted">Total Passed Evaluations</span>
                                                            <span class="info-box-number text-center text-muted mb-0">20 <span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4>Syllabus</h4>
                                                    <div class="post">
                                                        <p>Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            ke. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore.
                                                        </p>

                                                        <p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                            <h5 class="mt-5 text-muted">Date of release: 2019/11/08</h5>
                                            <h3 class="text-primary">Description</h3>
                                            <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                            <br>
                                            <div class="text-right mt-5 mb-3">
                                                <a href="#" class="btn btn-sm btn-success">Lunch</a>
                                                <a href="#" class="btn btn-sm btn-primary">Modify</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2019 <a href="http://adminlte.io">E-learning.org</a>.</strong>
        All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>

</body>

</html>
