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
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="footervs.png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>
<script>
        function editpic1(){
            document.getElementById("fileToUpload").disabled = false;
        }
        function lettersOnly() {
        var charCode = event.keyCode;

        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
            return true;
        else
            return false;
        }
        function numbersOnly(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        function alpha(e) {
            var k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
</script>
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
                        <a href="StocksView.php"> <i class="menu-icon ti-package"></i>Stock Management</a>
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
                        <ol class="breadcrumb text-right">
                          <!--   <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <?php 

        include("SQL.php");
        $GetProductID = $_GET['GetProductID'];

        $sql = "SELECT * FROM product WHERE ProductID = '" . $GetProductID . "'";
                
                $result = $conn->query($sql);

                    if($result->num_rows > 0)
                    {                   
                        while($row = $result->fetch_assoc()){
        ?>

        


        <div class="content mt-3">
            <div class="animated fadeIn">

            <form action="ProductEdit.php" method="POST" enctype="multipart/form-data">
                <div class="form-line">
                    <input type="hidden" class="form-control" name="IDTxt" value="<?php echo $row['ProductID']; ?>">
                </div>
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
                                            <div class="col-md-6">
                                                <label> Product Name </label>
                                                <input type="text" class="form-control" name="NameTxt" value="<?php echo $row['Name']; ?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="" class=" form-control-label"> Category </label>
                                                <select class="form-control" name="CatTxt">
                                                    <option><?php echo $row['Category']; ?></option>
                                                    <option disabled>--------</option>
                                                    <option>Atomizer</option>
                                                    <option>Mods</option>
                                                    <option>Batteries</option>
                                                    <option>Accessories</option>
                                                    <option>Juice</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Price </label>
                                                <input type="text" class="form-control" name="PriceTxt" value="<?php echo $row['Price']; ?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label> Quantity </label>
                                                <input type="number" class="form-control" name="QuanTxt" value="<?php echo $row['Quantity']; ?>">
                                            </div>

                                            
                                        </div>
                                </div>
                            </div>
                            <!-- END CARD BODY -->
                        </div>
                        <!-- END CARD -->
                    </div>
                </div>

                <div class="row" >
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Action</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <label>Image</label><br>
                                        
                                        
                                        <img src="uploads/<?php echo $row['Image']; ?>" id="preview" style="width: 400px;height: 400px;" />

                                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="loadFile1(event)" disabled>

                                        <br>
                                        <center>
                                        <a onclick="editpic1()"><button type="button" class="btn-info form-control" style="width: 60%;"> EDIT </label></button></a>
                                        </center>
                                        

                                    </div>

                                    <div class="col-md-8">
                                        <div class="col-md-6">
                                            <label> Feature 1 </label>
                                            <input type="text" class="form-control" name="F1Txt" value="<?php echo $row['Feature1']; ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label> Feature 2 </label>
                                            <input type="text" class="form-control" name="F2Txt" value="<?php echo $row['Feature2']; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label> Feature 3 </label>
                                            <input type="text" class="form-control" name="F3Txt" value="<?php echo $row['Feature3']; ?>">
                                        </div>

                                        <div class="col-md-6">
                                            <label> Feature 4 </label>
                                            <input type="text" class="form-control" name="F4Txt" value="<?php echo $row['Feature4']; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label> Feature 5 </label>
                                            <input type="text" class="form-control" name="F5Txt" value="<?php echo $row['Feature5']; ?>">
                                        </div>

                                        <div class="col-md-12">
                                            <label>Short Description</label>
                                            <textarea class="form-control" rows="4" name="ShortTxt"><?php echo $row['ShortD']; ?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Long Description</label>
                                            <textarea class="form-control" rows="8" name="LongTxt"><?php echo $row['LongD']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>



                    <!--/.col-->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-success form-control" name="formSubmit">
                            </div>
                            <div class="col-md-4">
                                <input type="reset" class="btn btn-primary form-control" name=""></button>
                            </div>  
                            <div class="col-md-4">
                                <a href="dashboard.php"><button type="button" class="btn btn-danger form-control" name="">Cancel</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <?php }} ?>

                


            <br>
            <!-- END ANIMATE -->
            </div>
        <!-- END CONTENT -->
        </div>

                

                
            </div>
        </div>


                                               

                    


                           
</body>
</html>
<?php
    if(isset($_POST['formSubmit'])){
        
        $GetID = $_POST['IDTxt'];

        $Name = $_POST['NameTxt'];
        $Category = $_POST['CatTxt'];
        $Price = $_POST['PriceTxt'];
        $Quantity = $_POST['QuanTxt'];
        $ShortD = $_POST['ShortTxt'];
        $LongD = $_POST['LongTxt'];

        $Feature1 = $_POST['F1Txt'];
        $Feature2 = $_POST['F2Txt'];
        $Feature3 = $_POST['F3Txt'];
        $Feature4 = $_POST['F4Txt'];
        $Feature5 = $_POST['F5Txt'];

        //if the admin wants to edit the picture
        if(isset($_FILES['fileToUpload'])){
            $file = $_FILES['fileToUpload'];

            $fileName = $_FILES['fileToUpload']['name'];
            $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
            $fileSize = $_FILES['fileToUpload']['size'];
            $fileError = $_FILES['fileToUpload']['error'];
            $fileType = $_FILES['fileToUpload']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 10000000){
                        $fileDestination = 'uploads/'.$fileName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        
                        include("SQL.php");
                        $sql = "UPDATE `product` SET `Name`='" .$Name. "', `Category`='".$Category."', `Price`='" .$Price. "', `Quantity`='" .$Quantity. "', `ShortD`='" .$ShortD. "', `LongD`='" .$LongD. "', `Feature1`='" .$Feature1 ."', `Feature2`='".$Feature2 ."', `Feature3`='".$Feature3. "', `Feature4`='" .$Feature4. "', `Feature5`='" .$Feature5. "', `Image`='" .$fileName. "' WHERE `ProductID` = ". $GetID;
                               $result = $conn->query($sql);

                               if($result)
                               {
                                    echo "<script type='text/javascript'> alert('Information Successfully Updated') </script>";
                                    echo "<script> location.href='ProductView.php'</script>";
                               }else{
                                    echo "<script type='text/javascript'> alert('Update Error') </script>";
                               }
                            $conn->close();
                    } else {
                        echo "error";
                    }
                } else {
                    echo "There is an error";   
                }
            } else {
                echo "You cannot upload files of this type";
            }
        }
        //if the admin doesn't change the picture
        else{
            include("SQL.php");

                        $GetID = $_POST['IDTxt'];

                        $Name = $_POST['NameTxt'];
                        $Category = $_POST['CatTxt'];
                        $Price = $_POST['PriceTxt'];
                        $Quantity = $_POST['QuanTxt'];
                        $ShortD = $_POST['ShortTxt'];
                        $LongD = $_POST['LongTxt'];

                        $Feature1 = $_POST['F1Txt'];
                        $Feature2 = $_POST['F2Txt'];
                        $Feature3 = $_POST['F3Txt'];
                        $Feature4 = $_POST['F4Txt'];
                        $Feature5 = $_POST['F5Txt'];


                        $sql = "UPDATE `product` SET `Name`='" .$Name. "', `Category`='".$Category."', `Price`='" .$Price. "', `Quantity`='" .$Quantity. "', `ShortD`='" .$ShortD. "', `LongD`='" .$LongD. "', `Feature1`='" .$Feature1 ."', `Feature2`='".$Feature2 ."', `Feature3`='".$Feature3. "', `Feature4`='" .$Feature4. "', `Feature5`='" .$Feature5. "' WHERE `ProductID` =".$GetID;

                               $result = $conn->query($sql);

                               if($result)
                               {
                                    echo "<script type='text/javascript'> alert('Information Successfully Updated') </script>";
                                    echo "<script> location.href='ProductView.php'</script>";
                               }else{
                                    echo "<script type='text/javascript'> alert('Update Error') </script>";

                               }
                            $conn->close();
        }
    }
?>
        

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





