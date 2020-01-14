<?php
    include_once("../../../Database/db_connection.php");

    $id_course = $_GET["id"];
    
    //update category status
    $sql = "UPDATE `course` SET active = 0  WHERE id_course = '$id_course'";
    $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($result):
        header("Location: ../course_list.php?update=true");
        exit();
    endif;
    header("Location: ../course_list.php?update=false"); 

?>