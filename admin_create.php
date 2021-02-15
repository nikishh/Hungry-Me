
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
<title>HungryMe-Create Admin</title>
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
						<li><a href="admin_index.php">Home</a></li>|
						<li><a href="admin_res.php">Manage Restaurants</a></li>|
						<li><a href="admin_create.php">Create Admin</a></li>|						
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
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="admin_register.php" method="POST"> 
				 <div class="register-top-grid">
					<div class="wow fadeInLeft" data-wow-delay="0.4s">
					<h3>CREATE NEW ADMIN ACCOUNT</h3>
						<p style="color:red;">Fields marked with * are mandatory</p>
					</div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name <c style="color:red;">*</c></span>
						<input type="text" name="fname" autofocus="on" pattern="[A-Za-z]+" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Last Name <c style="color:red;">*</c></span>
						<input type="text" name="lname" pattern="[A-Za-z]+" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Mobile No. <c style="color:red;">*</c></span>
						<input type="text" name="mobile" pattern="[0-9]{10,11}" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Email Address <c style="color:red;">*</c></span>
						 <input type="text" name="email" pattern="[a-zA-Z0-9.-_]+@[a-z]+\.[a-z]{2,3}" required /> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						 <span>Address <c style="color:red;">*</c></span>
						 <input type="text" name="address" required /> 
					 </div>
					 </div>
					 
				     <div class="register-bottom-grid">
						 <div class="wow fadeInLeft" data-wow-delay="0.4s">
							<span>Password <c style="color:red;">*</c></span>
							<input type="password" min="8" name="new_pass" required />
						 </div>
					 </div>
					<div class="clearfix"> </div>
					<div class="register-but">
					   <center><input type="submit" value="Create Admin" /></center>
					   <div class="clearfix"> </div>
					</div>
				   </form>
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