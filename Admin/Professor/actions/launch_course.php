<?php
    include_once("../../../Database/db_connection.php");
    $id_course = $_POST['id'];
    
    //update course status
    $sql = "UPDATE `course` SET lunched = '1'  WHERE id_course = '$id_course'";
    $result = mysqli_query($conn,$sql);
    if($result):
        header("Location: ../course_list.php?updated=true");
        exit();
    endif;
    header("Location: ../course_list.php?updated=false"); 

?>