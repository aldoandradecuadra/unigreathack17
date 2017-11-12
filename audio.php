<!DOCTYPE html>
<html>
<head>
<title>Freedom</title>
<script src='https://code.responsivevoice.org/responsivevoice.js' type="text/javascript"></script>

<style>
input.button
{
  background-color: #D3D3D3;
  color: black;
  font-size: 20px;
  border: 2px solid #D3D3D3;
  border-radius: 4px;
}
</style>

<script>
var beautifulBeachText = "Welcome to the beautiful beach. Relax. Take in the scenery.";
var fantasticalForestText = "Welcome to the fantastical forest! Relax. Take in the scenery";
</script>

<?php
$name = $_GET['UserName'];

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
$query = "SELECT VRScene, VoiceType FROM users WHERE UserName='$name';";

// Querys the database.
mysqli_query($conn, $query) or die("Q Error");

// The result of the database query.
$result = mysqli_query($conn, $query);

// An array of the result of the database query.
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$vr_scene = $row['VRScene'];
$voice_type = $row['VoiceType'];

?>

<script type="text/javascript">
  function startAudio()
  {
    var name = "<?php echo $name; ?>";
    var vr_scene = "<?php echo $vr_scene; ?>";
    var voice_type = "<?php echo $voice_type; ?>";

    if (vr_scene == 'bb')
    {
      var text = beautifulBeachText // beautifulBeachText;
    }
    else if (vr_scene == 'ff')
    {
      var text = fantasticalForestText // fantasticalForestText;
    }

    responsiveVoice.speak(text, voice_type);
  }
</script>

<script type="text/javascript">
startAudio();
</script>

</head>
<body>
<h1>Welcome to Freedom!</h1>

<form action="quit.php" method="post">
  <input type="hidden" name="UserName" value="<?= $name ?>" >
  <input class="button" type="submit" name="quit" value="Quit">
</form>

</body>
</html>
