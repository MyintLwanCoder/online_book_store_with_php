<?php 

include('connection/auth.php');
include('connection/db.php');
// insert into book

$title = $_POST['title'];
$author = $_POST['author'];
$summary = $_POST['summary'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];
$qty = $_POST['qty'];
$cover = $_FILES['cover']['name'];
$cover_tmp = $_FILES['cover']['tmp_name'];

if($cover){
    move_uploaded_file($cover_tmp, "images/$cover");
}
$sql = "INSERT INTO books (title, author, summary, price, category_id, qty, cover, created_at, updated_at) VALUES ('$title', '$author', '$summary', '$price', '$category_id', '$qty', '$cover', NOW(), NOW())";
mysqli_query($conn, $sql);
header('location: book_list.php');
