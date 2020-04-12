<?php

$host='localhost';
$user='root';
$pass='';
$db='my_db';

$con=mysqli_connect($host,$user,$pass,$db)
OR die('Coudnt connect to database'. mysqli_connect_error());

?>
