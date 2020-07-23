<?php
if(isset($_GET['txtemail']))
{
	$email=$_GET['txtemail'];
	if($email=="")
	{
		echo "Invalid";
	}
	else
	{
		echo $email;
	}

}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Email <br>
		<input type="email" name="txtemail" placeholder="example@any.com"><br>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>