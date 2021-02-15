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
<title>HungryMe-Myorderd</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
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
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body onload = "call()">
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="cust_index.php"><img src="images/hungry.png" class="img-responsive" alt="Logo" width="90" height="30"/></a>
				</div>
				<div class="queries">
					<p><br>Questions? Call us!<span> 8349377401 </span><label>(11AM to 11PM)</label></p>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="cust_checkout.php">
								<br><h3>(<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
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
						<li><a href="logout.php">Logout</a>  </li> 
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
	</div>
	<div class="orders">
	<div class="container">
		<div class="order-top">

		<h1>My Orders</h1>	
		<br>
   	
		<?php
							
					$did = $_SESSION['UserID'];
					$res = mysqli_query($con, "SELECT * FROM orders WHERE Order_CustId='$did'");
					if(mysqli_num_rows($res) > 0){
					
					//$row = mysqli_fetch_array($res);
					//<div class='close1'> </div>
					//<li><h5><a href='remove_cart_dish.php?cartDishRemove=$row[Dish_Id]'><input type='button' value='Remove'></a></h5></li>
				echo"<table class='table' border='1'>
                       <thead>
                     <tr>
                       <th>Order Id</th>
                       <th>Order Bill Amount</th>
                       <th>Order Time</th>
                       <th>Status</th>
                     </tr>";
				while($row=mysqli_fetch_array($res))
				{
					echo "
						
						<tr>									
									    <td><h5> $row[Order_Id]</h5></td>
										<td><h5> $row[Order_Bill]</h5></td>
										<td><h5> $row[Order_Time]</h5></td>
										<td><h5> $row[Order_Status]</h5></td>								   
								   <div class='clearfix'></div>
						 </tr>";
						 
				}
					echo"</table>";
					}	
					else{
						
						echo"<font color=red><h1><center>NO order Placed</center></h1></font>";
					}
			
		?>
				</div>
</div>
	 
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