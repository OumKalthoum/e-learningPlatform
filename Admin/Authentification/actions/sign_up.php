<?php 
    include_once("../../../Database/db_connection.php");
 
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $confpswd = $_POST["re-password"];
    $date = date("m.d.y");

    if($pswd == $confpswd){

        $sql = "INSERT INTO account (full_name, email, password , date, type)
        VALUES ('$name', '$email', '$pswd', '$date', 'P')";

        if ($conn->query($sql)) {
            header("Location: ../sign_in.php"); 
        }

    }else{
        header("Location: ../sign_up.php"); 
       
    }
?>