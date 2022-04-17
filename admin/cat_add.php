<?php 
// add new category
include('connection/db.php');
if(isset($_POST['name'])){
  $name = $_POST['name'];
  $remark = $_POST['remark'];
  $sql = "INSERT INTO categories (name, remark, created_at, updated_at) VALUES ('$name', '$remark', NOW(), NOW())";
  $result = $conn->query($sql);
  if($result){
    header('location: cat_list.php');
  }
}
?>