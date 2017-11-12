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

<?php
$name = $_GET['UserName'];
echo "<script type='text/javascript'> var name = " . $name . ";</script>";
?>

<!--
<div>
  <object beautifulBeachText="resources/beautiful_beach.txt"></object>
  <object fantasticalForestText="resources/fantastical_forest.txt"></object>
</div>
-->

<script type="text/javascript">
  function startAudio()
  {
    if (name == 'bb')
    {
      var text = "This is bb." // beautifulBeachText;
    }
    else if (name == 'ff')
    {
      var text = "This is ff." // fantasticalForestText;
    }

    responsiveVoice.speak("", "UK English Male");
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
