<?php
if(isset($_COOKIE['status']))
{
	$name=$_COOKIE['name'];
	$email=$_COOKIE['email'];
	$gender=$_COOKIE['gender'];
	$dob=$_COOKIE['day']."/".$_COOKIE['month']."/".$_COOKIE['year'];;
?>

<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $name ?></td>
				<td rowspan="7" align="center">
					<img width="128" src=<?php if(isset($_COOKIE['picture']))
					{
						echo '"'.$_COOKIE['picture'].'"';
					}
					else
					{
						echo '"'."user.png".'"';
					} 
					?>
					/>
                    <br/>
                    <a href="picture.php">Change</a>
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $email ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $gender ?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?php echo $dob ?></td>
			</tr>
		</table>	
        <hr/>
	</form>
</fieldset>

     <br>
	<a href="profileHome.php">Profile Home</a>|
	<a href="picture.php">Edit Picture</a>|
	<a href="profile.php">View Profile</a>|
	<a href="edit_profile.php">Edit Profile</a>|
    <a href="logout.php"><u>Logout</a>

<?php
}
else
{

}
?>