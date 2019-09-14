
<?php session_start(); 
error_reporting(0);
if(isset($_SESSION['username'])=='admin'){

}
else{
    header("Location: logout.php");
}

?>
<?php
    include("SQL.php");

    $dateApproved = date("Y-m-d");
    $GetOrderID = $_GET['GetOrderID'];
                $sql = "UPDATE `orders` SET `Status` ='". "Approved" ."', `DateApproved`='" .$dateApproved. "' WHERE `OrderID` =".$GetOrderID;;

                               $result = $conn->query($sql);

                               if($result)
                               {
                                    echo "<script type='text/javascript'> alert('Information Successfully Updated') </script>";
                                    echo "<script> location.href='OrderView.php'</script>";
                               }else{
                                   echo "<script type='text/javascript'> alert('Update Error') </script>";
                               }
                            $conn->close();