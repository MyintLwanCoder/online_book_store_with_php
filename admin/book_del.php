<?php 
include('connection/db.php');
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id = $id";
mysqli_query($conn, $sql);
header('location: book_list.php');
?>