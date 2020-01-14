
<?php
include_once("../../Database/db_connection.php");
$id_evaluation = $_GET['id'];

$sql = "SELECT * FROM `course` INNER JOIN evaluation 
ON course.id_course=evaluation.id_course
 WHERE id_evaluation = '$id_evaluation'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $course_name = $row['name'];
    $course_date = $row['release_date'];

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
                                    <div class="top_bar_login ml-auto">
                                        <div class="login_button"><a href="../signup/sign_up.php">Register or Login</a></div>
                                    </div>
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
                                        <li class="active"><a href="../course/course_list.php">Courses</a></li>

                                        <li><a href="../general/contact.php">Contact</a></li>
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
                    <li class="menu_mm"><a href="../course/course_list.php">Courses</a></li>
                    <li class="menu_mm"><a href="../general/contact.php">Contact</a></li>
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
                                    <li><a href="../course/course_list.php">Courses</a></li>
                                    <li>Exam</li>
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
                <div class="row">

                    <!-- Blog Content -->
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="blog_content">
                            <div class="blog_title"> <?php echo $course_name;?></div>
                            <div class="blog_meta">
                                <ul>
                                    <li>Post on <a href="#"><?php echo $course_date;?></a></li>
                                    <li>By <a href="#">admin</a></li>
                                </ul>
                            </div>
                                <?php
                                      $select_question = "SELECT * FROM `question` WHERE id_evaluation = '$id_evaluation'";
                                       $question_result = mysqli_query($conn, $select_question);
                                while($question_row = mysqli_fetch_assoc($question_result)):
                                     $id_question = $question_row['id_question'];
                                     $question = $question_row['description'];  
                                     echo "<div class='blog_subtitle'>".$question."</div>";
                                 ?>
                                    <div class="courses_search_container">
                                    <select id="courses_search_select" style="margin-top: 15px; margin-bottom: 15px; width: 700px" class="courses_search_select courses_search_input">
                                    <?php 

                                    $select_response = "SELECT * FROM `response` WHERE id_question = '$id_question'";                    
                                     $response_result = mysqli_query($conn, $select_response);
                                     echo " <div class='courses_search_container'>";

                                    while($response_row = mysqli_fetch_array($response_result)){
                                        ?>
                                        
                                        <option><?php echo $response_row['response'];?> </option>
                                        
                                        <?php 

                                        }
                                     ?>
                                    
                                    </select>
                                    </div>
                                                        
                                <?php endwhile;?>      
                            

                        </div>
                           <br>

                        <form action="result.php" method="post" value="<?php echo $id_evaluation;?>">
                            <button type="submit" class="home_search_button">Submit</button>
                        </form>
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
