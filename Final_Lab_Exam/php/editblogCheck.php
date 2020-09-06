<?php 
require_once('../service/userService.php');
$username=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
			];
//echo $password;
//var_dump($user);			
$status = updateBlog($user);
echo $status;
?>