<?php
    include_once("../../../Database/db_connection.php");

    $id_category = $_GET["id"];
    
    //update category status
    $sql = "UPDATE `category` SET active = 0  WHERE id_category = '$id_category'";
    $result = mysqli_query($conn,$sql);
    if($result):
        header("Location: ../category_list.php?update=true");
        exit();
    endif;
    header("Location: ../category_list.php?update=false"); 

?>