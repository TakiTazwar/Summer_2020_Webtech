<html>
<head>
    <title></title>
</head>
<body>
<h1>Welcome <?php
session_start();
if ($_SESSION['status']=="Ok") 
{
	echo strtoupper($_SESSION['username']);
}
?>
</h1><br>

<br>
<a href="cart.html"><u>Go to Cart</u></a>|
<a href="orderHistory.html"><u>Order History</u></a>|
<a href="profile.php"><u>Profile</u></a><br>
<img src="loginshow.png" width="500" height="500">

<form action="../php/logout.php" method="post">
	<br>
	<br>
	<input type="submit" name="logout"value="Log Out">
</form>

</body>
</html>