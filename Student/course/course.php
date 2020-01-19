<?php
    include_once("../../Database/db_connection.php");
    session_start();
    $connected = "";
	if(isset($_SESSION["connected"])){
        $id_account = $_SESSION["id_account"];
        $connected = $_SESSION["connected"];
        
        $sql = "SELECT * from account where id_account = $id_account" ;
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) { 
            $id_account   = $row["id_account"];
            $full_name    = $row["full_name"];      
            
        }
            
    }
  
        
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course details</title>
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
    <link rel="stylesheet" type="text/css" href="../styles/home_search_button.css">
    <link rel="stylesheet" type="text/css" href="../styles/course.css">
    <link rel="stylesheet" type="text/css" href="../styles/course_responsive.css">

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
                                        <!--
									<li><a href="blog.html">Blog</a></li>
									<li><a href="#">Page</a></li>-->
                                        <li><a href="../general/contact.php">Contact</a></li>
                                        <?php

                                        if($connected == "connected"){
                                        echo '
                                        <li>
                                            <button class="home_search_button">
                                                
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

                                    <!-- Hamburger -->

                                    <!--<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>-->
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
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
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
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="course_list.php">Courses</a></li>
                                    <li>Course Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course -->

        <div class="course">
            <div class="container">
                <div class="row">

                    <!-- Course -->
                    <div class="col-lg-8">
                        <?php 
                        $id_course = $_GET['id'];
                        $_SESSION["id_course"] = $id_course;
                        $sql = mysqli_query($conn, "SELECT * FROM course  WHERE id_course= $id_course AND active = 1 AND lunched = 1");
                        $row_course = mysqli_fetch_array($sql);

                        $id_prof = $row_course["id_prof"];
                        $prof = mysqli_query($conn, "SELECT * from account where id_account = $id_prof");
                        $row_account = mysqli_fetch_array($prof);

                        $id_cat = $row_course["id_category"];
                        $cat = mysqli_query($conn,"SELECT * FROM category where id_category = $id_cat");
                        $row_cat = mysqli_fetch_array($cat);

                        ?>

                        <div class="course_container">
                            <div class="course_title"> <?php echo $row_course["name"] ?></div>
                            <?php 
                                if($connected == "connected"){
                                    $exist = 'NO';
                                    $start = mysqli_query($conn, "SELECT * FROM course_student");
                                    while($row_start = mysqli_fetch_array($start)) { 
                                        $id_stud = $row_start["id_stud"];
                                        $id_started_course = $row_start["id_course"];  

                                        if($id_stud == $id_account && $id_started_course == $id_course){
                                            $exist = 'yes';
                                        }
                                    }
                                    if($exist == 'yes'){
                                        echo '
                                        <form action="follow_course.php" >
                                            <button type="submit" class="home_search_button">See your course</button>
                                        </form>
                                        ';
                                    }
                                    else{
                                        echo '
                                        <form method="GET" action="follow_course.php" >
                                            <button name="" type="submit" class="home_search_button">Start</button>
                                            <input name="startcourse" type="hidden" value="'.$id_course.'">
                                            
                                        </form>
                                        
                                        ';
                                    }
                                }else{
                                    echo '
                                    <form action="../signup/sign_up.php">
                                        <button type="submit" class="home_search_button">Start</button>
                                    </form>      
                                    ';
                                }
                            ?>

                            
                            <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Professor:</div>
                                    <div class="course_info_text"><a href="#"><?php echo $row_account["full_name"] ?></a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Category:</div>
                                    <div class="course_info_text"><a href="#"><?php echo $row_cat["label_category"] ?></a></div>
                                </div>

                            </div>

                            <!-- Course Image -->
                            <div class="course_image"><img src="../../Admin/images/<?php echo $row_course["image_course"] ?>" alt=""></div>

                            <!-- when image is added
                            <div class="course_image"><img src="../images/<?php echo $row_course["image_course"] ?>" alt=""></div>
                            -->

                            <!-- Course Tabs -->
                            <div class="course_tabs_container">
                                <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                    <div class="tab active">Syllabus</div>
                                </div>
                                <div class="tab_panels">

                                    <!-- Description -->
                                    <div class="tab_panel active">
                                        <div class="tab_panel_title"><?php echo $row_course["name"] ?></div>
                                        <div class="tab_panel_content">
                                            <div class="tab_panel_text">
                                                <?php echo htmlspecialchars_decode($row_course["syllabus"]) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Feature -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Course</div>
                                <div class="sidebar_feature">

                                    <!-- Features -->
                                    <div class="feature_list">

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Number of chapters:</span></div>
                                            <?php 
                                            
                                            //number of videos  
                                            $video_sql = "SELECT count(*) as count FROM `chapter` WHERE id_course = '$id_course'";
                                            $video_result = mysqli_query($conn, $video_sql);
                                            $video_row = mysqli_fetch_assoc($video_result);
                                            $videos_number = $video_row['count'];
                                            echo '<div class="feature_text ml-auto">'.$videos_number.'</div>';
                                            
                                            ?>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Participants:</span></div>
                                            <?php 
                                            
                                            //number of students = subsriptions 
                                            $student_sql = "SELECT count(*) as count FROM `course_student` WHERE id_course = '$id_course'";
                                            $student_result = mysqli_query($conn, $student_sql);
                                            $student_row = mysqli_fetch_assoc($student_result);
                                            $student_number = $student_row['count'];
                                            echo '<div class="feature_text ml-auto">'.$student_number.'</div>';
                                            
                                            ?>
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php include_once("../includes/footer.html");?>

    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap4/popper.js"></script>
    <script src="../styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../plugins/easing/easing.js"></script>
    <script src="../plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="../js/course.js"></script>
</body>

</html>
