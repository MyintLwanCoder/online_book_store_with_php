<?php 
include('connection/auth.php');
include('include/nav.php');
include('connection/db.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <h1>Add New Book <span><a href="book_list.php" class="btn btn-warning">Back</a></span></h1>
  
  <div class="card">
   <div class="card-body">
    <form action="book_add.php" method="post" enctype="multipart/form-data">
     <div class="mb-3">
      <label for="title">Book Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Enter Book Name">
     </div>

     <div class="mb-3">
      <label for="author">Book Author</label>
      <input type="text" name="author" class="form-control" id="author" placeholder="Enter Book Author Name">
     </div>
     <div class="mb-3">
      <label for="summary">Book description</label>
      <textarea name="summary" class="form-control" id="summary" rows="3"></textarea>
     </div>

     <div class="mb-3">
      <label for="price">Book Price</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="Enter Book Price">
     </div>

     <div class="mb-3">
      <label for="author">Book Category</label>
      <select name="category_id" class="form-select">
       <?php 
       $result = mysqli_query($conn, "SELECT id, name FROM categories");
       while($row = $result->fetch_assoc()): ?>
       <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
      <?php endwhile ?>
     </div>

     <div class="mb-3">
      <label for="qty">Book Quantity</label>
      <input type="text" name="qty" class="form-control" id="qty" placeholder="Enter Book Qty">
     </div>


     <div class="mb-3">
      <label for="cover">Book Cover</label>
      <input type="file" name="cover" class="form-control" id="cover" >
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
  </div>
 </div>
 </div>
</div>