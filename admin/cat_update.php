<?php
// upadate category
include('connection/db.php');

$id = $_POST['id'];
$name = $_POST['name'];
$remark = $_POST['remark'];
$sql = "UPDATE categories SET name = '$name', remark = '$remark', updated_at = NOW() WHERE id = $id";
$result = $conn->query($sql);
if($result){
  header('location: cat_list.php');
}else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>