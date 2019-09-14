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
<?php $GetOrderID = $_GET['GetOrderID'];  ?>
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
<style>
    p{
        color: black;
        font-size: 20px;
    }
    .text-terms{
        color: black;
        font-size: 30px;
    }
</style>


<body style="background: white">

               
<?php 
include("SQL.php");

$sql = "SELECT * FROM orders WHERE OrderID = '" . $GetOrderID . "'";
        
        $result = $conn->query($sql);


            if($result->num_rows > 0)
            {                   
                while($row = $result->fetch_assoc()){
            ?>


<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <center>
            <img src="images/footervs.png" style="width: 20%">
            </center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <center>
            <h1> Vapers Sidewalk </h1>
            </center>
        </div>
    </div>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Name: </strong><?php echo $row['Firstname'] . " " . $row['Lastname']; ?>
            <strong class="pull-right">Date:<?php echo $row['DateApproved'] ?> </strong>
            </p>

            <p><strong>Email: </strong><?php echo $row['Email'] ?></p>
            <p><strong>Contact: </strong><?php echo $row['Mobile'] ?></p>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <p class=""><strong>Address: </strong><?php echo $row['House'] . " " . $row['City'] . " " . $row['Zipcode'] ?></p>
        </div>
    </div>


    <hr>
    <div class="row">
        <div class="col-md-12">
            <p class=""><strong>Orders: </strong><?php echo $row['Items'] ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class=""><strong>Total: </strong><?php echo $row['Total'] ?> (₱200 Delivery Fee Included)</p>
        </div>
    </div>
    <hr>
    <br><br>
    <div class="row">
        <div class="col-md-12 text-center">
            <p class="text-terms"><strong>THANKYOU FOR CHOOSING VAPER SIDEWALK </strong></p>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12 text-center">
            <p class="">IN BEHALF OF OUR CUSTOMERS, VAPER SIDEWALK WILL GIVE 1 WEEK WARRANTY FOR EVERY
BOUGHT ITEMS. VAPERSSIDEWALK WILL NOT ENTERTAIN IF THE PHYSICAL PARTS ARE
DAMAGED. </p>
        </div>
    </div>
</div>
                    


            <?php 
            }}
            ?>
                           
</body>
</html>
        



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

