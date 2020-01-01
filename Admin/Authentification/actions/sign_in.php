<?php 
    include_once("../../../Database/db_connection.php");

    $email = $_POST["email"];
    $pswd = $_POST["password"];

  //  $sql = "SELECT * from account where email = '$email' and password = '$pswd'";

    $res = mysqli_query($conn, "SELECT * from account WHERE email = '$email' and password = '$pswd'");
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        if( $row["type"] == 'P'){
            header("Location: ../../Professor/index.php");
        }else if( $row["type"] == 'A'){
            header("Location: ../../S-Admin/index.php");
        }      
    }else{
        echo "not succes";

        header("Location: ../sign_in.php");       
    }
  
?>