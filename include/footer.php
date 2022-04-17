  <div class="contact_us_2 layout_padding paddind_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="soc_text">soC</div>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">
                     <form action="/action_page.php">
                        <div class="form-group">
                           <input type="text" class="form-control form-control-sm" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Phone" name="Phone">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Massage" name="text3">
                        </div>
                         <div class="submit_btn">
                            <button type="submit" class="btn btn-primary" style="background: #081b30; color: #fff; padding: 11px;">Send</button>
                         </div>
                      </form>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="contact_us_3 layout_padding">
            <div class="row">
               <div class="col-md-4">
                  <h1 style="color: #ffffff; ">Newsletter</h1>
                  <p class="long_text">It is a long established fact that a reader will be distracted  a</p>
               </div>
               <div class="col-md-8">
                  <div class="email_text">
                     <div class="input-group mb-3">
                        <input style="border-bottom-left-radius: 20px !important; border-top-left-radius: 20px !important;" type="text" class="form-control" placeholder="Enter your email">
                     <div class="input-group-append">
                        <button style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; color: #fff; padding-bottom: 10px; padding-top: 10px;" class="btn btn-primary" type="Subscribe">Subscribe</button>  
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            </div>
         </div>
      </div>

      
    <div id="footer" class="Address layout_padding">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
               <div class="titlepage">
                  <div class="main">
                     <h1 class="address_text">Address</h1>
                  </div>
               </div>
             </div>
          </div>
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/map-icon.png" /></span>
                          <span style="margin-top: 10px;">No.123 Chalingt Gates, Supper market New York</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/phone-icon.png" /></span>
                          <span style="margin-top: 21px;">( +71 7986543234 )</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/email-icon.png" /></span>
                          <span style="margin-top: 21px;">demo@gmail.com</span></div>
                     </div>
                     </div> 
                  </div>
               </div>
                  <?php include('include/nav.php') ?>
       </div>
    </div>
 <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© <?php echo date('Y') ?> All Rights Reserved. Design by<a href="https://html.design/"> <strong>IT Empirer</strong> | <i>Dhammavira IT Group</i></a></p>
         </div>
      </div>
 <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>