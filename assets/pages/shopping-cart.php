<!DOCTYPE html>
<html>
   <head>
      <title>About Us | Infinity Computers</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/shopping-cart.css">
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
         <div class="container-fluid" style="display: block;">
            <div class="sitelogo">
               <a href="../../Index.php"><img src="../images/logo/sitelogo1.png" class="img-rounded" alt="logo" height="55"></a>
            </div>
            <form class="navbar-form navbar-right site-navbar" action="" style="margin:0px;">
               <div class="search_form">
                  <a href="../../Index.php" class="btn btn-warning btn-cart" style="font-size: 18px !important;">Continue Shopping</a>
               </div>
            </form>
         </div>
      </nav>
      <!-- CART BODY HERE -->
      <main class="page">
         <section class="shopping-cart dark">
            <div class="container">
               <div class="block-heading">
                  <h2>Shopping Cart</h2>
                  <p>Thanks for Shopping with us. Please come back to see more awesome products soon!</p>
               </div>
               <div class="content">
                  <div class="row">

                     <div class="col-md-12 col-lg-8">
                        <div class="items">

                        <?php 

                           include("../cms/connection.php");
                           error_reporting(0); 

                           $sql = "SELECT * FROM orders";
                           $data = mysqli_query($conn, $sql);
                           $total_rows = mysqli_num_rows($data);

                           if ($total_rows > 0) {
                              while ($result = mysqli_fetch_assoc($data)) {

                                 $pSerial = $result['pSerial'];
                                 $title = $desc = $pic = "";

                                 $psql = "SELECT * FROM products where serialNo='$pSerial'";
                                 $pdata = mysqli_query($conn, $psql);
                                 $ptotal_rows = mysqli_num_rows($pdata);
   
                                 if ($ptotal_rows > 0) {
                                    while ($row = mysqli_fetch_assoc($pdata)) {
                                       $pic = $row['img'];
                                       $title = $row['name'];
                                       $desc = $row['description'];
                                       $price = $row['price'];
                                       
                                    }
                                 }
                                 // Getting into images directory
                                 $pic = '../../'.$pic;

                                 echo "<div class='product' style='padding: 30px;'>
                                          <div class='row'>
                                             <div class='col-md-3'>
                                                <img class='img-fluid mx-auto d-block image' src='$pic'>
                                             </div>
                                             <div class='col-md-8'>
                                                <div class='info'>
                                                   <div class='row'>
                                                      <div class='col-md-6 product-name'>
                                                         <div class='product-name'>
                                                            <a href='#'>".$title."</a>
                                                            <div class='product-info'>
                                                               <div>Model: <span>$pSerial</span></div>
                                                               <br>
                                                               <div><span>$desc</span></div>                                
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class='col-md-3 quantity mt-4'>
                                                         <label for='quantity'>Quantity:</label>
                                                         <input id='quantity' type='number' value ='1' min='1' class='form-control quantity-input'>
                                                      </div>
                                                      <div class='col-md-3 price text-center'>
                                                         <span id='productPrice'>$price</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>";
                              }
                           }

                        ?>

                        </div>
                     </div>

                     <div class="col-md-12 col-lg-4">
                        <div class="summary">
                           <h3>Summary</h3>
                           <div class="summary-item" ><span class="text">Subtotal</span><span id="sub-total" class="price"></span></div>
                           <div class="summary-item"><span class="text">Discount</span><span class="price">0</span></div>
                           <div class="summary-item"><span class="text">Shipping</span><span class="price">0</span></div>
                           <div class="summary-item"><span  class="text">Total</span><span  id="total"  class="price"></span></div>
                           <button type="button66" class="btn btn-primary btn-lg btn-block">Checkout</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
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

      <!-- <script src="../js/main.js"></script> -->
      <script src="../js/ajax.js"></script>
   </body>
</html>