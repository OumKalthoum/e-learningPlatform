<?php
    include_once("../../../Database/db_connection.php");

    $id_course = $_POST["id_course"];
    $titles = $_POST["title"];
    $descriptions = $_POST["description"];
    $tmp_videos = $_FILES["videos"]["tmp_name"];
    $videos = $_FILES["videos"]["name"];
    
    for ($i = 0; $i < count($titles); ++$i) {
        $title = $titles[$i];
        $description = $descriptions[$i];
        $video = $videos[$i];
        $tmp_video = $tmp_videos[$i];
        $video_path = "../videos/".basename($video);
        if(move_uploaded_file($tmp_video, $video_path)){
            $sql = "INSERT INTO `chapter`(`path_video`, `id_course`, `title_chapter`, `description_chapter`) 
            VALUES ('$video_path', '$id_course', '$title', '$description')";
            $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
            if(!$result):
                die('Somethig went wrong! please retry.');
                exit();
            endif;
        }
    }
    header("Location: ../add_exam.php?&id=$id_course");
    
?>