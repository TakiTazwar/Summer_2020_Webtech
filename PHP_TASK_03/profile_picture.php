<?php
$flag=true;
if(isset($_GET['id']))
{
	$a=(int)($_GET['id']);
	if ($a<1) 
	{
		$flag=false;
	}
}
if (isset($_GET['upload'])) 
{
	$a=$_GET['upload'];
	if(empty($a)) 
	{
		$flag=false;
	}
}
if ($flag==false) 
{
	echo "invalid";
}
else
{
	echo "Successful";
}

?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Profile Picture</legend>
			<pre class="tab">User Id  <input type="text" name="id"></pre>
			<pre class="tab">Picture <input type="file" name="upload"></pre><br>
			<input type="submit" name="submit"><br>
		</fieldset>
	</form>
</body>
</html>