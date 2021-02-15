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
<title>HungryMe-Add Dishes</title>
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
	<script>
			function readURL(input)
			{
				if(input.files && input.files[0])
				{
					var reader=new FileReader();
					reader.onload=function(e)
					{
						$('#pics').attr('src',e.target.result);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}

	</script>
<script>
	function generateRandomString()
	{
		var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		var str_length =6;
		var randomString ='';
		for(var i=0; i<str_length;i++)
		{
			var num = Math.floor(Math.random()*chars.length);
			randomString += chars.substring(num, num+1);
		}
		
		document.getElementById('new_pass').value = randomString;
	}
</script>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	<form action="add_dish_submit.php" method="POST"> 
				 <div class="register-top-grid">
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
					<h3>Add dishes</h3>
						<p style="color:red;">Fields marked with * are mandatory</p>
					</div>
											
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Dish Name <c style="color:red;">*</c></span>
						<input type="text" name="dname" autofocus="on" pattern="[A-Za-z ]+[A-Za-z]+" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Quantity Available <c style="color:red;">*</c></span>
						<input type="text" name="davail" pattern="[0-9]{2,4}+" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Dish Price <c style="color:red;">*</c></span>
						<input type="text" name="dprice" pattern="[0-9]{2,4}" required /> 
					 </div>
					<br>
						<div class="register-but">
					   <center><input type="submit" value="Add Dish" /></center>
					   <div class="clearfix"> </div>
					</div>
				</div>
			</form>
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