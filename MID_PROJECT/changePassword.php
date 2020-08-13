<?php
session_start();
if(isset($_POST['submit']))
{
	if(!empty($_POST['password']) && !empty($_POST['newPassword']))
	{
		
		if($_POST['password']==$_POST['newPassword'])
		{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'foodDeliverManagementSystem');
	   		$sql ="update registration set password='".$_POST['password']."' WHERE username= '".$_SESSION['username']."'";
	   		$result = mysqli_query($conn,$sql);
	    	
			mysqli_close($conn);
			//echo "done";
			//echo $sql;
			header('location: login.html');

		}
	}
}

?>