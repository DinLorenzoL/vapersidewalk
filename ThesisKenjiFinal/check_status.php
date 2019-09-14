<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html>
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
				<center>
				<h1> ORDER STATUS </h1>
				</center>
				<hr>

				<?php
				$OrderID = $_GET['OrderID'];
				include("SQL.php");
				$Total = 0;
				$TotalOrder = "";
							$sql = "SELECT * FROM orders WHERE OrderID = '" . $OrderID . "'";
				              $result = $conn->query($sql);

				                if($result->num_rows > 0)
					            {                   
					                while($row = $result->fetch_assoc()){ 	

					                ?>
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
										<input type="text" id="fname" name="FirstnameTxt" class="form-control" placeholder="Your firstname" value="<?php echo $row['Firstname']; ?>" onkeypress="return lettersOnly()" required readonly>
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" name="LastnameTxt" class="form-control" placeholder="Your lastname" value="<?php echo $row['Lastname']; ?>" onkeypress="return lettersOnly()" required readonly>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">House Number, Building and Street Name</label>
			                    	<input type="text" id="address" name="HouseTxt" class="form-control" placeholder="Enter Your House Number, Building and Street Name" required value="<?php echo $row['House']; ?>" readonly>
			                  </div>
			                  <div class="form-group">
			                    	
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Town/City</label>
			                    	<input type="text" id="towncity" name="CityTxt" class="form-control" placeholder="E.g. Caloocan" onkeypress="return lettersOnly()" required value="<?php echo $row['City']; ?>" readonly>
			                  </div>
			               </div>
		
								<div class="form-group">
									<div class="col-md-6">
										<label for="lname">Zip/Postal Code</label>
										<input type="text" id="zippostalcode" name="ZipTxt" class="form-control" placeholder="E.g. 1221" onkeypress="return numbersOnly(event)" required value="<?php echo $row['Zipcode']; ?>" readonly>
									</div>
									<div class="col-md-6">
										<label for="email">E-mail Address</label>
										<input type="text" id="email" name="EmailTxt" class="form-control" placeholder="E.g. juandelacruz@example.com" required value="<?php echo $row['Email']; ?>" readonly>
									</div>
									<div class="col-md-6">
										<label for="Phone">Phone Number</label>
										<input type="text" id="zippostalcode" name="MobileTxt" class="form-control" placeholder="E.g. 09090000000" onkeypress="return numbersOnly(event)" required value="<?php echo $row['Mobile']; ?>" readonly>
									</div>
									<div class="col-md-6">
										<label for="email">Other Notes</label>
										<input type="text" id="email" name="NotesTxt" class="form-control" placeholder="Special Message" value="<?php echo $row['Notes']; ?>" readonly>
									</div>
								</div>
		              </div>
		            
					</div>
					
							                
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Cart Total</h2>
							<ul>
								<li>
									<span>Subtotal</span> <span>P<?php echo $row['Total']; ?>.00</span>
									<textarea class="form-control" name="ItemsTxt" readonly><?php echo $row['Items']; ?></textarea>
								</li>
								<li><span>Shipping</span> <span>P100.00</span></li>
								<li><span  name="">Order Total</span> <input type="text" name="TotalTxt" class="form-control" value="<?php echo $row['Total'] + 100; ?>" readonly> </li>
							</ul>
						</div>
						<div class="cart-detail">
							<h2>Order Status</h2>
							<div class="form-group">
								<div class="col-md-12">
									<p><strong>Status:</strong> <?php echo $row['OrderStatus']; ?></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="index.php"><button type="button" class="btn btn-danger btn-block"> Back to Homepage </button></a>
							</div>
						</div>
					</div>
					</form>
					<?php }} ?>
					
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Recommended Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
										<span class="addtocart"><a href="product-detail.php?ProductID=<?php echo $row['ProductID']?>"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.php?ProductID=<?php echo $row['ProductID']?>"><i class="icon-eye"></i></a></span> 
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
    

    
    
?>
