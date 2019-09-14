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
	$GetProductID = $_GET['GetProductID'];
	$sql = "DELETE FROM `product` WHERE ProductID = '" . $GetProductID . "'";

	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Product deleted successfully') </script>";
		echo "<script> location.href='ProductView.php'; </script>";
	} 
	else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>

