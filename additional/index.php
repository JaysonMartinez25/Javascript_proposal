<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

	th, {
 	 	border-bottom: 1px solid black;
		
	}
	td {
  		border: 1px solid black;
		padding:5px;
	}

</style>
<body>
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
	




		// Query the database
$sql = "SELECT * FROM profiles";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table>";
	echo "<thead><tr><th>Name</th><th>Email</th><th>Description</th><th>Interests</th><th>Skills</th></tr></thead>";
	echo "<tbody>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['description'] . "</td>";
		echo "<td>" . $row['interests'] . "</td>";
		echo "<td>" . $row['skills'] . "</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
} else {
	echo "No data found.";
}

// Close database connection
mysqli_close($conn);



?>




	

</body>
</html>