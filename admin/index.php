<?php 
include('include/nav.php');

?>

<div class="container">
 <div class="row">
  <div class="col-md-8">
  
  <div class="card">
   <div class="card-header"><h1>Admin Login</h1></div>
   <div class="card-body">
    <form action="login.php" method="post">
     <div class="form-group mb-3">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
     </div>
 <div class="form-group mb-3">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
     </div>
     <input type="submit" class="btn btn-primary" value="Admin Login">
    </form>
</form>

   </div>
  </div>
 </div>
</div>
</div>