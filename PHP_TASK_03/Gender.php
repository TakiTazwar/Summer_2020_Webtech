<?php
if(isset($_GET['gender']))
{
	$gender=$_GET['gender'];
	echo $gender;
}
else
{
	echo "PLEASE SELECT A GENDER";
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Gender <br>
		<input type="radio" name="gender" value="Male" >  Male 
		<input type="radio" name="gender" value="Female" > Female
		<input type="radio" name="gender" value="Other" > Other <br>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>