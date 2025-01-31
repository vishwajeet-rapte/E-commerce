
<?php
include_once("../../config/config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>User Registered</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
 
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                
            
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <b class="hidden-xs">Admin</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                
                <ul class="nav" id="side-menu">
                    
                    <li style="padding: 70px 0 0;">
                        <a href="user_registered.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>User Registered</a>
                    </li>
                    <li>
                        <a href="products.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Products</a>
                    </li>
                    <li>
                        <a href="orders.php" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Orders</a>
                    </li>
                   

                </ul>
              
            </div>
            
        </div>


        
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
       </div>
       


       <div id="page-wrapper">

       
        <div class="container-fluid">
            
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title"></h3>
                        
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                    <tr >
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Mob No.</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Pincode</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Fetching Data From DB -->
                                <?php
        

                                    $query = "SELECT * FROM delivery";
                                    $fire = mysqli_query($conn,$query);

                                    while ($row = mysqli_fetch_array($fire)) {
                                        
                                         $delivery_id       = $row['delivery_id'];
                                         $delivery_name     = $row['delivery_name'];
                                         $delivery_pname    = $row['delivery_pname'];
                                         $delivery_category = $row['delivery_category'];
                                         $delivery_price    = $row['delivery_price'];
                                         $delivery_mobile   = $row['delivery_mobile'];
                                         $delivery_address  = $row['delivery_address'];
                                         $delivery_city     = $row['delivery_city'];
                                         $delivery_state    = $row['delivery_state'];
                                         $delivery_pincode  = $row['delivery_pincode'];
                                    

                                ?>

                                    <tr>
                                        <td><?php echo $delivery_id; ?></td>
                                        <td><?php echo $delivery_name; ?></td>
                                        <td><?php echo $delivery_pname; ?></td>
                                        <td><?php echo $delivery_category; ?></td>
                                        <td><?php echo $delivery_price; ?></td>
                                        <td><?php echo $delivery_mobile; ?></td>
                                        <td><?php echo $delivery_address; ?></td>
                                        <td><?php echo $delivery_city; ?></td>
                                        <td><?php echo $delivery_state; ?></td>
                                        <td><?php echo $delivery_pincode; ?></td>
                                        
                                    </tr>

                                <?php  } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>

</body>
</html>
