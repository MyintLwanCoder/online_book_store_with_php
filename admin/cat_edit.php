<?php 
include('connection/auth.php');
include('include/nav.php');
// edit category
include('connection/db.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM categories WHERE id = $id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}

?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <h1>Edit Category</h1>
  </div>
  <div class="card">
   <div class="card-body">
    <form action="cat_update.php" method="post">
     <div class="mb-3">
      
      <input type="hidden" name="id" class="form-control" id="name" value="<?php echo $row['id'] ?>">
     </div>
     <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name'] ?>">
     </div>
     <div class="mb-3">
      <label for="remark">Category description</label>
      <textarea name="remark" class="form-control" id="remark" rows="3"><?php echo $row['remark'] ?></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
   </div>
  </div>
 </div>
</div>