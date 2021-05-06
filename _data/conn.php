<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'wildsidedb';

$conn = mysqli_connect("$host", "$user", "$pw", "$db");

if (!$conn) {
	die('CONNECTION ERROR ' . mysqli_error($conn));
}

?>