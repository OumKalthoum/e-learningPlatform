<?php

    session_start();

    //check if user has logged in
    if(isset($_SESSION['id_account']) && !empty($_SESSION['id_account'])){}
    else header("Location: ../Authentification/sign_in.php");

    include_once("../../Database/db_connection.php");
    if(!isset($_GET['id'])):
        header('Location: ../General/404.html');
    endif;
    $id_course = $_GET['id'];
    $sql = "SELECT * FROM `course` WHERE id_course = '$id_course'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $id_category = $row["id_category"];
    $course_name = $row["name"];
    $description = $row["description"];
    $release_date = $row["release_date"];
    $syllabus = htmlspecialchars_decode($row["syllabus"]);
    $active = $row["active"];
    $lunched = $row["lunched"];

    //List of chapters
    $chapter_sql = "SELECT * FROM `chapter` WHERE id_course = '$id_course'";
    $chapter_result = mysqli_query($conn, $chapter_sql);
    
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
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
                        <a href="#" class="d-block">Hello  <?php echo $_SESSION['full_name'];?> !</a>
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
                            <a href="category_list.php" class="nav-link">
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
                                <p>Professor List</p>
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
                            <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-blue">Course : <?php echo $course_name;?></span>
                                </div>
                                <!-- /.timeline-label -->
                                <?php 
                                    $counter = 1;
                                    while($chapter_row = mysqli_fetch_assoc($chapter_result)):
                                        $title = $chapter_row['title_chapter'];
                                        $description = $chapter_row['description_chapter'];
                                        $video = $chapter_row['path_video'];
                                ?>
                                <!-- timeline item -->
                                <div>
                                    <i class="fas bg-blue"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><?php echo "Chapter  ".$counter.":      ".$title;?></h3>

                                        <div class="timeline-body">
                                            <?php echo $description;?>
                                        </div>

                                        <div class="timeline-footer text-right">
                                        </div>
                                        <div class="timeline-body">
                                            <div class="col-md-10 offset-md-1">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="../videos/<?php echo $video;?>" frameborder="0" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $counter++; endwhile;?>
                                <!-- END timeline item -->
                            </div>
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
