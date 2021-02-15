
<?php
	
	include_once('db.php');

	$sql = "SELECT * FROM user";
	$flag=0;
		
	if($res=mysqli_query($con, $sql))
	{
		while($row = mysqli_fetch_assoc($res))
		{
			$en_pass = md5($_POST['pwd']);
			
			if((strcmp($row['User_Email'],"$_POST[email_id]")==0) && (strcmp($row['User_Pwd'], $en_pass)==0))
			{
				session_start();
				$_SESSION['UserID']=$row['User_Id'];
				
				$flag=1;
				
				if(strcmp($row['User_Type'], "Customer")==0)
					header("Refresh:0, url=cust_index.php");
				
				else if(strcmp($row['User_Type'], "Admin")==0)
					header("Refresh:0, url=admin_index.php");
				
				else if(strcmp($row['User_Type'], "DeliveryPerson")==0)
					header("Refresh:0, url=del_index.php");
				
				else
					header("Refresh:0, url=res_index.php");
			}
		}
		if($flag==0)
		{
			echo "<script>alert('Invalid Login!');</script>";
			header("Refresh:0, url=login.html");
		}
	}
	
	else
	{
		echo "<script>alert('An Error occured. Try again!');</script>";
		header("Refresh:0, url=login.html");
	}
	mysqli_close($con);
?>