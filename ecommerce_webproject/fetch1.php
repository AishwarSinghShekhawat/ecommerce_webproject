<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "login";

// CREATE CONNECTION
$conn = new mysqli($servername, $username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `users`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);
	
	echo "All the usernames in the database are as follows:-";
	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "<br>Username - " .
				$row["username"]. "";
				
				
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
