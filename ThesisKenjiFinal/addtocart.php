<?php
error_reporting(0);
session_start();

	if(empty($_SESSION['order'])){
		$_SESSION['order'] = array();
	}
	if(($_GET['modsselect']) != 0){array_push($_SESSION['order'], $_GET['modsselect']);}
	if(($_GET['batteriesselect']) != 0){array_push($_SESSION['order'], $_GET['batteriesselect']);}
	if(($_GET['atomizerselect']) != 0){array_push($_SESSION['order'], $_GET['atomizerselect']);}
	array_push($_SESSION['order'], $_GET['ProductID']);
		echo "<script> alert('Order Added'); </script>";
		echo "<script> location.href='shop.php'; </script>";
?>

