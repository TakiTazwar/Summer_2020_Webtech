<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="../views/companyCreate.php">Create Company</a><br>
	<?php  
			$users = getAllCompany();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['username']?></td>
			<td><?=$users[$i]['password']?></td>
			<td><?=$users[$i]['email']?></td>
			<td><?=$users[$i]['type']?></td>
			<td>
				<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="delete.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?> 

</body>
</html>