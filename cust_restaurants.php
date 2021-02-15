

<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
//		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>HungryME-Restaurants</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>		
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="cust_index.php"><img src="images/hungry.png" class="img-responsive" alt="Logo" width="90" height="30"/></a>
				</div>
				<div class="queries">
					<p><br><br>Questions? Call us!<span> 8349377401 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="cust_checkout.php">
								<br><h3> <!--span class="simpleCart_total"> $0.00 </span--> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="cust_index.php">Home</a></li>|
						<li><a href="cust_restaurants.php">Restaurants</a></li>|
						<li><a href="cust_checkout.php">My Cart</a></li>|
						<li><a href="cust_myorders.php">My Orders</a></li>|
						<li><a href="cust_contact.php">Contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="logout.php">Logout</a>  </li> |
					
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
				</div>


	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
				<?php
					include_once('db.php');
					$res=mysqli_query($con, "SELECT * FROM restaurant");
					//reviews_ratings WHERE restaurant.R_Id=reviews_ratings.R_Id");
					while($row=mysqli_fetch_array($res))
					{
						echo "<div class='Popular-Restaurants-grid wow fadeInRight' data-wow-delay='0.4s'>
								<div class='col-md-3 restaurent-logo'>
								<img src='$row[R_Img]' class='img-responsive' alt='Sweet'/>
								</div>
								<div class='col-md-2 restaurent-title'>
									<div class='logo-title'>
										<h4><a href='#'>$row[R_Name]</a></h4>
									</div>
									<div><h5>$row[R_Address]</h5></div>
								</div>
								<div class='col-md-7 buy'>
									<a class='morebtn hvr-rectangle-in' href='cust_orders-list.php?rid=$row[R_Id]'>View Menu</a>
								</div>
								<div class='clearfix'></div>
								</div>";
					}
				?>
			</div>
		</div>
	</div>
	
	  <script type="text/javascript">
						$(document).ready(function() {
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>