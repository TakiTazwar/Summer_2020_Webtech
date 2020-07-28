<?php
if(isset($_POST['submit']))
{
	if($_COOKIE['password']==$_POST['cpassword'])
	{
		if($_POST['npassword']==$_POST['cnpassword'])
		{
			setcookie('password', $_POST['npassword'], time()+3600, '/');
			header('location: login.html');
		}
		else
		{
			echo "Both password Doesn't match";
		}
	}
	else
	{
		echo "Current Password Doesn't Match";
	}
}
?>