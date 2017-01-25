<html>
 <head>
  <title>Set Temperature Control</title>
 </head>
 <body>
<?php

include('config.php');

if($_POST['formSubmit'] == "Update Temp")
{
  $errorMessage = "";
 
  if(!empty($_POST['NewTemp'])) 
  {
    $varNewTemp = $_POST['NewTemp'];
    $command = escapeshellcmd($cmds_path . 'Roaster_Set_Temp.py '. $varNewTemp);
    $output = shell_exec($command);
    echo $output;
  } 
 
}

?>

<form action="SetTemperature.php" method="post">
    Set Roaster Temperature:
    <input type="text" name="NewTemp" maxlength="3" size="4">
    <input type="submit" name="formSubmit" value="Update Temp">
</form>
<center>(Range = 150 - 550)</center>

 </body>
</html>
