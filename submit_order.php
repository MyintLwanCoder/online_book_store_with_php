<?php
 session_start();
 include("admin/connection/db.php");
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 mysqli_query($conn, "INSERT INTO orders
 (name, email, phone, address, status, created_at, updated_at)
 VALUES ('$name','$email','$phone','$address', 0, now(), now()) ");
 $order_id = mysqli_insert_id($conn);
 foreach($_SESSION['cart'] as $id => $qty) {
 mysqli_query($conn, "INSERT INTO order_items
 (order_id, book_id, qty) VALUES ($order_id,$id,$qty)
 ");
 }
 unset($_SESSION['cart']);
?>
<!doctype html>
<html>
<head>
 <title>Order Submitted</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
 <h1>Order Submitted</h1>

 <div class="msg">
 Your order has been submitted. We'll deliver the items soon.
 <a href="index.php" class="btn btn-info">Book Store Home</a>
 </div>
 <div class="footer">
 &copy; <?php echo date("Y") ?>. All right reserved.
 </div>
</body>
</html>