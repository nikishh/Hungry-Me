<?php
	session_start();
	
	//$i = $_GET['cartDishRemove'];
	//echo $i;
	
	//print_r($_SESSION['cart']);
	
	//var_dump($_SESSION['cart']);
	
	for($i=0; $i<$_SESSION['count']; $i++)
		unset($_SESSION['cart'][$i]);
	
	$_SESSION['count']=0;
	
	//print_r($_SESSION['cart']);
	
	//var_dump($_SESSION['cart']);
	
	header("Refresh:0, url=cust_checkout.php");
?>