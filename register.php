<?php

	include_once('db.php');
	
	$en_pass = md5($_POST['new_pass']);
	
	$sql = "INSERT INTO user (User_Pwd, User_Type, User_Fname, User_Lname, User_Mobile, User_Email, User_Address) VALUES('$en_pass', 'Customer', '$_POST[fname]', '$_POST[lname]', '$_POST[mobile]', '$_POST[email]', '$_POST[address]')";
	
	$res = mysqli_query($con, $sql);
	
	if($res)
	{
		echo "Successful Registeration! Login and order your meal now! :)";
		header("Refresh:2, url=login.html");
	}
	else
	{
		echo "Registeration failed! Try again!". mysqli_connect_error();
		header("Refresh:1, url=login.html");
	}
	
	mysqli_close($con);
?>
