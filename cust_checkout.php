
<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
//		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
	
	include_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>HungryMe-Cart</title>
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
	<script>
		function call()
		{
			alert(grand_total.getItem("tot"));
		}
	</script>
</head>
<body onload = "call()">
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
							<p><a href="remove_cart_dish.php" class="simpleCart_empty">Empty Cart</a></p>
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
						<li><a href="#">Help</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
	</div>
<div class="cart-items">
	<div class="container">
		<h1>My Meal</h1>			 
		<?php
			
			if($_SESSION['count']==0)
				echo "Cart is empty!<br>";
			else
			{
				for($i=0; $i<$_SESSION['count']; $i++)
				{
					$did = $_SESSION['cart'][$i];
					$res = mysqli_query($con, "SELECT * FROM menu_card WHERE Dish_Id='$did'");
					$row = mysqli_fetch_array($res);
					//<div class='close1'> </div>
					//<li><h5><a href='remove_cart_dish.php?cartDishRemove=$row[Dish_Id]'><input type='button' value='Remove'></a></h5></li>
					echo "<script>$(document).ready(function(c) {
							$('.close').on('click', function(c){
								$('.cart-header').fadeOut('slow', function(c){
									$('.cart-header').remove();
								});
								});	  
							});
						</script>
						 <div class='cart-header'>
							 
							 <div class='cart-sec simpleCart_shelfItem'>
									<div class='cart-item cyc'>
										 <img src='$row[Image_dish]' class='img-responsive' alt='Dish Image'>
									</div>
								   <div class='cart-item-info'>
									<h1><a href='#'>$row[Dish_Name] </a><!--span>Pickup time:</span--></h1>
									<ul class='qty'>
										<li><h4>Price: $row[Dish_Price]</h4></li>
										<li><h5>FREE delivery</h5></li>
										
									</ul>
								   </div>
								   <div class='clearfix'></div>
														
							  </div>
						 </div>";
					
				}
			}
		?>
			 
	</div>
		 <center><a href="cust_order.php"><input type="button" value="Place Order" <?php if($_SESSION['count']==0) echo "hidden";?>></a></center>
		 </div>
		 
<!-- checkout -->
	
	<!-- content-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>