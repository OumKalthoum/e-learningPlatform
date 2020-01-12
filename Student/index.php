<?php
    include_once("../Database/db_connection.php");
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
    <title>Home E-learning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
                            <div class="top_bar_content d-flex flex-row align-items-center justify-content-start"><?php 
                                if($connected == "connected"){
                                    echo '
                                    <div class="top_bar_login ml-auto">
                                    <div  class="login_button"><a href="signup/logout.php">Logout</a></div>
                                    ';
                                }else{
                                    echo '
                                    <div class="top_bar_login ml-auto">
                                    <div  class="login_button"><a href="signup/sign_up.php">Register or Login</a></div>
                                    ';
                                }
                            ?></div>
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
                                <a href="index.php">
                                    <div class="logo_text">E-<span>learning</span></div>
                                </a>
                            </div>
                            <nav class="main_nav_contaner ml-auto">
                                <ul class="main_nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="general/about.php">About</a></li>
                                    <li><a href="course/course_list.php">Courses</a></li>
                                    <!--
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Page</a></li>-->
                                    <li><a href="general/contact.php">Contact</a></li>
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

        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.php">Home</a></li>
                <li class="menu_mm"><a href="general/about.php">About</a></li>
                <li class="menu_mm"><a href="course/course_list.php">Courses</a></li>
                <li class="menu_mm"><a href="general/contact.php">Contact</a></li>
                <?php
                    if($connected == "connected"){
                        echo '
                        <li class="menu_mm">
                        <a>'.$full_name.'</a>    
                        </li>';
                    }
                    ?>
            </ul>
        </nav>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_slider_container">

                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">The Free System Education</div>
                                        <div class="home_slider_subtitle">Future Of Education Technology</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Professor</option>
                                                        <option>Professor 1</option>
                                                        <option>Professor 2</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="home_search_button">search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Popular Courses -->

        <div class="courses">
            <div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Popular Online Courses</h2>
                            <div class="section_subtitle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row courses_row">

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="images/course_1.jpg" alt=""></div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.php">Software Training</a></h3>
                                <div class="course_teacher">Mr. John Taylor</div>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>20 Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="images/course_2.jpg" alt=""></div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.php">Developing Mobile Apps</a></h3>
                                <div class="course_teacher">Ms. Lucius</div>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>20 Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="images/course_3.jpg" alt=""></div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.php">Starting a Startup</a></h3>
                                <div class="course_teacher">Mr. Charles</div>
                                <div class="course_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_info">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span>20 Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="courses_button trans_200"><a href="courses.php">view all courses</a></div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('includes/footer.html');?>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
