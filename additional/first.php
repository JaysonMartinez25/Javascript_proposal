<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	table{
		border:5px;
	}
</style>
<body>
	<div class="container">
		<h1>My Profile</h1>
		<form action="db.php" method="post" enctype="multipart/form-data">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required>

			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>


			<label for="description">Description:</label>
			<textarea name="description" id="description" required></textarea>

			<label for="interests">Interests:</label>
			<input type="text" name="interests" id="interests">

			<label for="skills">Skills:</label>
			<input type="text" name="skills" id="skills">

			<button type="submit" name="submit">Save</button>
		</form>
	</div>
</body>
</html>
