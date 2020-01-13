<?php
    session_start();
    include_once("../../Database/db_connection.php");
    //$id_prof = $_SESSION['id'];
    $id_prof = '1';
    $sql = "SELECT * FROM category WHERE active = '1'";
    $result = mysqli_query($conn, $sql);
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

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Hello <?php echo $_SESSION['full_name'];?> !</a>
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
                                    <h3 class="card-title">New Course</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="actions/add_course.php" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nom">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="" maxlength="50" minlength="3" required>
                                            <input type="hidden" class="form-control" id="id_prof" name="id_prof" value="<?php echo $id_prof;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="categorie">Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                                <?php
                                            //Category data
                                            while($row = mysqli_fetch_assoc($result)):
                                                $id_category = $row["id_category"];
                                                $label_category = $row["label_category"];
                                                echo "<option value='".$id_category."'>".$label_category."</option>";
                                                
                                            endwhile;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" id="description" name="description" placeholder="" rows="3" maxlength="999" minlength="20" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="sylabus">Syllabus</label>
                                            <textarea class="textarea" placeholder="Place some text here" name="syllabus" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image" accept="image/x-png,image/gif,image/jpeg" required>
                                                    <label class="custom-file-label" for="image">Choose a file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Open</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Lunch course immediately</label>
                                            <select class="form-control select2" name="lunched" required>
                                                <option value="0" selected="selected">No</option>
                                                <option value="1">yes</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Number of chapters</label>
                                            <input type="number" class="form-control" id="nb_chapters" name="nb_chapters" placeholder="" max="15" min="1" required>
                                        </div>
                                    </div>

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
    <script src="../dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote()
        })

    </script>
    <script>
        $(document).on('change', '#image', function(event) {
            $(this).next('.custom-file-label').html(event.target.files[0].name);

        });

    </script>
</body>

</html>
