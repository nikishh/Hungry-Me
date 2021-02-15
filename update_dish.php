 <!-- Description: Manager can update the dishes on the menu. -->

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
<title>HungryMe-Manage Menu Card</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<body>
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
				
				$res=mysqli_query($con, "SELECT * FROM menu_card WHERE R_Id='$_SESSION[rid]'");

				echo "<table border='1'>
						  <tr>
							<th>Dish ID</th>
							<th>Dish Name</th>
							<th>Dish Price</th>
							<th>Available</th>
						  </tr>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<tr>
							<form action='update_dish_submit.php?did=$row[Dish_Id]' method='POST'>
							<td>$row[Dish_Id]</td>
							<td><input type='text' value='$row[Dish_Name]' name='dname'></td>
							<td><input type='text' value='$row[Dish_Price]' name='dprice'></td>
							<td><input type='text' name='avail' value='";if($row['Dish_Available']==1) echo "Yes'"; else echo "No'>"; 
							echo "</td>
							<td><input type='submit' value='Update'/></td>
							</form>
						  </tr>";
				}
				echo "</table>";
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