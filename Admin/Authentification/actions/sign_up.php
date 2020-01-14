<?php 
    include_once("../../../Database/db_connection.php");
 
    $name = $_POST["full_name"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $confpswd = $_POST["re-password"];
    $date = date("Y-m-d");

    if($pswd == $confpswd){
        $pswd = sha1($pswd);
        $sql = "INSERT INTO account (full_name, email, password , date, type)
        VALUES ('$name', '$email', '$pswd', '$date', 'P')";
        
        $insert = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        if ($insert) {
            header("Location: ../sign_in.php"); 
        }

    }else{
        header("Location: ../sign_up.php?error=true"); 
       
    }
?>