<?php
    include_once("../../../Database/db_connection.php");

    $id_category = $conn -> real_escape_string($_POST["id"]);
    $label_category = $conn -> real_escape_string($_POST["label"]);
    $description = $conn -> real_escape_string($_POST["description"]);
    $active = $conn -> real_escape_string($_POST["active"]);

    //check if no modification has been applied
    $duplicat = "SELECT * FROM category WHERE BINARY label_category = '$label_category' and description = '$description'  and active = '$active'";
    $duplicat_result = mysqli_query($conn,$duplicat);
    
    if(mysqli_num_rows($duplicat_result) > 0):
        header("Location: ../modify_category.php?id=$id_category&modify=false");
        exit();
    endif;

    //if not update category
    $sql = "UPDATE`category` SET `label_category`= '$label_category',  `description` = '$description', `active` ='$active' WHERE id_category = '$id_category'";
    $result = mysqli_query($conn,$sql) or die(mysqli_error());
    if($result):
        header("Location: ../category_list.php?modify=true");
        exit();
    endif;
    header("Location: ../category_list.php?modify=false"); 

?>