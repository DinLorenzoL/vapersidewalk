<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="footervs.png">

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
								<li class="active"><a href="shop.php">Shop</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="icon-shopping-cart"></i> Cart</a></li>
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
				   					<h1>Products</h1>
				   					<h2 class="bread"><span><a href="index.php">Home</a></span> <span>Shop</span></h2>
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
					<div class="row">
					

					<div class="col-md-10 col-md-push-2">

						<div class="row row-pb-lg">
						<?php
						if(isset($_GET['searchSubmit'])){
		                    include("SQL.php");
		                    $SearchFilter = $_GET['search_filter'];

		                    $sql = "SELECT * FROM product WHERE Name LIKE '$SearchFilter%'";
		                    $result = $conn->query($sql);


		                    if($result->num_rows > 0)
		                    {                   
		                        while($row = $result->fetch_assoc()){?>
								<div class="col-lg-4 text-center" >
									<div class="product-entry" style="border-style: solid;border-width: 1px;box-shadow: 5px 10px #888888;">
										<div class="product-img" style="background-image: url(../ThesisKenji/uploads/<?php echo $row['Image'];?>);">
											<div class="cart">
												<p>
													<span class="addtocart"><a href="addtocart.php?ProductID=<?php echo $row['ProductID'];?>"><i class="icon-shopping-cart"></i></a></span> 
													<span><a href="search-result.php?ProductID=<?php echo $row['ProductID'];?>"><i class="icon-eye"></i></a></span> 
												</p>
											</div>
										</div>
										<div class="desc">
											<h3><a href="search-result.php?ProductID=<?php echo $row['ProductID'];?>"><?php echo $row['Name']; ?></a></h3>
											<p class="price"><span>P<?php echo $row['Price']; ?></span></p>
										</div>
									</div>
								</div>
						
						<?php } }
						else
						{
							echo "<center>";
							echo "<h1> SEARCH NO RESULT </h1>";
							echo "<p> We're sorry. We cannot find any matches for your search term. </p>";
							echo "</center>";
						}
						 } ?>
						

	                    <?php
	                    error_reporting(0);
	                    include("SQL.php");



						if(($_GET['filteron']) == "Accessories"){
							$sql = "SELECT * FROM product WHERE Category = 'Accessories'";
							$result = $conn->query($sql);							
						}
						if(($_GET['filteron']) == "Mods"){
							$sql = "SELECT * FROM product WHERE Category = 'Mods'";
							$result = $conn->query($sql);
						}
						if(($_GET['filteron']) == "Batteries"){
							$sql = "SELECT * FROM product WHERE Category = 'Batteries'";
							$result = $conn->query($sql);
						}
						if(($_GET['filteron']) == "Atomizer"){
							$sql = "SELECT * FROM product WHERE Category = 'Atomizer'";
							$result = $conn->query($sql);
						}
						if(($_GET['filteron']) == "Juices"){
							$sql = "SELECT * FROM product WHERE Category = 'Juice'";
							$result = $conn->query($sql);
						}
						if(($_GET['filteron']) != "Juices" && ($_GET['filteron']) != "Atomizer" && ($_GET['filteron']) != "Batteries" && ($_GET['filteron']) != "Mods" && ($_GET['filteron']) != "Accessories" && ($_GET['search_filter']) == ""){
							$sql = "SELECT * FROM product ORDER BY RAND()";
							$result = $conn->query($sql);
						}


	                    if($result->num_rows > 0)
	                    {                   
                        while($row = $result->fetch_assoc()){ ?>
							<div class="col-lg-4 text-center" >
								<div class="product-entry" style="border-style: solid;border-width: 1px;box-shadow: 5px 10px #888888;">
									<div class="product-img" style="background-image: url(../ThesisKenji/uploads/<?php echo $row['Image'];?>);">
										<div class="cart">
											<p>
												<span class="addtocart"><a href="addtocart.php?ProductID=<?php echo $row['ProductID'];?>"><i class="icon-shopping-cart"></i></a></span> 
												<span><a href="product-detail.php?ProductID=<?php echo $row['ProductID'];?>"><i class="icon-eye"></i></a></span> 
											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="product-detail.php?ProductID=<?php echo $row['ProductID'];?>"><?php echo $row['Name']; ?></a></h3>
										<p class="price"><span>P<?php echo $row['Price']; ?></span></p>
									</div>
								</div>
							</div>
							<?php }} ?>
							
							
						</div>

						
					</div>

					<div class="col-md-2 col-md-pull-10">
						<div class="sidebar">
							<div class="side">
								<h2>Filter Category</h2>
								<form method="get" class="colorlib-form-2" action = "shop.php">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <div class="form-field">
				                      <select class="form-control" name=filteron>
									<option value='Atomizer'>Atomizer</option>
									<option value='Accessories'>Accessories</option>
									<option value='Batteries'>Batteries</option>
									<option value='Juices'>Juices</option>
									<option value='Mods'>Mods</option>
								</select>
								<br>
								<button type=submit class="form-control">Filter</button>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </form>
							</div>
							<div class="side">
								<h2></h2>
								<div class="size-wrap">
									<p class="size-desc">
										<h2> <a href="CustomizeVape.php">CUSTOMIZE VAPE </a> </h2>
									</p>
								</div>
							</div>
						</div>
					</div>
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

	</body>
</html>

