<html>
<head>
	<title></title>
</head>
<body>
	<center>
<form action="../php/logcheck.php" method="post">
	<img src="login.jpg"width="150"height="150">
	<br>
	User: <input type="text" name="uname" value=<?php  
	if(isset($_COOKIE['user']))
	{
		echo '"'.$_COOKIE['user'].'"';
	}
	else
	{
		echo '"'.'"';
	}
	?> required=""><br><br>
	Password: <input type="Password" name="password" value=<?php  
	if(isset($_COOKIE['password']))
	{
		echo '"'.$_COOKIE['password'].'"';
	}
	else
	{
		echo '"'.'"';
	}
	?> required=""><br><br><br>
		<input type="submit" name="LogIn"value="Log In"><br><br><br>
	<input type="checkbox" name="remember" value="remeber" autocomplete><i>REMEMBER ME</i><br><br>
</center>
</form>
</body>
</html>