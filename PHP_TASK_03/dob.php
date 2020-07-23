<?php
$flag=true;

	$a="";
	$b="";
	$c="";
	if (isset($_GET['date']))
	{
		$a=(int)$_GET['date'];
		if ($a>0 && $a<=31) 
		{

		}
		else
		{
			$flag=false;
		}
	}

	if (isset($_GET['month']))
	{
		$b=(int)$_GET['month'];
		if ($b>0 && $b<=12) 
		{

		}
		else
		{
			$flag=false;
		}
	}
	if (isset($_GET['year'])) 
	{
		$c=(int)$_GET['year'];
		if ($c>=1900 && $c<=2016) 
		{

		}
		else
		{
			$flag=false;
		}
	}
	if($flag==true)
	{
		echo $a."<br>";
		echo $b."<br>";
		echo $c."<br>";
	}
	if ($flag==false) 
	{
		echo "invalid";
	}

?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Date of Birth</legend>
			<pre class="tab">          dd                          mm                     yyyy</pre><br>
			<input type="text" name="date">/
			<input type="text" name="month">/
			<input type="text" name="year"><br>
			<input type="submit" name="">
		</fieldset>

	</form>

</body>
</html>