<?php
#print_r($_POST);
if(isset($_POST['Submit']))
{
	if($_COOKIE['email']==$_POST['email'])
	{
			header('location: forgotPasswordDes.html');
	}
	else
	{
		echo "Error";
	}
}
else
{
	echo "Error";
}
?>