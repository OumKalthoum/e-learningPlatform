<?php
    include_once("../../../Database/db_connection.php");

    $id_account = $_GET["id"];
    
    //update category status
    $sql = "UPDATE `account` SET active = 0  WHERE id_account = '$id_account'";
    $result = mysqli_query($conn,$sql);
    if($result):
        header("Location: ../student_list.php?update=true");
        exit();
    endif;
    header("Location: ../student_list.php?update=false"); 

?>