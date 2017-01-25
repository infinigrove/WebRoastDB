<html>
 <head>
  <title>Set Fan Control</title>
 </head>
 <body>
<?php

include('config.php');

if($_POST['formSubmit'] == "Update Fan Speed")
{
  $errorMessage = "";
 
  if(!empty($_POST['NewFan'])) 
  {
    $varNewFan = $_POST['NewFan'];
    $command = escapeshellcmd($cmds_path . 'Roaster_Set_Fan.py '. $varNewFan);
    $output = shell_exec($command);
    echo $output;
  } 
 
}

?>

<form action="SetFan.php" method="post">
    Set Roaster Fan Speed:
    <select name="NewFan">
    <option value="9">9</option>
    <option value="8">8</option>
    <option value="7">7</option>
    <option value="6">6</option>
    <option value="5">5</option>
    <option value="4">4</option>
    <option value="3">3</option>
    <option value="2">2</option>
    <option value="1">1</option>
    </select>
    <input type="submit" name="formSubmit" value="Update Fan Speed">
</form>

 </body>
</html>
