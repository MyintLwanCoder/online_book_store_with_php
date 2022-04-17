<?php 
include('connection/auth.php');
include('include/nav.php');
include('connection/db.php');

// book edit
// if(isset($_GET['id'])){
//   $id = $_GET['id'];
//   $result = mysqli_query($conn, "SELECT * FROM book WHERE id = $id");
//   $row = $result->fetch_assoc();
// }
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT books.*, categories.name FROM books LEFT JOIN categories ON books.category_id = categories.id WHERE books.id = $id");
$row = $result->fetch_assoc();

?>

<div class="container">
 <div class="row">
  <div class="col-md-8">
   <h1>Edit Book <span><a href="book_list.php" class="btn btn-warning">Back</a></span></h1>
  
  <div class="card">
      <div class="card-header"><h1>Update Book</h1></div>
   <div class="card-body">
    <form action="book_update.php" method="post" enctype="multipart/form-data">
     <div class="mb-3">
      <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row['id'] ?>">
     </div>

     <div class="mb-3">
      <label for="title">Book Title</label>
      <input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title'] ?>">
     </div>

     <div class="mb-3">
      <label for="author">Book Author</label>
      <input type="text" name="author" class="form-control" id="author" value="<?php echo $row['author'] ?>">
     </div>
     <div class="mb-3">
      <label for="summary">Book description</label>
      <textarea name="summary" class="form-control" id="summary" rows="3"><?php echo $row['summary'] ?></textarea>
     </div>

     <div class="mb-3">
      <label for="price">Book Price</label>
      <input type="text" name="price" class="form-control" id="price" value="<?php echo $row['price'] ?>">
     </div>

     <div class="mb-3">
      <label for="author">Book Category</label>
      <select name="category_id" class="form-select">
       <?php 
       //$result = mysqli_query($conn, "SELECT id, name FROM categories");
       $categories = mysqli_query($conn, "SELECT id, name FROM categories");
       while($cat = mysqli_fetch_assoc($categories)): ?>
       <option value="<?php echo $cat['id'] ?>"
 <?php if($cat['id'] == $row['category_id']) echo "selected" ?> >
 <?php echo $cat['name'] ?>
 </option>
 <?php endwhile; ?>
     </div>
     <div class="input-group mb-3">
         <label for="">Book</label>
     </div>
     <div class="mb-3">
      <label for="qty">Book QTY</label>
      <input type="text" name="qty" class="form-control" id="qty" value="<?php echo $row['qty'] ?>">
     </div>
     <div class="mb-3">
      <img src="images/<?php echo $row['cover'] ?>" alt="" height="150">
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