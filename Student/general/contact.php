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
    <title>E-learning</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/contact.css">
    <link rel="stylesheet" type="text/css" href="../styles/contact_responsive.css">
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
                                        <div  class="login_button"><a href="signup/logout.php">Logout</a></div>
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
                                    <a href="index.html">
                                        <div class="logo_text">E-<span>learning</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="../course/course_list.php">Courses</a></li>
                                        <!--
									<li><a href="blog.html">Blog</a></li>
									<li><a href="#">Page</a></li>-->
                                        <li class="active"><a href="contact.php">Contact</a></li>
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
                    <li class="menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_mm"><a href="#">About</a></li>
                    <li class="menu_mm"><a href="#">Courses</a></li>
                    <li class="menu_mm"><a href="contact.html">Contact</a></li>
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
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact">

            <!-- Contact Map

		<div class="contact_map">

			 Google Map 
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map"></div>
					</div>
				</div>
			</div>

		</div>
	-->

            <!-- Contact Info -->

            <div class="contact_info_container">
                <div class="container">
                    <div class="row">

                        <!-- Contact Form -->
                        <div class="col-lg-6">
                            <div class="contact_form">
                                <div class="contact_info_title">Contact Form</div>
                                <form action="#" class="comment_form">
                                    <div>
                                        <div class="form_title">Name</div>
                                        <input type="text" class="comment_input" required="required">
                                    </div>
                                    <div>
                                        <div class="form_title">Email</div>
                                        <input type="text" class="comment_input" required="required">
                                    </div>
                                    <div>
                                        <div class="form_title">Message</div>
                                        <textarea class="comment_input comment_textarea" required="required"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="comment_button trans_200">submit now</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Contact Info 
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
							<div class="contact_info_text">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a distribution of letters.</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">New York Office</div>
								<ul class="location_list">
									<li>T8/480 Collins St, Melbourne VIC 3000, New York</li>
									<li>1-234-567-89011</li>
									<li>info.deercreative@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Australia Office</div>
								<ul class="location_list">
									<li>Forrest Ray, 191-103 Integer Rd, Corona Australia</li>
									<li>1-234-567-89011</li>
							
							</ul>
							</div>
						</div>
					</div>
						-->
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../includes/footer.html');?>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap4/popper.js"></script>
    <script src="../styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../plugins/easing/easing.js"></script>
    <script src="../plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="../plugins/marker_with_label/marker_with_label.js"></script>
    <script src="../js/contact.js"></script>
</body>

</html>
