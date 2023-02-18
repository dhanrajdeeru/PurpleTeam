<?php

session_start();
$user_id = $_SESSION['user_id'];

$id = $_POST['second'];

$out = shell_exec('/var/www/html/T1003_002.sh');
echo $out;
?>
