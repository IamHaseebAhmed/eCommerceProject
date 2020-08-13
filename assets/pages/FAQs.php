<!DOCTYPE html>
<html>
   <head>
      <title>FAQ | Infinity Computers</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/FAQ.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
      <script src="../js/main.js"></script>
      <script src="../js/newsletter.js"></script>
      
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
                  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="signIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="#"  class="f_facebook gap"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                  <li><a href="#"  class="t_twitter gap"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                  <li><a href="#" class="fa fa-google"></a></li>
               </ul>
            </div>
         </div>
      </nav>
      <ul class="bcrum breadcrumb">
         <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
         <li class="breadcrumb-item active">Frequently Asked Questions</li>
      </ul>
      <!--FAQs Page-->
      <div class="container ">
         <div class="panel-group" id="faqAccordion">
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                  <h4 class="panel-title">
                     <a href="#" class="ing">1. Can we place order online and what are payment options?</a>
                  </h4>
               </div>
               <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>Of course, you can place orders online. Upon confirmation of your payment, we will dispatch your order as soon as possible. Total time is based on the amount of time it takes to get payment authorization, order processing, and the transit time from the carrier. This can range from 24 hours to 10 days for in-stock items. To avoid delays, please ensure that you have provided us with the correct Shipping address.
                     </p>
                  </div>
               </div>
            </div>
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                  <h4 class="panel-title">
                     <a href="#" class="ing">2. Is cash on delivery option available?</a>
                  </h4>
               </div>
               <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>Yes Cash On Delivery is available for rawalpindi only.</p>
                  </div>
               </div>
            </div>
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                  <h4 class="panel-title">
                     <a href="#" class="ing">3. Do the prices of On Order Products Change?</a>
                  </h4>
               </div>
               <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>We do everything to ensure that the prices on our website are correct and try to keep prices constant. Sometimes we need to change the prices, either up or down without any prior notice due to change in Forex rates/government policies. Computer Zone reserves the right to change the prices on the website at any time without prior notice. In that case, if you have ordered the product but not yet confirmed or you have even paid for a product the prices would not be valid. It's better to confirm the price's of On Order Product's through phone call first and then deposit the amount after confirmation.</p>
                  </div>
               </div>
            </div>
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                  <h4 class="panel-title">
                     <a href="#" class="ing">4. Why do I write reviews?</a>
                  </h4>
               </div>
               <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>TWe want to hear your opinions. We want consumers to get the information they need to make smart buying choices. As a Czone client, you can submit reviews for items listed on czone.com.pk. We encourage you to share your ideas, both favourable and unfavourable.</p>
                  </div>
               </div>
            </div>
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                  <h4 class="panel-title">
                     <a href="#" class="ing">5. What are the Tips on writing a great review?</a>
                  </h4>
               </div>
               <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>• Include the "why": The best reviews include not only whether you liked or disliked a product, but also why. Feel free to talk about related products and how this item compares to them. 
                        • Be specific: Your review should focus on specific features of the product and your experience with it.
                        • Not too short, not too long: The ideal length is 75 to 500 words.
                        • Be sincere: We welcome your honest opinion about the product--positive or negative. We do not remove reviews because they are critical. We believe all helpful information can inform our customers’ buying decisions. 
                     </p>
                  </div>
               </div>
            </div>
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                  <h4 class="panel-title">
                     <a href="#" class="ing">6. What's not allowed?</a>
                  </h4>
               </div>
               <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>Czone is pleased to provide this forum for you to share your opinions on products. 
                        While we appreciate your time and comments, we limit customer participation to one
                        review per product and reserve the right to remove reviews that include any of the
                        following: Objectionable material: • Obscene or distasteful content • Profanity or
                        spiteful remarks • Promotion of illegal or immoral conduct Promotional content: • 
                        Advertisements, promotional material or repeated posts that make the same point
                        excessively • Sentiments by or on behalf of a person or company with a financial
                        interest in the product or a directly competing product (including reviews by
                        publishers, manufacturers, or third-party merchants selling the product) •
                        Reviews those are written for any form of compensation other than a free
                        copy of the product. This includes reviews that are a part of a paid
                        publicity package • Solicitations for helpful votes Inappropriate content:
                        • Other people's material (this includes excessive quoting) • Phone numbers, postal mailing addresses, and URLs external to czone.com.pk • Comments on other reviews visible 
                        on the page (because page visibility is subject to change without notice)
                     </p>
                  </div>
               </div>
            </div>
            <div class="panel panel-default ">
               <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                  <h4 class="panel-title">
                     <a href="#" class="ing">7. What are your store hours?</a>
                  </h4>
               </div>
               <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>
                     <p>Store Hours:
                        Monday – Thursday: 11:30am to 6:00pm
                        Friday: 11:30am to 1:00pm & 2:00pm to 6:00pm
                        Sunday Closed.
                        Ramadan Hours:
                        Monday – Thursday & Saturday: 11:00am to 6:00pm
                        Friday: 11:00am to 1:00pm & 2:00pm to 6:00pm
                        Sunday Closed. 
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!--/panel-group-->
      </div>

      <!-- SIGNUP NEWSLETTER FORM  -->
     <div class="container-fluid">
         <div class="row footer-top">
            <form class="form-inline" action="FAQs.php" method="post">
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
                     <p class="creator">Copyright © Infinity Computers 2020. All rights reserved.</p>
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
                     <p class="creator">Designed & developed by <strong>Ameen</strong> and <strong>Haseeb</strong>.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <script src="../js/main.js"></script> -->
      
      <!--To prevent resubmission of form on refreshing page this script is added-->
      <script>
         if ( window.history.replaceState ) {
         window.history.replaceState( null, null, window.location.href );
         }
      </script>
      
   </body>
</html>