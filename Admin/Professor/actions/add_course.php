<?php
    include_once("../../../Database/db_connection.php");

    $name = $_POST["name"];
    $description = $_POST["description"];
    $syllabus = htmlspecialchars($_POST["syllabus"]);
    $id_prof = $_POST["id_prof"];
    $image = $_FILES["image"]["name"];
    $category = $_POST["category"];
    $lunched = $_POST["lunched"];
    $today = date("Y-m-d");
    //path to store the uploaded image & videos
    $image_path = "../images/".basename($image);

    //move uploaded files to folders
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)){
        $sql = "INSERT INTO `course`(`name`, `description`, `syllabus`, `id_prof`,                 `image_course`, `id_category`, `lunched`, `release_date`)
            VALUES ('$name', '$description', '$syllabus', '$id_prof', '$image', '$category', '$lunched', '$today')";
        $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
        if($result):
            header("Location: ../course_list.php?success=true");
            exit();
        endif;

    }
    die( move_uploaded_file($_FILES["image"]["tmp_name"], $image_path));
    header("Location: ../course_list.php?success=faljse");

?>