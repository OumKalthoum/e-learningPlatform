<?php
	// Create connection"dbel"
	$conn = new mysqli("localhost", "root", "", "db_elearning");
	// Check connection
	if ($conn->connect_error) {
	    echo "error 404 not found";
	}

?>  


