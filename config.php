<?php
    $host = 'localhost';
    $user = 'terminalroaster';
    $password = 'terminalroasterpasswd';
    $database = 'terminalroastDB';
    $connection = new mysqli($host, $user, $password, $database);
    if (mysqli_connect_errno()) {
        exit('Connect failed: '. mysqli_connect_error());
    }
    $cmds_path = '/home/roast/TerminalRoastDB/cmds/';
?>
