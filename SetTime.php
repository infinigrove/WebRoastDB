<html>
 <head>
  <title>Set Time Control</title>
 </head>
 <body>
<?php

include('config.php');

if($_POST['formSubmit'] == "Update Timer")
{
  $errorMessage = "";
 
  if(!empty($_POST['NewTime'])) 
  {
    $varNewTime = $_POST['NewTime'];
    $command = escapeshellcmd($cmds_path . 'Roaster_Set_Time.py '. $varNewTime);
    $output = shell_exec($command);
    echo $output;
  } 
 
}

?>

<form action="SetTime.php" method="post">
    Set Roaster Time:
    <input type="text" name="NewTime" maxlength="4" size="5">
    <input type="submit" name="formSubmit" value="Update Timer">
</form>
<center>(Units in Seconds - Range = 1 - 1199)</center>

 </body>
</html>
