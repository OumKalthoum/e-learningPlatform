<?php
    include_once("../../../Database/db_connection.php");

    $label_category = $conn -> real_escape_string($_POST["label"]);
    $description = $conn -> real_escape_string($_POST["description"]);
    $active = $conn -> real_escape_string($_POST["active"]);

    //check if category already exists
    $duplicat = "SELECT * FROM category WHERE label_category = '$label_category'";
    $duplicat_result = mysqli_query($conn,$duplicat);
    
    if(mysqli_num_rows($duplicat_result) > 0):
        header("Location: ../add_category.php?success=false");
        exit();
    endif;

    //if category does not exist let's create it!
    $sql = "INSERT INTO `category`(`label_category`, `description`, `active`) 
            VALUES ('$label_category', '$description', '$active') ";
    $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($result):
        header("Location: ../category_list.php?success=true");
        exit();
    endif;
    header("Location: ../category_list.php?success=false"); 

?>