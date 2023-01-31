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
$query = "SELECT * FROM `contact`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);
	
	echo "All the enquiries are as follows:-";
	
	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "<br>First Name - " .
				$row["fname"]. "";
				
			echo "<br>Last Name - " .
			$row["lname"]. "";
				
			echo "<br>Email - " .
			$row["email"]. "";

			echo "<br>Message - " .
			$row["text"]. "";
			
			echo "<br>";
				
				
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
