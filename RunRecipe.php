<html>
 <head>
  <title>Run Recipe Control</title>
 </head>
 <body>
<?php

include('config.php');

if($_POST['formSubmit'] == "Run Recipe")
{
  $errorMessage = "";
 
  if(!empty($_POST['roastID'])) 
  {
    $varRoastID = $_POST['roastID'];
    $command = escapeshellcmd($cmds_path . 'Roaster_Run_Recipe.py '. $varRoastID);
    $output = shell_exec($command);
    echo $output;
  } 
 
}

?>

<form action="RunRecipe.php" method="post">
    Select Roast to run:
    <select name="roastID">
<?php
      $i = 0;
      $getRoastRecipesQuery = "SELECT * FROM recipe_master";
      $getRoastRecipesResult = $connection->query($getRoastRecipesQuery);
      while ( $row = $getRoastRecipesResult->fetch_object() ) {
         echo "<option value = '" . $row->id ."'>" . $row->name . "</option>";
      }
?>
    </select>
    <input type="submit" name="formSubmit" value="Run Recipe">
</form>

 </body>
</html>
