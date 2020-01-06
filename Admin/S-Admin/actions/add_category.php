<?php
    include_once("../../../Database/db_connection.php");

    $label_category = $_POST["label"];
    $description = $_POST["description"];
    $active = $_POST["active"];
    //$sql = "SELECT * FROM category WHERE label_category = '$label_category'";
    //$result = $conn->query($sql);
    $sql = "INSERT INTO `category`(`label_category`, `description`, `active`) 
            VALUES ('$label_category', '$description', '$active')";
    if($conn->query($sql)):
        header("Location: ../category_list.php?success=true"); 
    endif;

?>