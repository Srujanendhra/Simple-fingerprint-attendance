<?php
	//Connect to database
    $servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "";
    
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Create database
	$sql = "CREATE DATABASE Finger_Attendance";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . $conn->error;
	}

	echo "<br>";

	$dbname = "Finger_Attendance";
    
	$conn = new mysqli($servername, $username, $password, $dbname);

	// sql to create table
	$sql = "CREATE TABLE IF NOT EXISTS `Attendance` (
			`SNo.` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`Name` varchar(30) NOT NULL,
			`Finger_ID` int(11) NOT NULL,
			`Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			`Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	if ($conn->query($sql) === TRUE) {
	    echo "Table users created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	}
		
	$conn->close();
?>
