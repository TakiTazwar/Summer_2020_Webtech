<?php
session_start();
if(isset($_POST['submit']))
{
	if(!empty($_POST['email']))
	{
		
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'foodDeliverManagementSystem');
	$sql = "select * from registration where email= '".$_POST['email']."'" ;
	echo $sql;
	$result = mysqli_query($conn,$sql);
	$user 	= mysqli_fetch_assoc($result);
		if(!empty($user))
			{
				$_SESSION['username']=$user['username'];
				header('location: resetPassword.html');
			}

		else	
		{
			echo "Email is not correct";
		}
	}
	else
	{
		echo "Please enter your email" ;
	}
}
?>