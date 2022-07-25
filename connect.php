<?php
$user = 'sql5508338';
$password = 'P7e7UNjBqm';
$db = 'sql5508338';
$host = 'sql5.freesqldatabase.com';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

?>
