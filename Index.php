<!DOCTYPE html>
<html lang='en'>
   <head>
      <title>Infinity Computers | E-commerse site
      </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet"href="assets\css\style.css">
      <script
         src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script
         src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <!-- Top header bar -->
      <div class="header-topbar">
         <div class="header-topbar-links">
            <a href="assets\pages\aboutus.php">About Us</a>
            <a href="assets\pages\contactus.php">Contact</a>
            <a href="assets\pages\feedback.php">Feedback</a>
            <a href="assets\pages\policy.php">Policies</a>
            <a href="assets\pages\FAQs.php">FAQ</a>
         </div>
      </div>
      <!-- Primary Header Navigation Bar -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="sitelogo">
               <a href="Index.php"><img
                  src="assets\images\logo\sitelogo1.png"
                  class="img-rounded" alt="logo"
                  height="55"></a>
            </div>
            
            <form
               class="navbar-form navbar-right site-navbar" style="margin:0px;"
               action="assets\pages\custom-product.php?p=" method="GET">
               
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
                  <a href="./assets/pages/shopping-cart.php" class="btn btn-warning btn-cart">
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
               <button type="button"
                  class="navbar-toggle"
                  data-toggle="collapse"
                  data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse"
               id="myNavbar">
               <ul class="nav navbar-nav">
                  <li><a href="#">HOME</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle"
                        data-toggle="dropdown"
                        href="#">PRODUCTS
                     <span
                        class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=camera">Cameras</a></li>
                        <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=headphone">Headphones</a></li>
                        <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=mobile">Mobiles</a></li>
                     </ul>
                  </li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=laptop">LAPTOPS</a></li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=graphic">GRAPHIC CARDS</a>
                  </li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=monitor">MONITORS</a></li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=printer">PRINTERS</a></li>
                  <li><a href="/eCommerceProject/assets/pages/custom-product.php?p=harddisk">HDD</a></li>
               </ul>
               <ul
                  class="nav navbar-nav navbar-right">
                  <li><a
                     href="assets\pages\signup.php"><span
                     class="glyphicon glyphicon-user"></span>
                     Sign Up</a>
                  </li>
                  <li><a
                     href="assets\pages\signIn.php"><span
                     class="glyphicon glyphicon-log-in"></span>
                     Login</a>
                  </li>
                  <li><a href="#"
                     class="f_facebook gap"><i
                     class="fa fa-facebook"
                     aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#"
                     class="t_twitter gap"><i
                     class="fa fa-twitter"
                     aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#"
                     class="fa fa-google"></a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- IMAGE SLIDER -->
      <div class="container">
         <div id="carousel-example-generic"
            class="carousel slide"
            data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-generic"
                  data-slide-to="0" class="active">
               </li>
               <li data-target="#carousel-example-generic"
                  data-slide-to="1"></li>
               <li data-target="#carousel-example-generic"
                  data-slide-to="2"></li>
               <li data-target="#carousel-example-generic"
                  data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner image-slider"
               role="listbox">
               <div class="item active">
                  <img
                     src="assets\images\bannerImages\banner2.jpg"
                     alt="...">
               </div>
               <div class="item">
                  <img
                     src="assets\images\bannerImages\banner4.jpg"
                     alt="...">
               </div>
               <div class="item">
                  <img
                     src="assets\images\bannerImages\banner3.jpg"
                     alt="...">
               </div>
               <div class="item">
                  <img
                     src="assets\images\bannerImages\banner1.jpg"
                     alt="...">
               </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control"
               href="#carousel-example-generic"
               role="button" data-slide="prev">
            <span
               class="glyphicon glyphicon-chevron-left"
               aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control"
               href="#carousel-example-generic"
               role="button" data-slide="next">
            <span
               class="glyphicon glyphicon-chevron-right"
               aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>

      <!--Cards-->
      <div class="container">
         <div class="row products-container">
            
            <?php
               include("assets\\cms\\connection.php");
               error_reporting(0); 

               $sql = "SELECT * FROM products";
               $data = mysqli_query($conn, $sql);
               $total_rows = mysqli_num_rows($data);

               if ($total_rows > 0) {
                  while ($result = mysqli_fetch_assoc($data)) {
                     
                     $serialNo = $result['serialNo'];
                     $addedOn = $result['addedOn'];
                     $productTitle = $result['name'];
                     $description = $result['description'];
                     $productDescription = substr($description,0,96);
                     $price = $result['price'];
                     $img = $result['img'];
                                       
                     echo "<div class='card'>
                              <span class='badge badge-primary' style='background-color: #064f88;'>New</span>
                              <img class='card-img-top card-product-image' src='".$img."' alt='Card image cap'>
                              <div class='card-body'>
                                 <h5 class='card-title'><strong>".$productTitle."</strong></h5>
                                 <p class='card-text'>".$productDescription."<strong>...</strong></p>
                                 <hr>
                                 <p class='product-price'><strong>RS.".$price."</strong></p>
                                 <a href='assets/pages/product.php?p=".$serialNo."' class='btn btn-primary btn-view-product'>VIEW DETAILS</a>
                              </div>
                           </div>";
                  }
               }
            ?>
         </div>
      </div>

      <!-- SIGNUP NEWSLETTER FORM  -->
      <div class="container-fluid">
         <div class="row footer-top">
            <form class="form-inline">
               <label class="text-Subscribe">SIGN UP
               FOR NEWSLETTER </label>
               <div class="form-group">
                  <input type="text"
                     id="newsletter_name"
                     class="form-control"
                     placeholder="Name">
               </div>
               <div class="form-group">
                  <input type="email"
                     id="newsletter_email"
                     class="form-control"
                     placeholder="Email">
               </div>
               <button type="submit"
                  id="btn_newsletter"
                  class="btn btn-success">SUBSCRIBE</button>
               <p style="color: white; font-style: italic; text-align: center;"
                  id="subscription_sucess"></p>
            </form>
         </div>
      </div>
      <!-- Primary Footer -->
      <div class="footer">
         <div class="container">
            <div class="row" style="padding: 30px 0;">
               <div class="col-lg-3 footer-logo">
                  <img src="assets\images\logo\sitelogo1.png" id="footer1_imgLogo" style="width: 95%; padding-bottom: 20px;" alt="Computer Zone">
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
                           <li><a href="assets\pages\signup.php">Sign Up</a></li>
                           <li><a href="assets\pages\signIn.php">My Account</a></li>
                           <li><a href="assets\pages\shopping-cart.php">Shopping Cart</a></li>
                           <li><a href="assets\pages\shopping-cart.php">Order History</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-3">
                        <h3>Corporate</h3>
                        <ul class="list-unstyled">
                           <li><a href="assets\pages\aboutus.php">About Us</a></li>
                           <li><a href="assets\pages\contactus.php">Contact</a></li>
                           <li><a href="assets\pages\FAQs.php">FAQs</a></li>
                           <li><a href="assets\pages\policy.php">Policies</a></li>
                           <!-- <li><a href="/gallery.aspx">Picture Gallery</a></li> -->
                        </ul>
                     </div>
                     <div class="col-lg-3">
                        <h3> Contact </h3>
                        <ul class="contactBox list-unstyled">
                           <li><i class="fa fa-map-marker"></i><a class="inline"> Rawalpindi, Pakistan</a>
                           </li>
                           <li><i class="fa fa-phone"></i><a class="inline"> +92-3450000000</a></li>
                           <li><i class="fa fa-envelope-o"></i><a class="inline" href="mailto:info@infinityComputers.com.pk"> info@infinity.com.pk</a></li>
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
               <div
                  class="col-lg-4 col-sm-12 col-xs-12">
                  <div class="small text-center">
                     <p>Copyright © Infinity
                        Computers 2020. All rights
                        reserved.
                     </p>
                  </div>
               </div>
               <div
                  class="col-lg-4 col-sm-12 col-xs-12 paymentMethodImg">
                  <div class="center-block">
                     <img height="25"
                        class="pull-right"
                        src="assets\images\icons\visa_card.png"
                        alt="img"
                        style="margin-right: 5px;">
                     <img height="25"
                        class="pull-right"
                        src="assets\images\icons\paypal.png"
                        alt="img"
                        style="margin-right: 5px;">
                     <img height="25"
                        class="pull-right"
                        src="assets\images\icons\american_express_card.png"
                        alt="img"
                        style="margin-right: 5px;">
                     <img height="25"
                        class="pull-right"
                        src="assets\images\icons\discover_network_card.png"
                        alt="img"
                        style="margin-right: 5px;">
                     <img height="25"
                        class="pull-right"
                        src="assets\images\icons\master_card.png"
                        alt="img"
                        style="margin-right: 5px;">
                     <img height="25"
                        class="pull-right"
                        src="assets\images\icons\google_wallet.png"
                        alt="img"
                        style="margin-right: 5px;">
                  </div>
               </div>
               <div
                  class="col-lg-4 col-sm-12 col-xs-12">
                  <div class="small text-center">
                     <p>Designed & developed by
                        <strong>Ameen</strong> and
                        <strong>Haseeb</strong>.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/main.js"></script>
   </body>
</html>