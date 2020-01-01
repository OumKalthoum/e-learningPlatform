<?php 
    include_once("../../../Database/db_connection.php");
 
    $email = $_POST["email"];
    $pswd = $_POST["password"];

    $sql = "SELECT * from account where email = '$email' and password = '$pswd' and type = 'S'" ;
    
    if ($conn->query($sql)) {
        echo "succes";
        header("Location: ../../index.php"); 
    }else{
        echo "not succes";

        header("Location: ../sign_in.php");       
    }
  
?>