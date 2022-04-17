<?php 
 session_start();
 $name = $_POST['name'];
 $password = $_POST['password'];
 if($name == "admin" and $password == "12345678") {
 $_SESSION['auth'] = true;
 header("location: book_list.php");
 } else {
 header("location: index.php");
 }
