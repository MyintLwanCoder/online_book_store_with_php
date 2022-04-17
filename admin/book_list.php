<?php 
include('connection/auth.php');
include('include/nav.php');
include('connection/db.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
  
  <div class="card">
   <div class="card-header"><h1>Book List <span><a href="book_new.php" class="btn btn-primary">Create Book</a></span></h1></div>
   <div class="card-body">
    <table class="table">
     <thead>
      <tr>
       <th>ID</th>
       <th>Book Title</th>
       <th>Author</th>
       <th>Category</th>
       <th>Price</th>
       <th>cover</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
      <?php 
      //$result = mysqli_query($conn, "SELECT * FROM book");
      $result = mysqli_query($conn, "SELECT books.*, categories.name FROM books LEFT JOIN categories ON books.category_id = categories.id ORDER BY books.created_at DESC");
      while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
       <td><?php echo $row['id'] ?></td>
       <td><?php echo $row['title'] ?></td>
       <td><?php echo $row['author'] ?></td>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['price'] ?></td> 
       <td>
        <img src="images/<?php echo $row['cover'] ?>"
          alt=""  class="img-fluid img-thumbnail" width="100px" height="100px">
       </td>
       <td>
        <a href="book_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
        <a href="book_del.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
       </td>
     <?php endwhile ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>
</div>