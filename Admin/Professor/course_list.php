<?php
    session_start();
    include_once("../../Database/db_connection.php");
    $sql = "SELECT * FROM `course`";
    $result = $conn->query($sql);
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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
                            <a href="course_list.php" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
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
                                <li class="breadcrumb-item active">Course List</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="card row">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <th>Category</th>
                                            <th>N° Videos</th>
                                            <th>N° Subscriptions</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    //Course data
                                    while($row = $result->fetch_assoc()):
                                    $id_course = $row["id_course"];
                                    //Get category name
                                    $id_category = $row["id_category"];
                                    $category_sql = "SELECT * FROM `category` WHERE id_category = '$id_category'";
                                    $category_result = mysqli_query($conn, $category_sql);
                                    $category_row = mysqli_fetch_assoc($category_result);
                                    $label_category = $category_row["label_category"];
                                    
                                    $name = $row["name"];
                                    $description = $row["description"];
                                    $active = $row["active"];
                                    $launched = $row["lunched"];
                                        
                                    //number of videos  
                                    $video_sql = "SELECT count(*) as count FROM `chapter` WHERE id_course = '$id_course'";
                                    $video_result = mysqli_query($conn, $video_sql);
                                    $video_row = mysqli_fetch_assoc($video_result);
                                    $videos_number = $video_row['count'];
                                        
                                        
                                    //number of students = subsriptions 
                                    $student_sql = "SELECT count(*) as count FROM `course_student` WHERE id_course = '$id_course'";
                                    $student_result = mysqli_query($conn, $student_sql);
                                    $student_row = mysqli_fetch_assoc($student_result);
                                    $student_number = $student_row['count'];
                                    ?>
                                        <tr>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo $label_category;?></td>
                                            <td><?php echo $videos_number;?></td>
                                            <td><?php echo $student_number;?></td>
                                            <td>
                                                <?php if($active == '1'){?>
                                                <button type="button" class="btn btn-success btn-xs">Active</button>
                                                <?php }else{?>
                                                <button type="button" class="btn btn-danger btn-xs">Blocked</button>
                                                <?php }?>

                                                <?php if($launched == '1'){?>
                                                <button type="button" class="btn btn-primary btn-xs">Launched</button>
                                                <?php }else{?>
                                                <button type="button" class="btn btn-warning btn-xs">On hold</button>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <form method="post" action="course_detail.php">
                                                    <input type="hidden" name="id_course" value="<?php echo $id_course;?>">
                                                    <button type="submit" class="btn btn-block btn-outline-primary btn-xs">View</button>
                                                </form>
                                                <?php if($launched == '0'){?>
                                                <form method="post" action="actions/launch_course.php">
                                                    <input type="hidden" name="id" value="<?php echo $id_course;?>">
                                                    <button type="submit" class="btn btn-block btn-outline-success btn-xs">Launch</button>
                                                </form>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Course</th>
                                            <th>Category</th>
                                            <th>N° Videos</th>
                                            <th>N° Subscriptions</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div> <!-- /.card-body -->
                    </div>

                </div>
            </section>

        </div>
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
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(document).ready(function() {
            var table = $('#example1').DataTable();
        });

    </script>
    <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            <?php
            if(isset($_GET['success']) && $_GET['success'] == 'true'):
                echo "Toast.fire({
                        type: 'success',
                        title: '  Course has been added successfuly !'
                    })";
            endif;
            if(isset($_GET['exam']) && $_GET['exam'] == 'true'):
                echo "Toast.fire({
                        type: 'success',
                        title: '  Exam has been added successfuly !'
                    })";
            endif;
            if(isset($_GET['chapter']) && $_GET['chapter'] == 'true'):
                echo "Toast.fire({
                        type: 'success',
                        title: '  Chapters have been added successfuly !'
                    })";
            endif;
            if(isset($_GET['modify']) && $_GET['modify'] == 'true'):
                echo "Toast.fire({
                        type: 'success',
                        title: '  Course has been modified successfuly !'
                    })";
            endif;
            if(isset($_GET['update']) && $_GET['update'] == 'true'):
                echo "Toast.fire({
                        type: 'success',
                        title: '  Course has been launched successfuly !'
                    })";
            endif;
        ?>

        });

    </script>
</body>

</html>
