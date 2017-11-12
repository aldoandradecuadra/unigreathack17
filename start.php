<!DOCTYPE html>
<html>
<head>
<title>Freedom</title>
<link rel="stylesheet" href="start-style.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style> 
input[type=text]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
}

label
{
  font-family: "Courier New "Courier, monospace;
}

select
{
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}

form
{
  margin: auto;
  width: 50%;
  padding: 10px;
}
</style>

</head>
<body>

<?php
if ($_GET['inUse'])
{
  echo "<script type='text/javascript'>alert('That name has already been taken. Please choose another name.');</script>";
}
?>

<form action="checkNameNotInUse.php" method="post">
  <label for="fname">Name:</label>
  <br>
  <input type="text" id="fname" name="fname" value="">
  <br><br>
  <label for="fname">VR Scene:</label>
  <br>
  <select id="vr_scene" name="vr_scene">
    <option value="bb">Beautuful Beach</option>
    <option value="ff">Fantastical Forest</option>
  </select>
  <br><br>
   <label for="fname">Voice Type:</label>
  <br>
  <select id="voice_type" name="voice_type">
    <option value="male">UK English Male</option>
    <option value="female">UK English Female</option>
  </select>
  <input type="submit" name="submit" value="Submit">
</form>

</script>

</body>

</html>
