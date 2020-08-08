<?php

	if (isset($_POST['submit'])) 
	{
		# code...
		$conn = mysqli_connect('127.0.0.1', 'root', '', 'foodDeliverManagementSystem');
		$sql= 'select * from registration where username="'.$_POST['username'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			# code...
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...
				$sql1="INSERT INTO registration (name, email, username, password, gender, dateofbirth, usertype) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['date']."', '".$_POST['usertype']."')";
				mysqli_query($conn,$sql1);
				echo "done";
			}
			else
			{
				echo "Password doesn't match";
			}
			mysqli_close($conn);
		}
		else
		{
			echo "Username already exists";
		}
	}
	else
	{
		header("location: registration.html")
	}
	

?>

