<html>
<head>
	<title></title>
</head>
<body>
	<h1>PROFILE INFORMATION</h1>
	<form>
		<a href="loginHome.php"> <img src="home.png" width="100" height="60"></a>
<table width="900px">
			<tr>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">Name:</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">Taki Tazwar</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="text" name="name"></p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="submit" value="Update"name="submitName"></p></b>
				</td>				

			</tr>
			<tr>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">Email:</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">takitazwarparthib@gmail.com</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="text" name="email"></p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="submit" value="Update"name="submitEmail"></p></b>
				</td>				

			</tr>
			<tr>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">Gender:</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">Male</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="radio" name="name">Male
						<input type="radio" name="name">Female</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="submit" value="Update"name="submitName"></p></b>
				</td>				

			</tr>
			<tr>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">Date of Birth:</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px">10/11/1999</p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="date" name="date"></p></b>
				</td>
				<td height="40px" width="200px">
					<b><p style="font-size:30px"><input type="submit" value="Update"name="submitName"></p></b>
				</td>				

			</tr>
		</table>
	</form>
		<form action="picture.php" method="post" enctype="multipart/form-data">
			<h1> Upload Picture</h1> <input type="file" name="pic">
			<br>
			<input type="submit" name="sub">
			<img src=<?php
			session_start();
			 echo '"'.$_SESSION['username'].".png".'"'; ?> width="200" height="200">
		</form>
</body>
</html>