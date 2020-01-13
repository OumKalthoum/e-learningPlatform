<?php
    $id_course = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Learning | Admin</title>
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
                   <form id="form" action="../Authentification/actions/logout.php"></form>
                    <a class="nav-link" onclick="document.getElementById('form').submit();">Logout</a>
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
                            <a href="add_course.php" class="nav-link active">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Course</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add_chapter_course.php" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Chapter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add_exam_course.php" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Exam</p>
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
                                <li class="breadcrumb-item active">Add Course</li>
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
                                    <h3 class="card-title">New Exam</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" id="exam_form" action="actions/add_exam.php" method="post">
                                    <section>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="questions">Threshold (out of 5):</label>
                                                        <input type="number" class="form-control" id="threshold" name="threshold" max="5" min="3"><input type="hidden" class="form-control" id="id_course" name="id_course" value="<?php echo $id_course;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="questions">Question 1:</label>
                                                        <textarea type="text" class="form-control" id="" name="questions[]"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_1">Answer 1: (Correct answer !)</label>
                                                        <input type="text" class="form-control" id="" name="answers_1[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_2">Answer 2:</label>
                                                        <input type="text" class="form-control" id="" name="answers_2[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_3">Answer 3:</label>
                                                        <input type="text" class="form-control" id="" name="answers_3[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="questions">Question 2:</label>
                                                        <textarea type="text" class="form-control" id="" name="questions[]"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_1">Answer 1: (Correct answer !)</label>
                                                        <input type="text" class="form-control" id="" name="answers_1[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_2">Answer 2:</label>
                                                        <input type="text" class="form-control" id="" name="answers_2[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_3">Answer 3:</label>
                                                        <input type="text" class="form-control" id="" name="answers_3[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="questions">Question 3:</label>
                                                        <textarea type="text" class="form-control" id="" name="questions[]"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_1">Answer 1: (Correct answer !)</label>
                                                        <input type="text" class="form-control" id="" name="answers_1[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_2">Answer 2:</label>
                                                        <input type="text" class="form-control" id="" name="answers_2[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_3">Answer 3:</label>
                                                        <input type="text" class="form-control" id="" name="answers_3[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="questions">Question 4:</label>
                                                        <textarea type="text" class="form-control" id="" name="questions[]"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_1">Answer 1: (Correct answer !)</label>
                                                        <input type="text" class="form-control" id="" name="answers_1[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_2">Answer 2:</label>
                                                        <input type="text" class="form-control" id="" name="answers_2[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_3">Answer 3:</label>
                                                        <input type="text" class="form-control" id="" name="answers_3[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="questions">Question 5:</label>
                                                        <textarea type="text" class="form-control" id="" name="questions[]"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_1">Answer 1: (Correct answer !)</label>
                                                        <input type="text" class="form-control" id="" name="answers_1[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_2">Answer 2:</label>
                                                        <input type="text" class="form-control" id="" name="answers_2[]" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 offset-md-1">
                                                    <div class="form-group">
                                                        <label for="answers_3">Answer 3:</label>
                                                        <input type="text" class="form-control" id="" name="answers_3[]" placeholder="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <!-- /.card-body -->

                                    </section>
                                    <div class="card-footer text-right">
                                        <a href="course_list.php" class="btn btn-warning">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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
    <script></script>
    <script src="../dist/js/demo.js">
        var form = $("#exam_form");
        form.children("div").steps({
            headerTag: "h4",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                alert("Submitted!");
            }
        });

    </script>

</body>

</html>
