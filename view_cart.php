<?php
 session_start();
 if(!isset($_SESSION['cart'])) {
 header("location: index.php");
 exit();
 }
 include("admin/connection/db.php");
?>
<!doctype html>
<html>
<head>
 <title>View Cart</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 <h1>View Cart</h1>
 <div class="sidebar">
 <ul class="cats">
 <li><a href="index.php" class="btn btn-primary">&laquo; Continue Shopping</a></li>
 <li><a href="clear_cart.php" class="btn btn-danger">&times; Clear Cart</a></li>
 </ul>
 </div>
 <div class="main">
 <table class="table">
 <tr>
 <th>Book Title</th>
 <th>Quantity</th>
 <th>Unit Price</th>
 <th>Price</th>
 </tr>
 <?php
 $total = 0;
 foreach($_SESSION['cart'] as $id => $qty):
 $result = mysqli_query($conn, "SELECT title, price FROM books WHERE id=$id");
 $row = mysqli_fetch_assoc($result);
 $total += $row['price'] * $qty;
 ?>
 <tr>
 <td><?php echo $row['title'] ?></td>
 <td><?php echo $qty ?></td>
 <td>$<?php echo $row['price'] ?></td>
 <td>$<?php echo $row['price'] * $qty ?></td>
 </tr>
 <?php endforeach; ?>
 <tr>
 <td colspan="3" align="right"><b>Total:</b></td>
 <td>$<?php echo $total; ?></td>
 </tr>
 </table>
 <div class="order-form">
 <h2>Order Now</h2>
 <form action="submit_order.php" method="post">
 <label for="name">Your Name</label>
 <input type="text" name="name" id="name">
 <label for="email">Email</label>
 <input type="text" name="email" id="email">
 <label for="phone">Phone</label>
 <input type="text" name="phone" id="phone">
 <label for="address">Address</label>
 <textarea name="address" id="address"></textarea>
 <br><br>
 <input type="submit" value="Submit Order">
 <a href="index.php">Continue Shopping</a>
 </form>
 </div>
 </div>
 <div class="footer">
 &copy; <?php echo date("Y") ?>. All right reserved.
 </div>
</body>
</html>