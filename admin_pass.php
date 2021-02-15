
<?php
	
	include_once('db.php');
	session_start();
	
	if($res=mysqli_query($con, "SELECT * FROM user WHERE User_Id='$_SESSION[UserID]'"))
	{
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			$en_pwd=md5($_POST['curr_pass']);
			
			if(strcmp($row['User_Pwd'], $en_pwd)==0)
			{
				if($up_res=mysqli_query($con, "UPDATE user SET User_Pwd='$en_pwd' WHERE User_Id='$_SESSION[UserID]'"))
					echo "<script>alert('Password successfully updated!');</script>";								
				else
					echo "<script>alert('Error updating password! Try again!');</script>";	
				header("Refresh:0, url=change_pwd.php");
			}
			else
				echo "<script>alert('You have entered the current password incorrectly! Try again!');</script>";
		}
		else
			echo "<script>alert('An Error occured! Try again!');</script>";			
	}
	else
		echo "<script>alert('You have entered an incorrect password!');</script>";

	header("Refresh:0, url=change_pwd.php");
	
	mysqli_close($con);
?>