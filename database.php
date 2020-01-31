<?php
$user = "root";
$password = "";

$conn = new PDO('mysql:host=localhost;dbname=cyberflux', $user, $password);

if ($conn) {
	echo "success";
}else{
	echo "non";
}