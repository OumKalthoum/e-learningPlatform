<?php
    include_once("../../Database/db_connection.php");
    session_start();
    $connected = "";
	if(isset($_SESSION["connected"])){
        $id_account = $_SESSION["id_account"];
        $connected = $_SESSION["connected"];
        $id_course = $_SESSION["id_course"];
        
        $sql = "SELECT * from account where id_account = $id_account" ;
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) { 
            $id_account   = $row["id_account"];
            $full_name    = $row["full_name"];      
            
        }

        if(isset($_GET["id"])){
            $id_chapter = $_GET['id'];
            $counter = $_GET['counter'];
            $_SESSION["counter"] = $counter;
            $query = "SELECT * from chapter where id_course = $id_course and id_chapter = $id_chapter";
            $result_query = $conn->query($query);
            $row = $result_query->fetch_assoc();
        }
        
        $sql1 = "SELECT * from chapter where id_course = $id_course" ;

        $result1 = $conn->query($sql1);
            
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-learning</title>
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
    <link href="../plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/blog.css">
    <link rel="stylesheet" type="text/css" href="../styles/blog_single.css">
    <link rel="stylesheet" type="text/css" href="../styles/blog_single_responsive.css">
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

        <div class="blog">
            <div class="container">
            <?php 
            if($row){
            $counter = $_SESSION['counter'];
            
            
            $qAvan = "SELECT * from course_student where id_course = $id_course and id_stud = $id_account";
            $result_avancement = $conn->query($qAvan);
            $rowCoursStud = $result_avancement->fetch_assoc();
            ?>
                <div class="blog_title">Your progress in this course is : </div>
                <br>
                    <div class=" text-center">
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $rowCoursStud["Avancement"];?>%; height: 25px;" aria-valuenow="<?php echo $rowCoursStud["Avancement"];?>" aria-valuemin="0" aria-valuemax="100"><?php echo $rowCoursStud["Avancement"]; ?>%</div>
                        </div>
                    </div>
                    </br></br>
                <div class="row">

                    <!-- Blog Content -->
                    <div class="col-lg-8">

                        <div class="blog_content">
                       
                            <div class="blog_title">Chapter <?php echo $counter.' : '.$row["title_chapter"] ?></div>
                </br>
                            <div class="">
                                <div class="blog_post_video_container">
                                    <video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto"}'>
                                    <source src="../../Admin/<?php echo $row["path_video"] ?>" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                            </div>
                            <p><?php echo $row["description_chapter"]; 
                            
                            echo ' </div>
                             <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                             </div></p>';
                        
                        }else{

                            $query = "SELECT * from chapter where id_course = $id_course ORDER BY `chapter`.`id_chapter` ASC ";
                            $result_query = $conn->query($query);
                            $row = $result_query->fetch_assoc();
                            
                            $qAvan = "SELECT * from course_student where id_course = $id_course and id_stud = $id_account";
                            $result_avancement = $conn->query($qAvan);
                            $rowCoursStud = $result_avancement->fetch_assoc();
                            ?>
                                <div class="blog_title">Your progress in this course is : </div>
                                <br>
                                    <div class=" text-center">
                                        <div class="progress" style="height: 25px;">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo $rowCoursStud["Avancement"]?>%; height: 25px;" aria-valuenow="<?php echo $rowCoursStud["Avancement"]?>" aria-valuemin="0" aria-valuemax="100"><?php echo $rowCoursStud["Avancement"] ?>%</div>
                                        </div>
                                    </div>
                                    </br></br>
                        <div class="row">

                            <!-- Blog Content -->
                            <div class="col-lg-8">

                                <div class="blog_content">
                        <div class="blog_title">Chapter <?php echo '1 : '.$row["title_chapter"] ?></div>
                </br>
                            <div class="">
                                <div class="blog_post_video_container">
                                    <video class="blog_post_video video-js" data-setup='{"controls": true, "autoplay": false, "preload": "auto"}'>
                                        <!--<source src="../images/mov_bbb.mp4" type="video/mp4">-->
                                        <source src="../../Admin/<?php echo $row["path_video"] ?>" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                            </div>
                            <p><?php echo $row["description_chapter"]; 
                            
                            echo ' </div>
                             <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                             </div></p>';
                         } ?>
                       
                    </div>

                    <!-- Blog Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Categories -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Chapters</div>
                                <div class="sidebar_categories">
                                    <ul class="categories_list">
                                    <?php
                                        // output data of each row
                                        $count=0;
                                        while($row_chapter = $result1->fetch_assoc()) { 
                                            $id_chapter  = $row_chapter["id_chapter"];   
                                            $title_chapter = $row_chapter["title_chapter"]; 
                                            $count ++;
                                    ?>
                                        <li><a href="follow_course.php?id=<?php echo $id_chapter.'&counter='.$count ?>" class="clearfix">Chapter  <?php echo $count.' : <span>'.substr($title_chapter, 0, 40).'</span>'; ?></a></li>								
                                        <?php } ?>
                                        <li><a href="../exam/exam.php" class="clearfix">Exam</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
      <?php include_once("../includes/footer.html");?>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap4/popper.js"></script>
    <script src="../styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../plugins/easing/easing.js"></script>
    <script src="../plugins/masonry/masonry.js"></script>
    <script src="../plugins/video-js/video.min.js"></script>
    <script src="../plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="../js/course.js"></script>
</body>

</html>
