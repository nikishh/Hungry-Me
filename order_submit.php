
<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>HungryMe-Order</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
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
					<a href="admin_index.php"><img src="images/hungry.png" class="img-responsive" alt="Logo" width="90" height="30"/></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="res_index.php">Home</a></li>|
						<li><a href="manage_menu.php">Manage Menu</a></li>|
						<li><a href="view_orders.php">View Orders</a></li>|						
						<li><a href="#">Contact Info</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="change_pwd.php">Change Password</a></li> |
						<li><a href="logout.php">Logout</a>  </li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
	</div>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	<?php
				include_once('db.php');
				
				$date = date('Y-m-d H:i:s');
								
				$dishes = array();
				
				$dishes = implode(',', $_SESSION['cart']);
				
				$res=mysqli_query($con, "INSERT INTO orders (R_Id, Dishes_Ordered, Order_Time, Order_Bill, Order_CustId, Order_Status) VALUES ('$_SESSION[RestId]', '$dishes', '$date', '$_SESSION[total]', '$_SESSION[UserID]', 'OutForDelivery')");
                $re=mysqli_query($con, "UPDATE menu_card
                                        SET Dish_Available = Dish_Available-1
                                        WHERE Dish_Id IN ($dishes)");
				$rt=mysqli_query($con,"SELECT Dish_Available
				                       FROM menu_card
									   WHERE Dsh_Id IN ($dishes)");
				if($res)
				{
					echo "<script>alert('Order placed successfully');</script>";
					header("Refresh:0, url=cust_index.php");
				}
				else
				{
					echo "<script>alert('Order could not be placed! Try again!');</script>";					
					header("Refresh:0, url=cust_orders-list.php");
				}
			?>			
		   </div>
	     </div>
	    </div>
	<div class="clearfix"></div>
		
	
	  <script type="text/javascript">
						$(document).ready(function() {
							
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>