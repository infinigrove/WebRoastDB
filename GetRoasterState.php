<html>
 <head>
  <title>Roaster Status</title>
 </head>
 <body>
<?php

include('config.php');

$command = escapeshellcmd($cmds_path . 'Get_Roaster_State.py');
$output = shell_exec($command);
$cur_temp = substr($output, 0, 3);
$cur_state = substr($output, 3);
echo "<center>Temperature <b>" . $cur_temp . "</b> Status <b>" . $cur_state . "</b></center>"

?>

<script type="text/javascript">
  var timeout = setTimeout("location.reload(true);",2000);
  function resetTimeout() {
    clearTimeout(timeout);
    timeout = setTimeout("location.reload(true);",2000);
  }
</script>
 </body>
</html>
