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
$query = "SELECT * FROM `payment`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);
	
	echo "All financial records are as follows:- <br>";
	
	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "<br>Customer Name - " .
			$row["hname"]. "";
				
			echo "<br>Card Number - " .
			$row["cardnumber"]. "";
				
			echo "<br>Card - " .
			$row["card"]. "";

			echo "<br>Date - " .
			$row["date"]. "";

			echo "<br>cvv - " .
			$row["cvv"]. "";
			
			echo "<br>";
				
				
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
