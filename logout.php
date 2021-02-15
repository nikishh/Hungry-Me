
<?php
		session_start();
		
		unset($_SESSION['UserID']);				//Unset the session variable to logout
		
		header("Refresh:0, url=index.html");	//Redirect the user to login page on successful logout
?>