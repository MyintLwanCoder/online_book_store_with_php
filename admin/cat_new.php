<?php 
include('connection/auth.php');

include('include/nav.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <h1>Add New Category <span><a href="cat_list.php" class="btn btn-warning">Back</a></span></h1>
  
  <div class="card">
   <div class="card-body">
    <form action="cat_add.php" method="post">
     <div class="mb-3">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category Name">
     </div>
     <div class="mb-3">
      <label for="remark">Category description</label>
      <textarea name="remark" class="form-control" id="remark" rows="3"></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
  </div>
 </div>
 </div>
</div>