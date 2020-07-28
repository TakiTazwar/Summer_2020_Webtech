<?php
	if(isset($_POST['submit']))
	{
		#echo "working";

		if(empty($_POST['name']) || empty($_POST['uname']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['day']) || empty($_POST['month']) || empty($_POST['year']))
		{
			echo "null submission".'<a href="edit_profile.php"><u>Home</a>';
			#echo "working";
		}
		else 
		{
			$name = $_POST['name'];
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			setcookie('uname', $uname, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			#echo "Problem";
			echo "working";
			header('location: edit_profile.php');
		}
	}
	else
	{
		//header("location: login.html");
		echo "Not Set";
	}

?>