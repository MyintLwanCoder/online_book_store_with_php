<?php 
   session_start();
   include('admin/connection/db.php');
   $cart = 0;

   if(isset($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $key => $qty){
         $cart += $qty;
      }
   }
   if(isset($_GET['cat'])){
    $cat_id = $_GET['cat'];
    $books = mysqli_query($conn, "SELECT * FROM books WHERE category_id = '$cat_id'");
   }else{
    $books = mysqli_query($conn, "SELECT * FROM books");
   }
   $cats = mysqli_query($conn, "SELECT * FROM categories");
?>
<?php include('include/head.php') ?>
<!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <?php include('include/header.php') ?>
      <!-- end header -->
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button">About </a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/boksing-gloves.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>
                      <ul>
                       <li><a href="view_cart.php">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="badge badge-pill badge-danger"><?php echo $cart; ?>  Books in your cart</span>
                        </a>
                       </li>
                       
                      </ul>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
               <div class="col-lg-2">
                  <div class="sport_product">
                  <b><a href="index.php" class="btn btn-primary">All Category</a></b><br>
                     <ul>
                        <?php while($row = mysqli_fetch_assoc($cats)) : ?>
                        <li><a href="index.php?cat=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
                         <?php endwhile; ?>
                     </ul>
                  </div>                 
               </div>
                <div class="col-lg-4">
                   <?php while($row = mysqli_fetch_assoc($books)) : ?>
                  <div class="sport_product">
                     <figure><img src="admin/images/<?php echo $row['cover'] ?> " height="150" alt="img"/></figure>

                    <h3> $<strong class="price_text"><?php echo $row['price'] ?></strong> <span><a href="add_to_cart.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Add To Cart</a></span></h3>
                     <h4><?php echo $row['title'] ?> <span><a href="book_detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Book Details</a></span></h4>
                  </div>
                  <?php endwhile; ?>
               </div>
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
      <!--about -->
      <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"> About</strong>  Us</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
                </div>
             </div>
         </div>
      </div>



      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/child-image.png" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end about -->
      <!--Our  Clients -->
      <div id="plant" class="section_Clients layout_padding padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2> Testmonial</h2>
                     <span style="text-align: center;">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="section Clients_2 layout_padding padding-top_0">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">

                        <div id="testimonial" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
    <li data-target="#testimonial" data-slide-to="1"></li>
    <li data-target="#testimonial" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="images/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="images/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="images/john-image.png" style="max-width: 100%;"></div>
                              <div class="john_text">JOHN DUE<span style="color: #fffcf4;">(ceo)</span></div>
                              <p class="lorem_ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                              <div class="icon_image"><img src="images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>       
   </div>
   </div>
   </div>
   </div>
   </div>
      </div>
   </div>
      <!-- end Our  Clients -->
      <!-- start Contact Us-->

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                    <h2><strong class="black"> Contact</strong>  Us</h2>
                     <span style="text-align: center;">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

     

      <!-- end Contact Us-->
      <!-- footer start-->
      

      <!-- Javascript files-->
     <?php include('include/footer.php') ?>