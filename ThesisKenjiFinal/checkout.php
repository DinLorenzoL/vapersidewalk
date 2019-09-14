<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html>
<?php 
session_start(); 
include("SQL.php");

if(empty($_SESSION['order'])&&empty($_SESSION['inclusion'])){
		echo "<script> alert('Orders are empty! Please select at least one.'); </script>";
		echo "<script> location.href='build.php' </script>";
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
	<script>
            function lettersOnly() 
            {
                        var charCode = event.keyCode;

                        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 32)
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
				   					<h1>Checkout</h1>
				   					<h2 class="bread"><span><a href="index.php">Home</a></span> <span><a href="cart.php">Shopping Cart</a></span> <span>Checkout</span></h2>
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
							<div class="process text-center active">
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
				<div class="row">
					<div class="col-md-7">
						<form action="checkout.php" method="POST" class="colorlib-form">
							<h2>Billing Details</h2>
		              	<div class="row">
			               <div class="col-md-12">

			               </div>
			               <div class="form-group">
									<div class="col-md-6">
										<label for="fname">First Name</label>
										<input type="text" id="fname" name="FirstnameTxt" class="form-control" placeholder="Your firstname" onkeypress="return lettersOnly()" required>
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" name="LastnameTxt" class="form-control" placeholder="Your lastname" onkeypress="return lettersOnly()" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">House Number, Building and Street Name</label>
			                    	<input type="text" id="address" name="HouseTxt" class="form-control" placeholder="Enter Your House Number, Building and Street Name" required>
			                  </div>
			                  <div class="form-group">
			                    	
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Town/City</label>
			                    	<input type="text" id="towncity" name="CityTxt" class="form-control" placeholder="E.g. Caloocan" onkeypress="return lettersOnly()" required>
			                  </div>
			               </div>
		
								<div class="form-group">
									<div class="col-md-6">
										<label for="lname">Zip/Postal Code</label>
										<input type="text" id="zippostalcode" name="ZipTxt" class="form-control" placeholder="E.g. 1221" onkeypress="return numbersOnly(event)" required>
									</div>
									<div class="col-md-6">
										<label for="email">E-mail Address</label>
										<input type="text" id="email" name="EmailTxt" class="form-control" placeholder="E.g. juandelacruz@example.com" required>
									</div>
									<div class="col-md-6">
										<label for="Phone">Phone Number</label>
										<input type="text" id="zippostalcode" name="MobileTxt" class="form-control" placeholder="E.g. 09090000000" onkeypress="return numbersOnly(event)" required>
									</div>
									<div class="col-md-6">
										<label for="email">Other Notes</label>
										<input type="text" id="email" name="NotesTxt" class="form-control" placeholder="Special Message">
									</div>
								</div>
		              </div>
		            
					</div>
					<?php 
						include("SQL.php");

						$Total = 0;
						$TotalOrder = "";

						foreach ($_SESSION['order'] as $item) {
							$itemCount++;
						}

								foreach($_SESSION['order'] AS $order){
									$sql = "SELECT * FROM product WHERE ProductID = '" . $order . "'";

					                  $result = $conn->query($sql);

					                    if($result->num_rows > 0)
							            {                   
							                while($row = $result->fetch_assoc()){ 	
												
											if ($itemCount >= 5) {
												$priceDiscount = 0.10;
												$discount = ($Total + $row['Price']) * $priceDiscount;
											}

							                $Total = $Total + $row['Price'];
							                $TotalOrder = $TotalOrder . $row['Name'].", ";
							                ?>
							                <?php }}} ?>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Cart Total</h2>
							<ul>
								<li>
									<span>Subtotal</span> <span>P<?php echo $Total; ?>.00</span>
									<textarea class="form-control" name="ItemsTxt" readonly><?php echo $TotalOrder; ?></textarea>
								</li>
								<li><span>Shipping</span> <span>P200.00</span></li>
								<li><span  name="">Order Total</span> <input type="text" name="TotalTxt" class="form-control" value="<?php echo ($Total + 200) - $discount; ?>" readonly> </li>
							</ul>
						</div>
						<div class="cart-detail">
							<h2>Payment Method</h2>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio" checked>Cash on delivery</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
									   <?php 
									   $x = rand(1, 10);
									   $y = rand(1, 10);
									   $z = $x + $y;
									    ?>
									   <input type="text" class="form-control" name="Captcha" placeholder="<?php echo $x ." + ". $y; ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" name="formSubmit" class="btn btn-primary btn-block" value="Place an order">
							</div>
						</div>
					</div>

					<input type="hidden" name="Answer" value="<?php echo $z; ?>">
					</form>

					
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Products you might like</span></h2>
						<p>Vapersidewalk would like to give you some products that you might wanna give a try.</p>
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
<?php
    if(isset($_POST['formSubmit'])){



    
include("SQL.php");

foreach($_SESSION['order'] AS $order){
	$sql = "SELECT * FROM product WHERE ProductID = '" . $order . "'";

      $result = $conn->query($sql);

        if($result->num_rows > 0)
        {                   
            while($row = $result->fetch_assoc()){ 	
            $UpdateQuantity = $row['Quantity'] - 1;
                $sql2 = "UPDATE `product` SET `Quantity`='".$UpdateQuantity. "' WHERE `ProductID` =". $order; 
                $result2 = $conn->query($sql2);
		    	if($result2)
		    	{  

		        }
			}
		}
	}
				
				$Captcha = $_POST['Captcha'];
				$GetAnswer = $_POST['Answer'];

                $Firstname = $_POST['FirstnameTxt'];
				$Lastname = $_POST['LastnameTxt'];
				$House = $_POST['HouseTxt'];
				$City = $_POST['CityTxt'];
				$Zipcode = $_POST['ZipTxt'];
				$Email = $_POST['EmailTxt'];
				$Mobile = $_POST['MobileTxt'];
				$Notes = $_POST['NotesTxt'];
				$Items = $_POST['ItemsTxt'];
				$Total = $_POST['TotalTxt'];
				$Status = "Pending";

				include("SQL.php");

				if($Captcha == $GetAnswer){
					$query = "INSERT INTO orders(OrderID, Firstname, Lastname, House, City, Zipcode, Email, Mobile, Notes, Items, Total, Status) VALUES('','" .$Firstname. "', '" .$Lastname. "', '" .$House. "', '" .$City. "', '" .$Zipcode. "', '" . $Email . "', '" . $Mobile. "', '" . $Notes. "', '" . $Items. "', '" . $Total. "', '" . $Status . "')";
   					if(mysqli_query($conn, $query))
                    	 {
						             echo "<script> alert('Successfully added'); </script>";
						             echo "<script> location.href='complete.php'; </script>";
						       }
						 else
						       {
						             echo "Error: " . $query . "<br>" . mysqli_error($conn);
						             echo "<script> alert('Error'); </script>";
						       }
						 mysqli_close($conn);
					session_destroy();
				}

				
			    }
    

    
    
?>
