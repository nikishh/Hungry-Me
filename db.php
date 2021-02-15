
<?php
	$con = mysqli_connect('localhost', 'root', '', 'hungry_me');
	
	if(!$con)
	{
		echo "Error: Connection could not be established to the server!";
	}
?>