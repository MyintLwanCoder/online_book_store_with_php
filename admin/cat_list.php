<?php 
include('connection/auth.php');
include('include/nav.php');
include('connection/db.php');
?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <h1>Category list <span><a href="cat_new.php" class="btn btn-info">Create New Category</a></span></h1>
  </div>
  <div class="card">
   <div class="card-body">
   <table class="table">
    <thead>
     <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Action</th>
     </tr>
    </thead>
    <tbody>
     <?php 
      $result = mysqli_query($conn, "SELECT * FROM categories");
      while($row = $result->fetch_assoc()): ?>
      <tr>
       <td><?php echo $row['id'] ?></td>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['remark'] ?></td>
       <td><?php echo date('F-d-Y', strtotime($row['created_at'])) ?></td>
       <td><?php echo date('F-j-Y', strtotime($row['updated_at'])) ?></td>
       <td>
        <a href="cat_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
        <a href="cat_del.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
       </td>
     <?php endwhile ?>
    </tbody>
   </table>
   </div>
  </div>
 </div>
</div>