<?php 
include('connection/db.php');
 $id = $_POST['id'];
 $title = $_POST['title'];
 $author = $_POST['author'];
 $summary = $_POST['summary'];
 $price = $_POST['price'];
 $category_id = $_POST['category_id'];
$qty = $_POST['qty'];
 $cover = $_FILES['cover']['name'];
 $tmp = $_FILES['cover']['tmp_name'];
if($cover) {
 move_uploaded_file($tmp, "images/$cover");
 $sql = "UPDATE books SET title='$title', author='$author',
 summary='$summary', price='$price', category_id='$category_id',
 cover='$cover', qty ='$qty', updated_at=now() WHERE id = $id";
 } else {
 $sql = "UPDATE books SET title='$title', author='$author',
 summary='$summary', price='$price', category_id='$category_id', qty = '$qty',
 updated_at=now() WHERE id = $id";
 }
 mysqli_query($conn, $sql);
 header("location: book_list.php");