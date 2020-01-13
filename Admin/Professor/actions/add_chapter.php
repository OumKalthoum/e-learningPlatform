<?php
    session_start();
    include_once("../../../Database/db_connection.php");

    $id_course = $_POST["id_course"];
    $titles = $conn -> real_escape_string($_POST["title"]);
    $descriptions = $conn -> real_escape_string($_POST["description"]);
    $tmp_videos = $conn -> real_escape_string($_FILES["videos"]["tmp_name"]);
    $videos = $conn -> real_escape_string($_FILES["videos"]["name"]);
    
    for ($i = 0; $i < count($titles); ++$i) {
        $title = $titles[$i];
        $description = $descriptions[$i];
        $video = $videos[$i];
        $tmp_video = $tmp_videos[$i];
        $video_path = "../../videos/".basename($video);
        $path = basename($video); //to help find the video and display it easily
        if(move_uploaded_file($tmp_video, $video_path)){
            $sql = "INSERT INTO `chapter`(`path_video`, `id_course`, `title_chapter`, `description_chapter`) 
            VALUES ('$path', '$id_course', '$title', '$description')";
            $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
            if(!$result):
                die('Somethig went wrong! please retry.');
                exit();
            endif;
        }
    }

    
    if(isset($_POST['from_menu'])){
        header("Location: ../course_list.php?chapter=true");
    }else header("Location: ../add_exam.php?&id=$id_course");
    
    
?>