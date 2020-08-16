<?php
session_start();
if(isset($_POST['logout']))
{
	session_destroy();
	header("location: ../views/mainPage.html");

}
?>