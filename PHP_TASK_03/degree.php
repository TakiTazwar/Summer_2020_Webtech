<?php

	if (isset($_GET['a']) || isset($_GET['b']) || isset($_GET['c'])) 
	{
		if (isset($_GET['a'])) 
		{
			echo $_GET['a']."<br>";
		}
		if (isset($_GET['b'])) 
		{
			echo $_GET['b']."<br>";
		}
		if (isset($_GET['c'])) 
		{
			echo $_GET['c']."<br>";
		}
	
	}
else
{
	if (isset($_GET['submit'])) {
		# code...
		echo "At least one of them has to be selected";
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
			<legend>Degree</legend>
			<input type="checkbox" name="a" value="SSC"> SSC
			<input type="checkbox" name="b" value="HSC"> HSC
			<input type="checkbox" name="c" value="BSc"> BSc<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>