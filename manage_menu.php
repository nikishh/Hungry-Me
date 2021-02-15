
<?php
	session_start();
		
	if(!isset($_SESSION['UserID']))
	{
//		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
	include_once('db.php');
	$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_OwnerId='$_SESSION[UserID]'");
	
?>

<!DOCTYPE html>
<html>
<head>
<title>HungryMe-Menu Card</title>
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
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="res_index.php"><img src="images/hungry.png" class="img-responsive" alt="Logo" width="90" height="30"/></a>
				</div>
				<div class="queries">
					<p><br><br>Questions? Call us!<span> 8349377401 </span><label>(11AM to 11PM)</label></p>
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
	<div class="orders">
	<div class="container">
		<div class="order-top">
			<center>
				<a href="del_dish.php"><input type="button" value="Delete Dishes"/></a>&emsp;
				<a href="add_dish.php"><input type="button" value="Add Dishes"/></a>&emsp;
				<a href="update_dish.php"><input type="button" value="Update Dishes"/></a>
			</center>			<br>
		  	<?php
				include_once('db.php');
				
				$res_test=mysqli_query($con, "SELECT R_Id FROM restaurant WHERE R_OwnerId='$_SESSION[UserID]'");
				$row_test=mysqli_fetch_array($res_test);
				
				$_SESSION['rid']=$row_test['R_Id'];
				
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$row_test[R_Id]'");
				
				echo "<table border='1'>
						  <tr>
							<th>Dish ID</th>
							<th>Dish Name</th>
							<th>Dish Price</th>
							<th>Dish Quantity Available<th>
						  </tr>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<tr>
							<td>$row[Dish_Id]</td>
							<td>$row[Dish_Name]</td>
							<td>$row[Dish_Price]</td>
							<td>$row[Dish_Available]</td>
						  </tr>";
				}
				echo "</table>";
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