<?php
// Connect to database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "javascript";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$description = $_POST['description'];
	$interests = $_POST['interests'];
	$skills = $_POST['skills'];}
	

	// Save data to database
	$sql = "INSERT INTO profiles (name, email, description, interests, skills) VALUES ('$name', '$email', '$description', '$interests', '$skills')";
	
	if (mysqli_query($conn, $sql)) {
		echo "Data saved successfully.";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);}




?>




	
