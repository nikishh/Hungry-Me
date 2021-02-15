
<?php
	session_start();
	
	if(!isset($_SESSION['UserID']))
	{
//		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
	$_SESSION['count']++;
	
	array_push($_SESSION['cart'], $_GET['DISHID']);
	
	//print_r(array_values($_SESSION['cart']));
	
	header("Refresh:0, url=cust_orders-list.php?rid=$_SESSION[RestId]");
?>