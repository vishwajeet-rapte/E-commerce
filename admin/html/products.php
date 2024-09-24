
<?php
include_once("../../config/config.php");
?>





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
   
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
 
    <style>
    
        img{
            width : 18%;
        }

    </style>

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
                        <h3 class="box-title">Order</h3>
                        
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>MRP</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Images</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>


                                <?php
        

                                    $query = "SELECT * FROM products";
                                    $fire = mysqli_query($conn,$query);

                                    while ($row = mysqli_fetch_array($fire)) {
                                        
                                         $product_id = $row['product_id'];
                                         $product_name = $row['product_name'];
                                         $product_price = $row['product_price'];
                                         $product_MRP = $row['product_MRP'];
                                         $product_brand = $row['product_brand'];
                                         $product_categories = $row['product_categories'];
                                         $product_image = $row['product_image'];
                                    

                                ?>

                                    <tr>
                                        <td><?php echo $product_id; ?></td>
                                        <td><?php echo $product_name; ?></td>
                                        <td><?php echo $product_price; ?></td>
                                        <td><del><?php echo $product_MRP; ?></del></td>
                                        <td><?php echo $product_brand; ?></td>
                                        <td><?php echo $product_categories; ?></td>
                                        <td><?php echo '<img src="data:image/png;base64,'.base64_encode($product_image).'"/>'; ?></td>
                                        
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







<!-- *********************************************************************** -->












<!-- ****************************************************************************** -->