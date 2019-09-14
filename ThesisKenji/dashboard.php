<?php error_reporting(0); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php session_start(); 

if(isset($_SESSION['username'])=='admin'){

}
else{
    header("Location: logout.php");
}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vaper Sidewalk</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="footervs.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/footervs.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Product and Orders</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class=""> <i class="menu-icon ti-shopping-cart"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa ti-clipboard"></i><a href="ProductView.php">Manage Products</a></li>
                            <li class="active"><i class="fa ti-pencil"></i><a href="ProductEntry.php">Add Product</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-truck"></i>Orders</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa ti-pencil"></i><a href="OrderView.php">Manage Orders</a></li>
                            <li><i class="fa ti-close"></i><a href="OrderEntry.php">Cancel Orders</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">SALES</h3><!-- /.menu-title -->

                    <li>
                        <a href="SalesView.php"> <i class="menu-icon ti-bar-chart"></i>Sales Report</a>
                    </li>
                    <li>
                        <a href="StocksView.php"> <i class="menu-icon ti-package"></i>Stocks</a>
                    </li>
                    <li>
                        <a href="change_settings.php"> <i class="menu-icon ti-package"></i>Change Settings</a>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li>
                        <a href="Logout.php"> <i class="menu-icon ti-share"></i>Logout</a>
                    </li>               
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                       <!--  <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- START CARD -->
                        <div class="card"> 
                            <div class="card-header">
                                <strong class="card-title">Product Entry</strong>
                            </div>
                            <!-- START CARD BODY -->
                            <div class="card-body">
                                <div class="col-lg-12">
                                   <!-- Credit Card -->
                                    <div class="row">
                                        <div class="col-md-12">
                                           <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                               <thead>
                                                   <tr>
                                                       <th>OrderID</th>
                                                       <th>Firstname</th>
                                                       <th>Lastname</th>
                                                       <th>Address</th>
                                                       <th>City</th>
                                                       <th>Zipcode</th>
                                                       <th>Email</th>
                                                       <th>Mobile</th>
                                                       <th>Notes</th>
                                                       <th>Total</th>
                                                        <th>Action 1</th>
                                                       <th>Action 2</th>
                                                       <th>Action 3</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                <?php
                                                include("SQL.php");
                                                $sql = "SELECT * FROM orders";
                                                
                                                $result = $conn->query($sql);

                                                    if($result->num_rows > 0)
                                                    {   
                                                        while($row = $result->fetch_assoc()){
                                                            echo "<tr>";
                                                            echo "<td>". $row["OrderID"]."</td>";
                                                            echo "<td>". $row["Firstname"]."</td>";
                                                            echo "<td>". $row["Lastname"]."</td>";
                                                            echo "<td>". $row["House"]."</td>";
                                                            echo "<td>". $row["City"]."</td>";
                                                            echo "<td>". $row["Zipcode"]."</td>";
                                                            echo "<td>". $row["Email"]."</td>";
                                                            echo "<td>". $row["Mobile"]."</td>";
                                                            echo "<td>". $row["Notes"]."</td>";
                                                            echo "<td>". $row["Total"]."</td>";
                                                            echo "<td><a href='view_order.php?GetOrderID=".$row["OrderID"]."'><button type='button' class='btn btn-success form-control'>View Order</button></td>";
                                                            echo "<td><a href='OrdersApprove.php?GetOrderID=".$row["OrderID"]."'><button type='button' class='btn btn-info form-control'>Approve Order</button></td>";
                                                            echo "<td><a href='OrdersDelete.php?GetOrderID=".$row["OrderID"]."'><button type='button' class='btn btn-danger form-control'>Cancel Order</button></td>";
                                                            echo "</tr>";

                                                        }
                                                    }
                                                    else
                                                    {
                                                     echo "0 Results";
                                                    }
                                                ?>
                                               </tbody>
                                           </table>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CARD BODY -->
                        </div>
                        <!-- END CARD -->
                    </div>
                </div>
            </form>

                


            <br>
            <!-- END ANIMATE -->
            </div>
        <!-- END CONTENT -->
        </div>

                

                
            </div>
        </div>


                                               

                    


                           
</body>
</html>
        

<script>
  var loadFile1 = function(event) {
    var preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
  };
</script>


 <script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/popper.js/dist/umd/popper.min.js"></script>

<script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

