<?php 
    include_once("../../../Database/db_connection.php");
    session_start();
    $email = $_POST["email"];
    $pswd = sha1($_POST["password"]);
    
  //  $sql = "SELECT * from account where email = '$email' and password = '$pswd'";

    $res = mysqli_query($conn, "SELECT * from account WHERE email = '$email' and password = '$pswd' and active = '1'");
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        
        $_SESSION['id_account'] = $row['id_account'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['date'] = $row['date'];
        $_SESSION['active'] = $row['active'];
        if( $row["type"] == 'P'){
            header("Location: ../../Professor/index.php?s=".$_SESSION['active']);
        }else if( $row["type"] == 'A'){
            header("Location: ../../S-Admin/index.php");
        }
    }else{
        echo "not success";

        header("Location: ../sign_in.php?s=".$_SESSION['full_name']);       
    }
  
?>