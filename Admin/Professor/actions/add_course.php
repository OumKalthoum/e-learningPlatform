<?php
    include_once("../../../Database/db_connection.php");

    $name = $_POST["name"];
    $description = addslashes($_POST["description"]);
    $syllabus = addslashes(htmlspecialchars($_POST["syllabus"]));
    $id_prof = $_POST["id_prof"];
    $image = $_FILES["image"]["name"];
    $category = $_POST["category"];
    $lunched = $_POST["lunched"];
    $nb_chapters = $_POST["nb_chapters"];
    $today = date("Y-m-d");
    //path to store the uploaded image & videos
    $image_path = "../../images/".basename($image);

    //move uploaded files to folders
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)){
        $sql = "INSERT INTO `course`(`name`, `description`, `syllabus`, `id_prof`,                 `image_course`, `id_category`, `lunched`, `release_date`)
            VALUES ('$name', '$description', '$syllabus', '$id_prof', '$image', '$category', '$lunched', '$today')";
        $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
        if($result):
        
             //Get id_question
            $get_course = "SELECT * FROM `course` WHERE id_course = (SELECT MAX(id_course) FROM `course`)";
            $course_result = mysqli_query($conn,$get_course)or die(mysqli_error($conn));
            $course_row = mysqli_fetch_assoc($course_result);
            $id_course = $course_row['id_course'];
            header("Location: ../add_chapter.php?&id=$id_course&nb=$nb_chapters");
        
            exit();
        endif;

    }
    die( move_uploaded_file($_FILES["image"]["tmp_name"], $image_path));
    header("Location: ../course_list.php?success=false");

?>