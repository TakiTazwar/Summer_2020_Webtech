<?php
if(isset($_COOKIE['picture']))
{
	$image=$_COOKIE['picture'];
	#echo $image;
}
else
{
	$image="user.png";
}
if(isset($_POST['submit']))
{
	if($_POST['picture']!="")
	{
		setcookie('picture', $_POST['picture'], time()+3600, '/');
		$image=$_POST['picture'];
		#echo $_POST['picture'];
	}
}
?>

<fieldset>
    <legend><b>PROFILE PICTURE</b></legend>
    <form method="post">
        <img width="128" src=<?php echo '"'.$image.'"' ?>/>
        <br />
        <input type="file" name="picture">
        <hr/>
        <input type="submit" name="submit" value="Submit">
    </form>
</fieldset>

<br>
	<a href="profileHome.php">Profile Home</a>|
	<a href="picture.php">Edit Picture</a>|
	<a href="profile.php">View Profile</a>|
	<a href="edit_profile.php">Edit Profile</a>|
    <a href="logout.php"><u>Logout</a>