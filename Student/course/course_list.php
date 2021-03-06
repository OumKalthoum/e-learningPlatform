<?php
    include_once("../../Database/db_connection.php");
    session_start();
    $connected = "";
	if(isset($_SESSION["connected"])){
        $id_account = $_SESSION["id_account"];
        $connected = $_SESSION["connected"];
        
        $sql1 = "SELECT * from account where id_account = $id_account" ;
        $result1 = $conn->query($sql1);

        while($row = $result1->fetch_assoc()) { 
            $id_account   = $row["id_account"];
            $full_name    = $row["full_name"];      
            
        }
            
	}
    
    if(isset($_GET["id"])){
        $search_word = "";
        $id = $_GET['id'];
    	$sql = "SELECT * FROM course  WHERE id_category= $id AND active = 1 AND lunched = 1";
    }
    
    else if(isset($_GET["btn_search"])){
    	$search_word = $_GET['search'];
    	$sql = "SELECT * FROM course  WHERE name like '%$search_word%' AND active = 1 AND lunched = 1";
    }

    else{  
    	$search_word = "";
    	$sql = "SELECT * FROM course WHERE active = 1 AND lunched = 1";
    }

    $result = $conn->query($sql);

    $sql_category 	 = "SELECT * FROM category";
    $result_category = $conn->query($sql_category);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course list</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../styles/courses.css">
    <link rel="stylesheet" type="text/css" href="../styles/courses_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                <?php 
                                    if($connected == "connected"){
                                        echo '
                                        <div class="top_bar_login ml-auto">
                                        <div  class="login_button"><a href="../signup/logout.php">Logout</a></div>
                                        ';
                                    }else{
                                        echo '
                                        <div class="top_bar_login ml-auto">
                                        <div  class="login_button"><a href="../signup/sign_up.php">Register or Login</a></div>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">E-<span>learning</span></div>
                                    </a>
                                </div>
                                
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="../general/about.php">About</a></li>
                                        <li class="active"><a href="course_list.php">Courses</a></li>
                                        <li><a href="../general/contact.php">Contact</a></li>
                                        <?php

                                            if($connected == "connected"){
                                            echo '
                                            <li>
                                                <button class="courses_search_button">
                                                    
                                                    '.$full_name.'
                                                    <div class="hamburger menu_mm">
                                                        <i class="glyphicon-user"></i>
                                                    </div>
                                                </button>
                                            </li>
                                            ';
                                            }
                                        ?>
                                    </ul>

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="courses_search_button ml-auto">
                                        <i class="fa fa-search "></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </header>
        

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="../index.php">Home</a></li>
                    <li class="menu_mm"><a href="../general/about.php">About</a></li>
                    <li class="menu_mm"><a href="course_list.php">Courses</a></li>
                    <li class="menu_mm"><a href="../general/contact.php">Contact</a></li>
                    <?php

                    if($connected == "connected"){
                    echo '
                    <li class="menu_mm">
                    <a>
                            '.$full_name.'
                            </a>    
                    </li>
                    ';
                    }
                    ?>
                </ul>
            </nav>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Courses</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses -->

        <div class="courses">
            <div class="container">
                <div class="row">

                    <!-- Courses Main Content -->
                    <div class="col-lg-8">
                        <div class="courses_search_container">
                            <form action="course_list.php" method="GET" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                                <input type="search" name="search" value="<?php echo $search_word ?>" class="courses_search_input col-10" placeholder="Search Courses" >
                                <button action="submit" name="btn_search" class="courses_search_button ml-auto">search now</button>
                            </form>
                        </div>
                        <div class="courses_container">
                            <div class="row courses_row">

                                <!-- Course -->
                                
                                <?php 
                                    
                                
                                        while($row = $result->fetch_assoc()){

                                            //image part : <img src="../../Admin/image_course/'.$row["image_course"].'"
                                            $id_course = $row["id_course"];
                                            $image_course = $row["image_course"];
                                            echo '
                                            <div class="col-lg-6 course_col">
                                            <div class="course">
                                            <div class="course_image"><img src="../../Admin/images/'.$image_course.'" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.php?id='.$id_course.'">'.$row["name"].'</a></h3>';

                                            $id_prof = $row["id_prof"];
                                            $prof = mysqli_query($conn, "SELECT * from account where id_account = $id_prof");
                                            $row_account = mysqli_fetch_array($prof);


                                            //number of students = subsriptions 
                                            $student_sql = "SELECT count(*) as count FROM `course_student` WHERE id_course = '$id_course'";
                                            $student_result = mysqli_query($conn, $student_sql);
                                            $student_row = mysqli_fetch_assoc($student_result);
                                            $student_number = $student_row['count'];


                                            echo '
                                                <div class="course_teacher">'.$row_account["full_name"].'</div>
                                                <div class="course_text">
                                                    <p>'.substr($row["description"], 0, 150).'</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>'.$student_number.' Student</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            ';

                                        }

                                     
                                    
                                ?>
                                    
                               

                                

                            </div>
                            
                        </div>
                    </div>

                    <!-- Courses Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Categories -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Categories</div>
                                <div class="sidebar_categories">
                                    <ul>
                                 
                                    <?php
                                        // output data of each row
                                        while($row = $result_category->fetch_assoc()) { 
                                            $id_cat  = $row["id_category"];   
                                            $label_cat = $row["label_category"];     
                                    ?>
                                        <li><a href="course_list.php?id=<?php echo $id_cat ?>"><?php echo $label_cat ?></a></li>								
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../includes/footer.html');?>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap4/popper.js"></script>
    <script src="../styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../plugins/easing/easing.js"></script>
    <script src="../plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="../js/courses.js"></script>
</body>

</html>
