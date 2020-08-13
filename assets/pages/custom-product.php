<!DOCTYPE html>
<html>
   <head>
      <title>Infinity Computers</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <!-- Top header bar -->
      <div class="header-topbar">
         <div class="header-topbar-links">
            <a href="../pages/aboutus.php">About Us</a>
            <a href="../pages/contactus.php">Contact</a>
            <a href="../pages/feedback.php">Feedback</a>
            <a href="../pages/policy.php">Policies</a>
            <a href="../pages/FAQs.php">FAQ</a>
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

                  <!-- <select class="form-control category-list" aria-required="true">
                     <option>Categories</option>
                     <option>Laptops</option>
                     <option>Laptops Refurbished</option>
                     <option>Laptop Accessories</option>
                     <option>Desktop Computers</option>
                     <option>Cameras</option>
                     <option>Casing</option>
                     <option>Cell Phones</option>
                     <option>Cooling Solutions</option>
                     <option>Gaming Consoles</option>
                     <option>Softwares</option>
                  </select> -->

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
                        <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=camera">Camera</a></li>
                        <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=headphone">Headphones</a></li>
                        <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=mobile">Mobile charager</a></li>
                     </ul>
                  </li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=laptop">LAPTOPS</a></li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=graphic">GRAPHIC CARDS</a>
                  </li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=monitor">MONITORS</a></li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=printer">PRINTERS</a></li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=harddisk">HDD</a></li>
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
      
      <!--Cards-->
      <div class="container">
         <div class="row products-container">
            
            <?php
               include("../cms/connection.php");
               error_reporting(0); 

               $product_query = $_GET['p'];

               $sql = "SELECT * FROM products 
                       where name LIKE '%$product_query%'";

                       // or description LIKE '%$product_query%'

               $data = mysqli_query($conn, $sql);
               $total_rows = mysqli_num_rows($data);

               $queyTime = mt_rand( 0.01, 10 ) / 1000;

               if ($total_rows > 0) {

                  echo "<div class='alert alert-warning'>
                           About $total_rows results found ($queyTime seconds) 
                        </div>";

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
                           <div class='card'>
                              <span class='badge badge-primary' style='background-color: #064f88;'>New</span>
                              <img class='card-img-top card-product-image' src='".$pic."' alt='Card image cap'>
                              <div class='card-body'>
                                 <h5 class='card-title'><strong>".$productTitle."</strong></h5>
                                 <p class='card-text'>".$productDescription."<strong>...</strong></p>
                                 <hr>
                                 <p class='product-price'><strong>RS.".$price."</strong></p>
                                 <a href='http://localhost/eCommerceProject/assets/pages/product.php?p=".$serialNo."' class='btn btn-primary btn-view-product'>VIEW DETAILS</a>
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
                           <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=laptop">Laptops</a></li>
                           <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=tablet">Tablets</a></li>
                           <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=printer">Printers</a></li>
                           <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=harddisk">Hard Drives</a></li>
                           <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=network">Network Products</a></li>
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
         <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
         </script>
   </body>
</html>