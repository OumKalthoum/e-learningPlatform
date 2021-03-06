<!DOCTYPE html>
<html lang="en">

<head>
    <title>Result</title>
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
                                        <li class=""><a href="../course/course_list.php">Courses</a></li>
                                        <!--
									<li><a href="blog.html">Blog</a></li>
									<li><a href="#">Page</a></li>-->
                                        <li><a href="../general/contact.php">Contact</a></li>
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
                    <div class="col-lg-8 col-offset-1">
                        <div class="blog_content">
                            <div class="blog_title">Exam result of course "Demo 1"</div>
                            
                            <div class="blog_subtitle">You Result for the exam is: 18/20</div>
                        </div>
                        
                        <br>
                        <form action="result.html">
                            <button type="submit" class="home_search_button">Try again</button>
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
