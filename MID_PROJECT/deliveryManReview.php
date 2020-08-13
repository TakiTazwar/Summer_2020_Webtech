<html>
<head>
	<title>Review</title>
</head>
<body>
<h1>Delivery Man-MD RAHIM</h1><br>
<a href="loginHome.php"> <img src="home.png" width="100" height="60"></a>
<a href="orderProcess.html"><img src="return.png" width="100" height="60"></a>
<h3>MD Karim </h3><br>
He delivered the product quiet fast<br><br>
<h3>Digonto </h3><br>
I had to wait for a while<br><br>
<h3>Mizan </h3><br>
Had to face no issue at all
<?php 
		$file = fopen('user.txt', 'r');
		$data = fread($file, filesize('user.txt'));
		echo $data;

?>
<br><br><br><br>

<form action="saveReview.php" method="post">
	<b>Share your experience with him!</b>
	<input type="text" name="review">
	<input type="submit" name="submit">

</form>
</body>
</html>