<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Dashboard - Infinity Computers</title>
      <link href="css/styles.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
   </head>
   <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <a class="navbar-brand" href="dashboard.php"><i class="fas fa-tools"></i> Infinity Dashboard</a>
         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
         
         <!-- Navbar-->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activity Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../Index.php">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
               <div class="sb-sidenav-menu">
                  <div class="nav">
                     <div class="sb-sidenav-menu-heading">Core</div>
                     <a class="nav-link" href="dashboard.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                     </a>
                     <div class="sb-sidenav-menu-heading">Addons</div>
                     <a class="nav-link" href="products.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-boxes"></i></div>
                        Products
                     </a>
                     <a class="nav-link" href="orders.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                        Orders
                     </a>
                     <a class="nav-link" href="users.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                        Users
                     </a>
                     <a class="nav-link" href="reviews.php">
                        <div class="sb-nav-link-icon"><i class="far fa-envelope"></i></div>
                        Reviews
                     </a>
                  </div>
               </div>
               <div class="sb-sidenav-footer">
                  <div class="small">Logged in as:</div>
                  Haseeb Ahmed
               </div>
            </nav>
         </div>
         <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid">
                  <h1 class="mt-4">Users</h1>
                  <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item">Infinity</li>
                     <li class="breadcrumb-item">Dashboard</li>
                     <li class="breadcrumb-item active">Users</li>
                  </ol>
                  <div class="row">
                     <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="card bg-primary text-white mb-4">                           
                           <?php
                                 include("connection.php");
                                 error_reporting(0); 
                                 $sql = "SELECT * FROM users";
                                 $data = mysqli_query($conn, $sql);
                                 $total_rows = mysqli_num_rows($data);
   
                                 echo '<div class="card-body"><i class="fas fa-boxes">
                                          </i> Total Registered Users: '.$total_rows.'
                                       </div>';
                           ?>
                        </div>
                     </div>
                  </div>
                  
                  <!-- MODALS HERE -->
                  <!-- DELETE MODAL -->
                  <!-- <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              Do you really want to delete this Customer Information? This process cannot be undone.
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-danger">Delete</button>
                           </div>
                        </div>
                     </div>
                  </div> -->

                  <!-- Users TABLE -->
                  <div class="card mb-4">
                     <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        All Users/Customers
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr class="text-center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Addess</th>
                                    <th>Created on</th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                 include("connection.php");
                                 error_reporting(0); 
   
                                 $sql = "SELECT * FROM users";
                                 $data = mysqli_query($conn, $sql);
                                 $total_rows = mysqli_num_rows($data);
   
                                 if ($total_rows > 0) {
                                    while ($result = mysqli_fetch_assoc($data)) {
                                       echo "<tr>
                                             <td>".$result['id']."</td>
                                             <td>".$result['name']."</td>
                                             <td>".$result['password']."</td>
                                             <td>".$result['phone']."</td>
                                             <td>".$result['email']."</td>
                                             <td>".$result['address']."</td>
                                             <td>".$result['createdOn']."</td>
                                             <td class='ops-row'>
                                                <form action='' method='POST'>
                                                   <button type='submit' name='deleteUserBtn' value=".$result['id']." class='btn btn-sm btn-danger'><i class='fas fa-trash-alt delete-btn'></i></button>
                                                </form>     
                                             </td>
                                             </tr>";
                                    }
                                 }
                                 echo "</tbody></table>";
                                 echo "</div></div>";
                              ?>

                              <?php
                                 include("../connection.php");

                                 if (isset($_POST["deleteUserBtn"])) {
                                    $id =  $_POST["deleteUserBtn"];
                                    $sql = "DELETE FROM users where id='$id' ";
                                 
                                    if ($conn->query($sql) === TRUE) {
                                       Header('Location: '.$_SERVER['PHP_SELF']);
                                    } else {
                                       echo "Error: " . $sql . "<br>" . $conn->error;
                                    }
                                 }
                                 $conn->close();
                              ?> 
                  </div>
               </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
               <div class="container-fluid">
                  <div class="d-flex align-items-center justify-content-between small">
                     <div class="text-muted">Copyright &copy; Infinity 2020</div>
                     <div>
                        <a href="../policy.php">Privacy Policy</a>
                        &middot;
                        <a href="../FAQs.php">FAQ</a>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
   </body>
</html>