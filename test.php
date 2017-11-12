<!DOCTYPE html>
<html>
<head>
<title>Stress Thing</title>
<?php
  echo "Hello world\n";
?>

<?php
error_reporting(E_ALL);

$servername = "localhost";
$username = "hack17";
$password = "RY3A%NFyZtYag*PV";
$dbname = "hackdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM users";
mysqli_query($conn, $query) or die("Q Error");
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
echo $row["Username"]
?>

</body>
</html>
<!--

$sql = "SELECT Username, VRChoice, VoiceChoice FROM users WHERE PersonNumber='1';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Username"]. "<br>VR Choice" . $row["VRChoice"]. "Voice Choice" . $row["VoiceChoice"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
-->
