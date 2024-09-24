<?php

$dbhost= "localhost";
$dbuser = "root";
$dbpass = "usbw";
$dbname = "electro_store";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn) die("</br>Failed to Connect!!".mysqli_connect_error());

?>
