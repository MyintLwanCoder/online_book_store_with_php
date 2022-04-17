<?php 
// category delete
include('connection/db.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "DELETE FROM categories WHERE id = $id";
  $result = $conn->query($sql);
  if($result){
    header('location: cat_list.php');
  }
}
?>