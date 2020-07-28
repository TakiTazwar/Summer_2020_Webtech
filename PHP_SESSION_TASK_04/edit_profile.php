<?php
	$name = $_COOKIE['name'];
	$uname = $_COOKIE['uname'];
	$email = $_COOKIE['email'];
	$gender = $_COOKIE['gender'];
	$day = $_COOKIE['day'];
	$month = $_COOKIE['month'];
	$year = $_COOKIE['year'];
?>
<form action="Edit_Check.php" method="post">
	<br/>
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><input name="name" type="text"value=<?php echo '"'.$name.'"'?>></td>
			<td></td>
		</tr>		
		<tr><td colspan="4"><hr/></td></tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>
				<input name="email" type="text" value=<?php echo '"'.$email.'"'?>>
				<abbr title="hint: sample@example.com"><b>i</b></abbr>
			</td>
			<td></td>
		</tr>		
		<tr><td colspan="4"><hr/></td></tr>
		<tr>
			<td>User Name</td>
			<td>:</td>
			<td><input name="uname" type="text"value=<?php echo '"'.$uname.'"'?>></td>
			<td></td>
		</tr>		
		<tr><td colspan="4"><hr/></td></tr>
		<tr>
			<td colspan="3">
				<fieldset>
					<legend>Gender</legend>    
					<input name="gender" type="radio" value="Male">Male
					<input name="gender" type="radio" value="Female">Female
					<input name="gender" type="radio" value="Other">Other
				</fieldset>
			</td>
			<td></td>
		</tr>		
		<tr><td colspan="4"><hr/></td></tr>
		<tr>
			<td colspan="3">
				<fieldset>
					<legend>Date of Birth</legend>    
					<input type="text" size="2" name="day" value=<?php echo '"'.$day.'"'?>/>/
					<input type="text" size="2" name="month"value=<?php echo '"'.$month.'"'?>/>/
					<input type="text" size="4" name="year"value=<?php echo '"'.$year.'"'?>/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
				</fieldset>
			</td>
			<td></td>
		</tr>
	</table>
	<hr/>
	<input type="submit" name="submit" value="submit">
	<input type="reset">
	<br>
	<a href="profileHome.php">Profile Home</a>|
	<a href="picture.php">Edit Picture</a>|
	<a href="profile.php">View Profile</a>|
	<a href="edit_profile.php">Edit Profile</a>|
    <a href="logout.php"><u>Logout</a>	
</form>