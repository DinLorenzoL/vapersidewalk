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
	$GetOrderID = $_GET['GetOrderID'];
	$sql = "DELETE FROM `orders` WHERE OrderID = '" . $GetOrderID . "'";

	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Record deleted successfully') </script>";
		echo "<script> location.href='dashboard.php'; </script>";
	} 
	else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>

