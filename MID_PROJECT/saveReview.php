<?php
	session_start();
	$file = fopen('user.txt', 'a');
	fwrite($file, "<h3>".$_SESSION['username']."</h3><br>". $_POST['review']."<br><br>");
	header("location: deliveryManReview.php");
?>