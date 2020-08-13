<!DOCTYPE html>
<html>
   <head>
      <title>Product | Infinity Computers</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/product.css">
      <link rel="stylesheet" href="../css/relatedItems.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
   </head>
   <body>

      <!-- Top header bar -->
      <div class="header-topbar">
         <div class="header-topbar-links">
            <a href="aboutus.php">About Us</a>
            <a href="contactus.php">Contact</a>
            <a href="feedback.php">Feedback</a>
            <a href="policy.php">Policies</a>
            <a href="FAQs.php">FAQ</a>
         </div>
      </div>

      <!-- Primary Header Navigation Bar -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="sitelogo">
               <a href="../../Index.php"><img src="../images/logo/sitelogo1.png" class="img-rounded" alt="logo" height="55"></a>
            </div>
            <form
               class="navbar-form navbar-right site-navbar" style="margin:0px;"
               action="custom-product.php?p=" method="GET">
               
               <div class="search_form">
                     <input 
                        type="text" id="search-input" 
                        name="p"
                        class="form-control product-search"
                        placeholder="Search">

                  <button type="submit" class="btn btn-primary btn-search">
                     <span class="glyphicon glyphicon-search"></span>
                  </button>

                  <!-- Shopping Cart Button -->
                  <a href="shopping-cart.php" class="btn btn-warning btn-cart">
                     <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                  </a>
               </div>
            </form>
         </div>
      </nav>

      <!-- Secondary Navigation Bar -->
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav">
                  <li><a href="../../index.php">HOME</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">PRODUCTS
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="custom-product.php?p=camera">Camera</a></li>
                        <li><a href="custom-product.php?p=headphone">handsfree</a></li>
                        <li><a href="custom-product.php?p=mobile">Mobile charager</a></li>
                     </ul>
                  </li>
                  <li><a href="custom-product.php?p=laptop">LAPTOPS</a></li>
                  <li><a href="custom-product.php?p=graphic">GRAPHIC CARDS</a></li>
                  <li><a href="custom-product.php?p=monitor">MONITORS</a></li>
                  <li><a href="custom-product.php?p=printer">PRINTERS</a></li>
                  <li><a href="custom-product.php?p=harddisk">HDD</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="#"  class="f_facebook gap"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                  <li><a href="#"  class="t_twitter gap"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                  <li><a href="#" class="fa fa-google"></a></li>
               </ul>
            </div>
         </div>
      </nav>

      <!-- Display product using top GET query -->
      <?php

         include("../cms/connection.php");
         error_reporting(0); 

         $productSerial = $_GET['p'];

         $sql = "SELECT * FROM products where serialNo='$productSerial'";
               $data = mysqli_query($conn, $sql);
               $total_rows = mysqli_num_rows($data);

               if ($total_rows > 0) {

                  while ($result = mysqli_fetch_assoc($data)) {
                     
                     $serialNo = $result['serialNo'];
                     $name = $result['name'];
                     $description = $result['description'];
                     $img = $result['img'];
                     $warranty = $result['warranty'];
                     $quantity = $result['quantity'];
                     $addedOn = $result['addedOn'];
                     $price = $result['price'];
                               
                     echo "<ul class='bcrum breadcrumb' style='margin-right: 11%;'>
                              <li class='breadcrumb-item'><a href='../../index.php'>Home</a></li>
                              <li class='breadcrumb-item'><a href='product.php'>Products</a></li>
                              <li class='breadcrumb-item active'>".$serialNo."</li>
                           </ul>
                           <div class='container product'>
                              <div class='row'>
                                 <div class='col-md-4'  style='margin-top: 20px;'>
                                    <img src='..\\..\\".$img."' alt='' style='width: 300px;box-shadow: 0px 2px 10px 2px rgba(0,0,0,0.1);
                                    border-bottom: 4px solid #337ab7;' >
                                 </div>

                                 <div class='col-md-6'>
                                    <h3><strong> ".$name."</strong></h3>
                                    <span class='label label-primary label-custom'>Best Selling</span>
                                    <p style='margin-top:10px;'><span style='color: lightslategray;'>Product Code: </span> ".$serialNo."</p>
                                    <p style='margin-top:10px;margin-bottom:0px;'><span style='color: lightslategray;'>Total Stock Available: </span> ".$quantity."</p>
                                    <p style='margin-top:10px;'><span style='color: lightslategray;'>Price updated on: </span> ".$addedOn."</p>
                                    <div>
                                       <hr style='margin-top:10px;margin-bottom:10px;'>
                                       <div class='row'>
                                          <div class='col-md-12'>
                                             <p class='tel'>This is a brand new product having ".$warranty. " years of International Warranty from us but Warranty claim due to accidental damage or electrical surge will not be entertained.</p>
                                          </div>
                                       </div>
                                       <div class='row'>
                                          <div class='col-md-12'>
                                             <p class='tel'>To order by telephone, <strong><a  href='tel:923450000000'>Please Call us at +92-3450000000</a></strong></p>
                                          </div>
                                       </div>
                                    </div>
                                    <ul class='nav nav-tabs'>
                                       <li class='active'><a style='border:none; background-color:rgb(234 234 234);' data-toggle='tab' href='#Description'>Description</a></li>
                                       <li><a style='border:none; background-color:rgb(234 234 234);' data-toggle='tab' href='#RatingsReviews'>Ratings & Reviews</a></li>
                                    </ul>
                                    <div class='tab-content'>
                                       <div id='Description' class='tab-pane fade in active'>
                                          ".$description."
                                       </div>
                                       <div id='RatingsReviews' class='tab-pane fade'>
                                          <p>No reviews and  rating currently</p>
                                          <button data-target='#exampleModal' data-toggle='modal' class='btn btn-primary' type='submit' value='".$serialNo."'>Write review</button>
                                       </div>
                                    </div>
                                 </div>

                                 <div class='col-md-2 cart-box'>
                                    <h3 class='stock-title'><strong>In Stock</strong></h3>
                                    <div class='cart-items'>
                                       <p style='color: gray'>Warranty: <strong>International</strong></p>
                                       <h3 class='Price'><strong>Rs. ".$price."</strong></h3>
                                       <hr>
                                       <small>Shipping & Delivery</small>
                                       </br>
                                       <strong>Rs. 200/unit</strong>
                                       </br>
                                       <form action='' method='POST'>
                                       <button type='submit' name='addProductToCart' value=".$serialNo." class='btn btn-white btn-md btn-primary-cart' data-toggle='modal' data-target='#cartModal' style='margin-top: 8px; margin-left: 0px;'>
                                          <span class='glyphicon glyphicon-shopping-cart'></span> Add to Cart
                                       </button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <hr>
                              <br>
                           </div>";
                  }
               }
      ?>

      <!-- Add Product to Cart -->
      <?php
         include("../cms/connection.php");
         error_reporting(0); 

         if (isset($_POST["addProductToCart"])) {
            $AddProductToCart =  $_GET["p"];
            $addedOn = date("d/m/Y");

            $sql = "INSERT INTO `orders` (`orderNo`, `pSerial`, `customer`, `phone`, `email`, `address`, `addedOn`) 
                    VALUES (NULL, '$AddProductToCart', 'Anonymous', 'NULL', 'NULL', 'NULL', '$addedOn')";

            if ($conn->query($sql) === TRUE) {
               echo '<script>location.replace("\shopping-cart.php")</script>';
            } else {
               echo "<h3 style='text-align:center;'>Product is already present in the cart!</h3><br><br>";
            }
         }
      ?>

      <!-- Review modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header bg-primary">
                        <h3 class="modal-title" id="exampleModalLabel" style="color: white;">Submit your review</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <form id="rev_form" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                           <h3>Review Form</h3>
                           <!-- Name input-->
                           <div class="form-group">
                              <label class="col-md-2 control-label">Name</label>
                              <div class="col-md-9">
                                 <input id="product-review-name" name="product-review-name" type="text" placeholder="Your name" class="form-control" required>
                              </div>
                           </div>
                           <!-- Email input-->
                           <div class="form-group">
                              <label  class="col-md-2 control-label">E-mail</label>
                              <div class="col-md-9">
                                 <input id="product-review-email" name="product-review-email" type="text" placeholder="Your email" class="form-control" required>
                              </div>
                           </div>
                           <!--Review title-->
                           <div class="form-group">
                              <label class="col-md-2 control-label">Review Title</label>
                              <div class="col-md-9">
                                 <input id="product-review-title" name="product-review-title" type="text" placeholder="Your product review title" class="form-control" required>
                              </div>
                           </div>
                           <!-- Message body -->
                           <div class="form-group">
                              <label class="col-md-2 control-label" for="message">Your Review</label>
                              <div class="col-md-9">
                                 <textarea class="form-control" id="product-review-message" name="product-review-message" placeholder="Please enter your Review here..." rows="5" required></textarea>
                              </div>
                           </div>
                           <div style="margin-left: 3%;">
                              <p>I will recommend this to a friend</p>
                              <br>
                              <input type="radio" id="product-recommend-yes" name="product-recommend" value="yes">
                              <label for="yes">YES</label>
                              <input type="radio" id="product-recommend-no" name="product-recommend" value="no">
                              <label for="no">NO</label><br>
                           </div>
                           </br>
                           <p id="review_submission_text" style="font-style: italic; color: black;"></p>
                        </div>
                        <!-- Form actions -->
                        <div class="modal-footer">
                           <button type="button" id="product-review-cancel" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                           <button type="submit" id="product-review-submit" name="product-review-submit" 
                                   value=<?php echo $_GET['p']; ?>
                                   class="btn btn-primary">Submit</button>
                        </div>
                     </form>
                     
                     <!-- Submit Product Review -->
                     <?php
                        include("../cms/connection.php");
                        
                        if(isset($_POST['product-review-submit'])){
                              
                              $serialproduct = $_POST['product-review-submit'];

                              $name=$_POST['product-review-name'];
                              $email=$_POST['product-review-email'];
                              $review=$_POST['product-review-message'];
                              $review_title=$_POST['product-review-title'];
                              $recommend=$_POST['product-recommend'];

                              $desc = $review_title.": ".$review.". ".$recommend.", I recommed this to friend";
                              $createdOn = date("d/m/Y"); 

                              $sql="INSERT INTO `reviews` (`id`, `productSerial`, `custName`, `phone`, `email`, `description`, `createdOn`) 
                                    VALUES (NULL, '$serialproduct', '$name', 'NULL', '$email', '$desc', '$createdOn');";
                              
                              
                              if ($conn->query($sql) === TRUE) { 
                              } else {
                                 echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                        }
                        ?>
                  </div>
               </div>
      </div>

      <div class="container">
         <span class="related-items-heading">
            Related Products
         </span>
         <div class="row">
            <div class="row">
                <div class="col-md-9 m-2">
                    <!-- <h2>Related Products</h2> -->
                    <br>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                        <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                            data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                data-slide="next"></a>
                    </div>
                </div>
            </div>
            <div id="carousel-example" class="carousel slide" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                           <?php
                           include("../cms/connection.php");
                           error_reporting(0); 

                           $sql = "SELECT * FROM `products` LIMIT 4;";

                           $data = mysqli_query($conn, $sql);
                           $total_rows = mysqli_num_rows($data);

                           //$queyTime = mt_rand( 0.01, 10 ) / 1000;

                           if ($total_rows > 0) {


                              while ($result = mysqli_fetch_assoc($data)) {
                                 
                                 $serialNo = $result['serialNo'];
                                 $addedOn = $result['addedOn'];
                                 $productTitle = $result['name'];
                                 $description = $result['description'];
                                 $productDescription = substr($description,0,96);
                                 $price = $result['price'];
                                 $img = $result['img'];

                                 $pic = '../../'.$img;

                                 echo "
                                 <div class='col-sm-3'>
                                 <div class='col-item'>
                                     <div class='photo'>
                                         <img src='".$pic."' class='img-responsive' alt='a' />
                                     </div>
                                     <div class='info'>
                                         <div class='row'>
                                             <div class='price col-md-6'>
                                                 <h5>".$productTitle."</h5>
                                                 <h5 class='price-text-color'>RS. ".$price."</h5>
                                             </div>
                                             
                                         </div>
                                         <div class='separator clear-left'>
                                         .
                                         
                                             <p class='btn-details'>
                                                 <a style='color:black;' href='http://localhost/eCommerceProject/assets/pages/product.php?p=".$serialNo."'><i class='fa fa-list'></i><a href='http://localhost/eCommerceProject/assets/pages/product.php?p=".$serialNo."' class='hidden-sm'>More details</a></a></p>
                                         </div>
                                         <div class='clearfix'>
                                         </div>
                                     </div>
                                 </div>
                              </div>";
                              
                              }
                           } else {
                              echo "<div class='alert alert-info'>
                                       <strong>Attention: </strong> 
                                       The product you are looking for is not available at this moment.
                                       Please visit this page later or you can request us to provide
                                       this product at any time soon.
                                    </div>
                                    <div style='margin-top:20%'>.
                                    </div>";
                           }
                           ?>
                            
                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <!-- SIGNUP NEWSLETTER FORM  -->
      <div class="container-fluid">
         <div class="row footer-top">
            <form class="form-inline" action="policy.php" method="post">
               <label class="text-Subscribe">SIGN UP FOR NEWSLETTER  </label>
               <div class="form-group">
                  <input type="text" id="newsletter_name" name="newsletter-name" class="form-control" placeholder="Name">
               </div>
               <div class="form-group">
                  <input type="email" id="newsletter_email" name="newsletter-email" class="form-control" placeholder="Email">
               </div>
               <button type="submit" id="btn_newsletter" name="btn_newsletter" class="btn btn-success">SUBSCRIBE</button>
               <p style="color: white; font-style: italic; text-align: center;" id="subscription_sucess"></p>
            </form>

            <?php
            include("../cms/connection.php");
            if(isset($_POST['btn_newsletter'])){
               $name=$_POST['newsletter-name'];
               $email=$_POST['newsletter-email'];
               $sql="INSERT INTO `signup_newsletter` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email');";
               if ($conn->query($sql) === TRUE) {
                  echo "<script>console.log('New record created successfully')</script>";
                  unset ($name);
                  unset ($email);
                  } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  //mysqli_close($conn);
            }
            else{
               echo "error".$conn->error;
            }
            mysqli_close($conn);
            //header('Location: http://localhost/eCommerceProject/assets/pages/policy.php');

            ?>
         </div>
      </div>

      <!-- Primary Footer -->
      <div class="footer">
         <div class="container">
            <div class="row" style="padding: 30px 0;">
               <div class="col-lg-3 footer-logo">
                  <img src="../images/logo/sitelogo1.png" id="footer1_imgLogo" style="width: 100%; padding-bottom: 20px;" alt="Computer Zone">
                  <div id="footer1_divFooterContent" class="footer-content">Welcome to Infinity Computers. We sell Computer, electronic gadgets in Pakistan. Buy Dell, Lenovo, HP, Acer laptops at best prices in Pakistan.</div>
               </div>
               <div class="col-lg-9">
                  <div id="footer1_divFooterMenu">
                     <div class="col-lg-3">
                        <h3>Products</h3>
                        <ul class="list-unstyled">
                           <li><a href="custom-product.php?p=laptop">Laptops</a></li>
                           <li><a href="custom-product.php?p=tablet">Tablets</a></li>
                           <li><a href="custom-product.php?p=printer">Printers</a></li>
                           <li><a href="custom-product.php?p=harddisk">Hard Drives</a></li>
                           <li><a href="custom-product.php?p=network">Network Products</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-3">
                        <h3>Account</h3>
                        <ul class="list-unstyled">
                           <li><a href="signup.php">Sign Up</a></li>
                           <li><a href="signIn.php">My Account</a></li>
                           <li><a href="shopping-cart.php">Shopping Cart</a></li>
                           <li><a href="shopping-cart.php">Order History</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-3">
                        <h3>Corporate</h3>
                        <ul class="list-unstyled">
                           <li><a href="aboutus.php">About Us</a></li>
                           <li><a href="contactus.php">Contact</a></li>
                           <li><a href="FAQs.php">FAQs</a></li>
                           <li><a href="policy.php">Policies</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-3">
                        <h3> Contact </h3>
                        <ul class="contactBox list-unstyled">
                           <li><i class="fa fa-map-marker"></i><a class="inline"> Rawalpindi, Pakistan</a>
                           </li>
                           <li><i class="fa fa-phone"></i><a class="inline"> +92-3450000000</a></li>
                           <li><i class="fa fa-envelope-o"></i><a class="inline" href="emailto:info@infinityComputers.com.pk"> info@infinity.com.pk</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Bottom Footer -->
      <div class="footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12 col-xs-12">
                  <div class="small text-center">
                     <p>Copyright © Infinity Computers 2020. All rights reserved.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 col-xs-12 paymentMethodImg">
                  <div class="center-block">
                     <img height="25" class="pull-right" src="../images/icons/visa_card.png" alt="img" style="margin-right: 5px;">
                     <img height="25" class="pull-right" src="../images/icons/paypal.png" alt="img" style="margin-right: 5px;"> 
                     <img height="25" class="pull-right" src="../images/icons/american_express_card.png" alt="img" style="margin-right: 5px;"> 
                     <img height="25" class="pull-right" src="../images/icons/discover_network_card.png" alt="img" style="margin-right: 5px;"> 
                     <img height="25" class="pull-right" src="../images/icons/master_card.png" alt="img" style="margin-right: 5px;"> 
                     <img height="25" class="pull-right" src="../images/icons/google_wallet.png" alt="img" style="margin-right: 5px;">
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 col-xs-12">
                  <div class="small text-center">
                     <p>Designed & developed by <strong>Ameen</strong> and <strong>Haseeb</strong>.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- <script src="../js/main.js"></script> -->
   </body>
</html>