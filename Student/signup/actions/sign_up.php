<?php 
    include_once("../../../Database/db_connection.php");
 
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $confpswd = $_POST["re-password"];
    $date = date("Y-m-d");

  
    if($pswd == $confpswd){
        $sql = "INSERT INTO account (full_name, email, password , date, type, active)
        VALUES ('$name', '$email', '$pswd', '$date', 'S', 1)";
        $insert = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($insert) {
            header("Location: ../sign_in.php"); 
        }

    }else{
        header("Location: ../sign_up.php"); 
       
    }
?>