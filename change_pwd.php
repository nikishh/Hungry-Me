
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
<title>HungryMe-Manage Restaurants</title>
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
					<a href="admin_index.php"><img src="images/hungry.png" class="img-responsive" alt="Logo" width="90" height="30"/></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li class="active"><a href="admin_index.php">Home</a></li>|
						<li><a href="manage_restaurants.php">Manage Restaurants</a></li>|
						<li><a href="admin_create.php">Create Admin</a></li>|						
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


	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<script>
		function validate()
		{
			if((document.getElementById('new_pass').value).localeCompare(document.getElementById('con_pass').value)==0)
			{
				return true;
			}
			alert("Confirm your new password correctly!");
			return false;
		}
	</script>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="admin_pass.php" method="POST" onsubmit="return validate();"> 
				 <div class="register-top-grid">
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
					<h3>CHANGE PASSWORD</h3>
						<p style="color:red;">Fields marked with * are mandatory</p>
					</div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Current Password <c style="color:red;">*</c></span>
						<input type="password" name="curr_pass" id="curr_pass" autofocus="on" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>New Password <c style="color:red;">*</c></span>
						<input type="password" name="new_pass" id="new_pass" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Confirm Password <c style="color:red;">*</c></span>
						<input type="password" name="con_pass" id="con_pass" required /> 
					 </div>
					 <div class="register-but">
					   <center><input type="submit" value="Update Password" /></center>
					   <div class="clearfix"> </div>
					</div>
				   </form>
				</div>
		   </div>
	     </div>
	    </div>
	<div class="clearfix"></div>
		
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