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
                                        <li class="active"><a href="course_list.php">Courses</a></li>
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
                    <li class="menu_mm"><a href="course_list.php">Courses</a></li>
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

                        <div class="course_container">
                            <div class="course_title">Software Training</div>
                            <form action="follow_course.php">
                                <button type="submit" class="home_search_button">Start</button>
                            </form>
                            <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Professor:</div>
                                    <div class="course_info_text"><a href="#">Jacke Masito</a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Category:</div>
                                    <div class="course_info_text"><a href="#">Languages</a></div>
                                </div>

                            </div>

                            <!-- Course Tabs -->
                            <div class="course_tabs_container">
                                <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                    <div class="tab active">description</div>
                                </div>
                                <div class="tab_panels">

                                    <!-- Description -->
                                    <div class="tab_panel active">
                                        <div class="tab_panel_title">Software Training</div>
                                        <div class="tab_panel_content">
                                            <div class="tab_panel_text">
                                                <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                            <div class="tab_panel_section">
                                                <div class="tab_panel_subtitle">Requirements</div>
                                                <ul class="tab_panel_bullets">
                                                    <li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
                                                    <li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
                                                    <li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
                                                    <li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
                                                </ul>
                                            </div>
                                            <div class="tab_panel_section">
                                                <div class="tab_panel_subtitle">What is the target audience?</div>
                                                <div class="tab_panel_text">
                                                    <p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                                </div>
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
                                            <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
                                            <div class="feature_text ml-auto">2 hours</div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Participants:</span></div>
                                            <div class="feature_text ml-auto">35</div>
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
