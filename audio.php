<!DOCTYPE html>
<html>
<head>
<title>Freedom</title>

<?php
echo "<script type='text/javascript'>var VRScene = $_GET['VRScene']; var VoiceType = $_GET['VoiceType'];</script>";
?>

<script>
function 
if (VRScene == 'Beautiful Beach')
{
  var text = beautifulBeachText;
}
else if (VRScene == 'Fantastical Forest')
{
  var text = fantasticalForestText;
}

responsiveVoice.speak(text, voiceMale);
</script>

</head>
<body>
<h1>Welcome to Freedom!</h1>
</body>
</html>
