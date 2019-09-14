<?php
error_reporting(0);
session_start();
$remove_item = $_GET['ProductID'];
	
	if(empty($_SESSION['order'])){
		$_SESSION['order'] = array();
	}
	$index = array_search($remove_item,$_SESSION["order"]);
	unset($_SESSION["order"][$index]);
	echo "<script> location.href='cart.php'; </script>";
?>