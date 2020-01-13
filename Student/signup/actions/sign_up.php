<?php 
    include_once("../../../Database/db_connection.php");
 
    $name = $_POST["fullName"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $confpswd = $_POST["re-password"];
    $date = date("m.d.y");

    /*if($pswd != $confpswd){
        die( "<script>alert(\"Your passwords did not match.\")</script>");
        header("Location: ../sign_up.php");
        
    }else*/
    
    if($pswd == $confpswd){

        $sql = "INSERT INTO account (full_name, email, password , date, type, active)
        VALUES ('$name', '$email', '$pswd', '$date', 'S', 1)";

        if ($conn->query($sql)) {
            header("Location: ../sign_in.php"); 
        }

    }else{
        header("Location: ../sign_up.php"); 
       
    }
?>