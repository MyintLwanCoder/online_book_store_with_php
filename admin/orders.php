<?php 
include('connection/auth.php');
include('include/nav.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-8">
  
  <div class="card">
   <div class="card-header"><h1>Orders Status</h1></div>
   <div class="card-body">
   <?php
 include("connection/db.php");
 $orders = mysqli_query($conn, "SELECT * FROM orders");
?>
    <ul class="orders">
 <?php while($order = mysqli_fetch_assoc($orders)): ?>
 <?php if($order['status']): ?>
  <!-- deliveried order item finished class -->
 <li class="alert alert-primary"> 
 <?php else: ?>
 <li>
 <?php endif; ?>
 <div class="container">
 <b><?php echo $order['name'] ?></b>
 <i><?php echo $order['email'] ?></i>
 <span><?php echo $order['phone'] ?></span>
 <p><?php echo $order['address'] ?></p>
 <?php if($order['status']): ?>
 * <a href="orders_status.php?id=<?php echo $order['id'] ?>&status=0">
 Undo</a>
 <?php else: ?>
 * <a href="orders_status.php?id=<?php echo $order['id'] ?>&status=1">
 Mark as Delivered</a>
 <?php endif; ?>
 </div>
 <div class="items">
 <?php
 $order_id = $order['id'];
 $items = mysqli_query($conn, "SELECT order_items.*, books.title
 FROM order_items LEFT JOIN books ON order_items.book_id = books.id
 WHERE order_items.order_id = $order_id
 ");
 while($item = mysqli_fetch_assoc($items)):
 ?>
 <b>
 <a href="../book-detail.php?id=<?php echo $item['book_id'] ?>">
 <?php echo $item['title'] ?>
 </a>
 (<?php echo $item['qty'] ?>)
 </b>
 <?php endwhile; ?>
 </div>
 </li>
 <?php endwhile; ?>
</ul>

   </div>
  </div>
 </div>
</div>
</div>