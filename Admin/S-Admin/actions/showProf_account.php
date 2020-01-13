<?php
    include_once("../../../Database/db_connection.php");

    $id_account = $_GET["id"];
    
    //update account status
    $sql = "UPDATE `account` SET active = 1  WHERE id_account = '$id_account'";
    $result = mysqli_query($conn,$sql);
    if($result):
        header("Location: ../professor_list.php?update=true");
        exit();
    endif;
    header("Location: ../professor_list.php?update=false"); 

?>