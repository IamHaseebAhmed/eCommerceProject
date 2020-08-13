<!DOCTYPE html>
<html lang='en'>
   <head>
      <title>Sign Up | Infinity Computers</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/signupStyle.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
      <!-- <script src="../js/main.js"></script> -->
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
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="#"  class="f_facebook gap"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                  <li><a href="#"  class="t_twitter gap"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                  <li><a href="#" class="fa fa-google"></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <ul class="bcrum breadcrumb bg-primary">
         <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
         <li class="breadcrumb-item active">Sign Up</li>
      </ul>
      <!-- SIGN UP CODE HERE -->
      <div class="signup-form">
         <form action="signup.php" method="post">
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr>
            <div class="form-group" >
               <div class="row">
                  <div class="col-xs-6">
                     <input type="text" class="form-control signup" name="su_fname" id="su_fname" placeholder="First Name" required>
                  </div>
                  <div class="col-xs-6">
                     <input type="text" class="form-control signup" name="su_lname" id="su_lname" placeholder="Last Name">
                  </div>
               </div>
            </div>
            <div class="form-group">
               <input type="email" class="form-control signup" name="su_email" id="su_email" placeholder="Email" required>
               <p style="color: red;font-style: italic;" id="email_submission_message"></p>
            </div>
            <div class="form-group">
               <input type="password" class="form-control signup" name="su_password" id="su_password" placeholder="Password" required>
               <p style="color: red;font-style: italic;" id="pass_submission_message"></p>
            </div>
            <div class="form-group">
               <input type="password" class="form-control signup" name="su_confirm_password" id="su_confirm_password" placeholder="Confirm Password" required>
               <p style="color: red;font-style: italic;" id="confirmPass_submission_message"></p>
            </div>
            <div class="form-group">
               <label class="checkbox-inline">
                  <input type="checkbox" id="su_checkbox" required> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>
               </label>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary btn-lg" id="su_submit_btn">Sign Up</button>
            </div>
            <p id="sign-up-message" style="font-style: italic;color: #03254c;"></p>
         </form>
         <div class="hint-text">Already have an account? <a href="signIn.php">Login here</a></div>
      </div>
      <!-- SIGNUP NEWSLETTER FORM  -->
      <div class="container-fluid">
         <div class="row footer-top">
            <form class="form-inline" action="signup.php" method="post">
               <label class="text-Subscribe">SIGN UP FOR NEWSLETTER  </label>
               <div class="form-group">
                  <input type="text" id="newsletter_name" name="newsletter-name" class="form-control" placeholder="Name" required>
               </div>
               <div class="form-group">
                  <input type="email" id="newsletter_email" name="newsletter-email" class="form-control" placeholder="Email" required>
               </div>
               <button type="submit" id="btn_newsletter" name="btn_newsletter" class="btn btn-success">SUBSCRIBE</button>
               <p style="color: white; font-style: italic; text-align: center;" id="subscription_sucess"></p>
            </form>
            
            <!-- <script src="../js/newsletter.js"></script> -->
            <?php
            include("../cms/connection.php");
            if(isset($_POST['btn_newsletter'])){
               $name=$_POST['newsletter-name'];
               $email=$_POST['newsletter-email'];
               $sql="INSERT INTO `signup_newsletter` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email');";
               if ($conn->query($sql) === TRUE) {
                  echo "<br>New record created successfully<br>";

                  } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  //mysqli_close($conn);
            }
            else{
               echo "error".$conn->error;
            }
            mysqli_close($conn);

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
      <?php
      include("../cms/connection.php");

      $fname=$lname=$email=$pass="";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if(isset($_POST['su_fname']) && isset($_POST['su_lname']) && isset($_POST['su_email'])
       && isset($_POST['su_password'])){
         
         $fname=$_POST['su_fname'];
         $lname=$_POST['su_lname'];
         $name = $fname." ".$lname;
         $email=$_POST['su_email'];
         $pass=$_POST['su_password'];
         $addedOn = date("d/m/Y");

         $sql="INSERT INTO `users` (`id`, `name`, `password`, `phone`, `email`, `address`, `createdOn`) 
               VALUES (NULL, '$name', '$pass', 'NULL', '$email', 'NULL', '$addedOn')";
        
         if ($conn->query($sql) === TRUE) {
         //echo "<br>New record created successfully<br>";
         // unset($_POST['su_fname']);
         // unset($_POST['su_lname']);
         // unset($_POST['su_email']);
         // unset($_POST['su_password']);
         } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
         }
      }
      else{
         //Error:enter all the fields
      }
      mysqli_close($conn);
   }

      ?>
      <script>
         if ( window.history.replaceState ) {
         window.history.replaceState( null, null, window.location.href );
         }
      </script>
      <!-- <script src="../js/main.js"></script> -->
   </body>
</html>