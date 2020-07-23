<?php
//print_r($_GET);
if(isset($_GET['gender']))
{
	$gender=$_GET['gender'];
	echo $gender;
}
else
{
	//print_r($_GET);
	//echo $_GET['submit'];
	if(isset($_GET['submit']))
	{
		echo "PLEASE SELECT A GENDER";
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
		<legend> GENDER </legend><br>
			<input type="radio" name="gender" value="Male" >  Male 
			<input type="radio" name="gender" value="Female" > Female
			<input type="radio" name="gender" value="Other" > Other <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>