<?php
	session_start();
    include_once("../../../Database/db_connection.php");

    if(isset($_GET["btn_sing_in"])){
            $email = $_GET["email"];
            $pswd = sha1($_GET["password"]);

            $sql = "SELECT * from `account` WHERE email = '$email' AND password = '$pswd' AND active = 1 AND type = 'S'" ;
            $select = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $row = mysqli_num_rows($select);
            $account_row = mysqli_fetch_assoc($select);
		    if($row > 0){
		    	// Set session variables
				$_SESSION["id_account"] = $account_row['id_account'];
				$_SESSION["connected"] = "connected";
		    	header('Location: ../../index.php');
			}
		    else{
		    	header('Location: ../sign_in.php?error=true2');
		    }
    }
    else{
    	header('Location: ../sign_in.php?error=true1');
    }
?>