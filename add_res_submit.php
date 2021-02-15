
<?php
	session_start();
	include_once('db.php');
	
	if(!isset($_SESSION['UserID']))
	{
		echo "<script>alert('Session Expired! Please Login again.');</script>";
		header("Refresh:0, url=login.html");
		exit;
	}
	$img="images/".$_POST['picture'];
	$en_pwd = md5($_POST['new_pass']);
	
	$sql1="INSERT INTO user (User_Pwd, User_Type, User_Fname, User_Lname, User_Mobile, User_Email, User_Address) VALUES ('$en_pwd', 'Rest_Owner', '$_POST[fname]', '$_POST[lname]', '$_POST[mobile]', '$_POST[email]', '$_POST[address]')";
	
	if($res1=mysqli_query($con, $sql1))
	{
		$last_res=mysqli_query($con, "SELECT * FROM user ORDER BY User_Id DESC LIMIT 1");
		$last_row=mysqli_fetch_array($last_res);
			
		email_send($_POST['email'], $_POST['new_pass'], $_POST['fname']);
		
		$sql = "INSERT INTO restaurant (R_Name, R_OwnerId, R_Phno, R_MenuId, R_Address, R_Img) VALUES ('$_POST[rname]', '$last_row[User_Id]', '$_POST[phno]', '$_POST[menu]', '$_POST[res_addr]', '$img')";
	
		$res = mysqli_query($con, $sql);
	
		if($res)
		{
			echo "Successful Registeration!";
			header("Refresh:2, url=admin_res.php");
		}
		else
		{
			echo "Registeration failed! Try again!". mysqli_connect_error();
			header("Refresh:1, url=admin_res.php");
		}
	}
	else
	{
		echo "<script>alert('Failed to create Owner account!');</script>";
		header("Refresh:0, url=add_res.php");
	}
			/* Code To Send E-Mail */	

	function email_send($mail, $pwd, $name)
	{
		$content = "Hello, ".$name."! Your Password is: ".$pwd;
		
		$mail_to = $mail;
		$mail_sub = "Password";
		$mail_content = $content;
		$From_name="No-Reply";
			
		require_once('PHPMailer-master/class.phpmailer.php');
		$mail = new PHPMailer(true);
		$mail->IsSMTP(); // telling the class to use SMTP
		
		try
		{
			$mail->Host       = "smtp.gmail.com";   // SMTP server
			$mail->SMTPAuth   = true;              // enable SMTP authentication
			$mail->SMTPSecure = "ssl";            // sets the prefix to the servier  
			$mail->Port       = 465;             // set the SMTP port for the GMAIL
	  
			$mail->Username   = "INSERT YOUR GMAIL USERNAME";  // GMAIL username
			$mail->Password   = "ENTER ACCOUNT PASSWORD";            // GMAIL password
			$mail->FromName = "No-Reply";
			$mail->AddReplyTo("GMAIL USERNAME","No-Reply");
			$mail->addAddress($mail_to,"User 1");
			$mail->Subject = $mail_sub;
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // 
			$mail->Body = $mail_content;
			if($mail->Send())
			{
				
			}
			else
			{
				
			}
		}
		catch (phpmailerException $e) 
		{
			echo $e->errorMessage(); 
		} 
		catch (Exception $e) 
		{
			echo $e->getMessage(); 
		} 
	}
?>
