<?php 
    include_once("../../../Database/db_connection.php");
    session_start();
    session_destroy();
    session_unset();
    $_SESSION = [];
    header("Location: ../sign_in.php");         
?>