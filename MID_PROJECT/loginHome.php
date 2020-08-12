<html>
<head>
    <title></title>
</head>
<body>
WELCOME <?php
session_start();
if ($_SESSION['status']=="Ok") 
{
	echo $_SESSION['username'];
}
?>
<br>
<a href="searchFood.html"><u>Search Food</a>

</body>
</html>