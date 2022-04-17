<?php 
// connect to database 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'store';
$conn = new mysqli($host, $user, $pass, $db) or die($conn->error);
?>