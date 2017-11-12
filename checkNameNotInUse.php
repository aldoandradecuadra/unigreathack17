<!DOCTYPE html>
<html>
<head>
<title>Freedom</title>

<?php
$name = $_POST['fname'];

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
$query = "SELECT UserName FROM users WHERE UserName='$name';";

// Querys the database.
mysqli_query($conn, $query) or die("Q Error");

// The result of the database query.
$result = mysqli_query($conn, $query);

// An array of the result of the database query.
$row = mysqli_fetch_array($result, MYSQLI_NUM);

// Checks if the user's entered name has been taken.
if (!empty($row[0]))
{
  $inUse = true;
  header("Location: start.php?inUse=$inUse");
}
else
{
  $VRScene = $_POST['vr_scene'];
  $VoiceType = $_POST['voice_type'];
  $sqlUpdate = "INSERT INTO users(UserName, VRScene, VoiceType) VALUES('$name', '$VRScene', '$VoiceType');";
  mysqli_query($conn, $sqlUpdate) or die("Q Error");
  header("Location: audio.php?UserName=$name");
}

//print_r($_POST);
?>
<body>
<h1>Welcome to Freedom!</h1>
</body>
</html>
