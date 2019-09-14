<?php error_reporting(0); ?>
<!DOCTYPE HTML>

<html>
<?php 
session_start(); 
include("SQL.php");

if(empty($_SESSION['order'])&&empty($_SESSION['inclusion'])){
		echo "<script> alert('Orders are empty! Please select at least one.'); </script>";
		echo "<script> location.href='shop.php' </script>";
	}
?>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">VAPER SIDEWALK</a></div>
						</div>

						<form action="shop.php" method="GET">
							<div class="col-md-8 col-md-push-2" style="border: 1px solid black;border-radius: 5px;">
								<input type="text" name="search_filter" class="form-control" placeholder="Search">
							</div>
							<div class="col-md-2">
								<input type="submit" class=" btn-success" style="width: 125%;height: 52px;border-radius: 10px;" name="searchSubmit" class="form-control" placeholder="Search">
							</div>
						</form>

						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li  class="active"><a href="cart.php"><i class="icon-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</nav>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Shopping Cart</h1>
				   					<h2 class="bread"><span><a href="index.php">Home</a></span> <span><a href="shop.php">Product</a></span> <span>Shopping Cart</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center">
								<span>Remove</span>
							</div>
						</div>

						<?php 
						include("SQL.php");

						$Total = 0;
								foreach($_SESSION['order'] AS $order){
									$sql = "SELECT * FROM product WHERE ProductID = '" . $order . "'";

					                  $result = $conn->query($sql);

					                    if($result->num_rows > 0)
							            {                   
							                while($row = $result->fetch_assoc()){ 	

							                $Total = $Total + $row['Price'];
							                ?>

							                

										<div class="product-cart">
											<div class="one-forth">
												<div class="product-img" style="background-image: url(../ThesisKenji/Uploads/<?php echo $row['Image']; ?>);">
												</div>
												<div class="display-tc">
													<h3><?php echo $row['Name']; ?></h3>
												</div>
											</div>
											<div class="one-eight text-center">
												<div class="display-tc">
													<span class="price">P<?php echo $row['Price']; ?></span>
												</div>
											</div>
											<div class="one-eight text-center">
												<div class="display-tc">
													<span class="price">$<?php echo $row['Price']; ?></span>
												</div>
											</div>
											<div class="one-eight text-center">
												<div class="display-tc">
													<a href="removetocart.php?ProductID=<?php echo $row['ProductID']; ?>" class="closed"></a>
												</div>
											</div>


										</div>
										<?php }}} ?>

									</div>
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>P<?php echo $Total; ?>.00</span></p>
											<p><span>Delivery:</span> <span>P200.00</span></p>
											<p><span>Discount:</span> <span>P0.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>P<?php echo $Total+200; ?>.00</span></p>
										</div>


									</div>
									<br>
									<a href="checkout.php"><button type="button" class="btn btn-primary btn-block">Order now!</button></a>
									<a href="shop.php"><button type="button" class="btn btn-warning btn-block">Continue Shopping</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Recommended Products</span></h2>
						<p>Vapersidewalk ensures that our product is in high quality and ensures to keep the safety of our beloved customers while enjoying vape.</p>
					</div>
				</div>
				<div class="row">
					<?php
                    include("SQL.php");
                    $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 4";
                    $result = $conn->query($sql);


                    if($result->num_rows > 0)
                    {                   
                        while($row = $result->fetch_assoc()){ ?>

					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(../ThesisKenji/Uploads/<?php echo $row['Image']; ?>);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.php?ProductID=<?php echo $row['ProductID']?>"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.php"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail.php?ProductID=<?php echo $row['ProductID']?>"><?php echo $row['Name']; ?></a></h3>
								<p class="price"><span>P<?php echo $row['Price']; ?>.00</span></p>
							</div>
						</div>
					</div>
					<?php }} ?>
				</div>
			</div>
		</div>


		<div id="colorlib-subscribe"><div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Status Checker</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe" action="check_status.php" method="GET">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter your reference number" ID="email" name="OrderID">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3">
						<h4><i class="icon-location"> </i>Vapersidewalk Uno</h4>
						<ul class="colorlib-footer-links">
							<li>Bustamante street Monumento,  <br> Caloocan City</li>
							<li><a href="tel://1234567920">+63 995 783 5614</a></li>
						</ul>
					</div>


					<div class="col-md-3">
						<h4><i class="icon-location"> </i>Vapersidewalk Dos</h4>
						<ul class="colorlib-footer-links">
							<li>Manggahan street bagong bario,<br> Caloocan City</li>
							<li><a href="tel://1234567920">+63 995 783 5614</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4><i class="icon-location"> </i>Vapersidewalk Tres</h4>
						<ul class="colorlib-footer-links">
							<li>Gen Luis street Bagbaguin,<br> Caloocan City</li>
							<li><a href="tel://1234567920">+63 995 783 5614</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4><i class="icon-location"> </i>Vapersidewalk Kwatro </h4>
						<ul class="colorlib-footer-links">
							<li>Menor bustos, <br> Bulacan</li>
							<li><a href="tel://1234567920">+63 995 783 5614</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</script>

	</body>
</html>

