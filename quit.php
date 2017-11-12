<!DOCTYPE html>
<html>
<head>
<title>Freedom</title>

<?php
$name = $_POST['UserName'];

// Defines the servername, username, password and database name.
$servername = "localhost";
$username = "hack17";
$password = "RY3A%NFyZtYag*PV";
$dbname = "hackdb";

// Create connection to mysql database.
$conn = new mysqli($servername, $username, $password, $dbname);

// Checks the connection and gives an error if it fails.
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
} 

// Gets all the data from the users table of the database.
// The query for the database.
$sqlRemove = "DELETE FROM users WHERE UserName='$name';";

// Querys the database.
mysqli_query($conn, $sqlRemove) or die("Q Error");
?>
<body>
<h1>Welcome to Freedom!</h1>
</body>
</html>
