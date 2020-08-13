<?php
	session_start();

	if(isset($_POST['LogIn'])){

		$username 		= $_POST['uname'];
		$password 		= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else{
			
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'fooddelivermanagementsystem');
			$sql = "select * from 	registration where username='".$username."' and password='".$password."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user)){
				$_SESSION['status']  = "Ok";
				$_SESSION['username']=$username;
				if(isset($_POST['remember']))
				{
					setcookie('user',$username,time()+3600,'/');
					setcookie('password',$password,time()+3600,'/');
					echo $_COOKIE['user'];
				}
				else
				{
					setcookie('user',$username,time()-3600,'/');
					setcookie('password',$password,time()-3600,'/');
				}
				header('location: loginHome.php');
			}else{
				echo "Null submission".'<a href="login.php"><u>Home</a>';
			}
		}

	}else{
		echo "Null submission".'<a href="login.php"><u>Home</a>';
	}

?>