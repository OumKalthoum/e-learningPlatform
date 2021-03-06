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
    $course_name = $row["name"];

    $sql = "SELECT * FROM `evaluation` WHERE id_course = '$id_course'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id_evaluation = $row['id_evaluation'];
    $threshold = $row['threshold'];

    //Get questions list
    $select_question = "SELECT * FROM `question` WHERE id_evaluation = '$id_evaluation'";
    $question_result = mysqli_query($conn, $select_question);
    
    //number of passed evaluations
    $exams_sql = "SELECT count(*) as count FROM `evaluation` e INNER JOIN `evaluation_result` er ON e.id_evaluation = er. id_evaluation WHERE id_course = '$id_course'";
    $exams_result = mysqli_query($conn, $exams_sql)or die(mysqli_error($conn));
    $exams_row = mysqli_fetch_assoc($exams_result);
    $exams_number = $exams_row['count'];
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
                                <i class="nav-icon fas fa-book active"></i>
                                <p>Course List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add_course.php" class="nav-link">
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
                                    <h3 class="card-title">Exam</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted">Course </span>
                                                            <span class="info-box-number text-center text-muted mb-0"><?php echo $course_name;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted">Threshold</span>
                                                            <span class="info-box-number text-center text-muted mb-0"><?php echo $threshold;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="info-box bg-light">
                                                        <div class="info-box-content">
                                                            <span class="info-box-text text-center text-muted">Total Passed Evaluations</span>
                                                            <span class="info-box-number text-center text-muted mb-0"><?php echo $exams_number;?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-md-1">
                                                    <div class="post">
                                                        <?php 
                                                        $qcounter = 1;
                                                        $rcounter = 1;
                                                        while($question_row = mysqli_fetch_assoc($question_result)):
                                                            $id_question = $question_row['id_question'];
                                                            $question = $question_row['description'];

                                                            //display question
                                                            echo "<h5 class='mt-5 text-muted'>Question ".$qcounter.":</h5>";
                                                            echo "<p>".$question."</p>";

                                                            $qcounter++;


                                                            //get responses for each question
                                                            $select_response = "SELECT * FROM `response` WHERE id_question = '$id_question'";
                                                            $response_result = mysqli_query($conn, $select_response);
                                                            echo "<div class='offset-md-1'>";
                                                                while($response_row = mysqli_fetch_assoc($response_result)):
                                                                    $status = '';
                                                                    $response = $response_row['response'];
                                                                    $response_status = $response_row['status'];

                                                                    if($response_status == '1'):
                                                                        $status = "(Correct answer !)";
                                                                    endif;

                                                                    echo "<h7 class='mt-5 text-muted'>Answer ".$rcounter.": ".$status."</h7>";
                                                                    echo "<p style='color: black;'>".$response."</p>";
                                                                    $rcounter++;

                                                                endwhile;
                                                            echo "</div>";
                                                            echo "<hr>";

                                                        endwhile;
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right mt-5 mb-3">
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
