<?php 
    include_once("../../../Database/db_connection.php");
    session_destroy();
    header("Location: ../sign_in.php");         
?>