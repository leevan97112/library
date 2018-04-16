<?php
$host= "localhost";
$username= "root";
$password= "";
$dbname= "user";
$dsn= "mysql:host=$host;dbname=$dbname";
$options= array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION &&
	PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>


