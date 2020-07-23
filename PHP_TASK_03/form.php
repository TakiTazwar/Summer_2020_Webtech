<?php
$name="";
if(isset($_GET['Name']))
{
	$Name=$_GET['Name'];
	if(strlen($Name)>0)
	{
		if(str_word_count($Name)>=2)
		{
			if(($Name[0]>='A' && $Name[0]<='Z') || ($Name[0]>='a' && $Name[0]<='z'))
			{
				$i=0;
				while($i<strlen($Name))
				{
					if($Name[$i]<'A' && $Name[$i]!=' ' && $Name[$i]!='.' && $Name[$i]!='-')
					{
						$name="Invalid Name";
						break;
					}
					elseif ($Name[$i]>'Z') 
					{
						if($Name[$i]<'a')
						{
							$name="Invalid Name";
							break;
						}
						elseif ($Name[$i]>'z') {
							$name="Invalid Name";
							break;
						}
					}
					$i=$i+1;
				}
			
			}
			else
			{
				$name="Invalid Name";
			}
		}
		else
		{
			$name="Invalid Name";
		}
	}
	else
	{
		$name="Invalid Name";
	}
}
?>

<?php
	$email="";
	if(isset($_GET['email']))
	{
		$emailtemp=$_GET['email'];
		if($emailtemp=="")
		{
			$email="Invalid Email";
		}
	}
?>
<?php
$genderNotification="";
if(isset($_GET['gender']))
{
	$gender=$_GET['gender'];
}
else
{
	if(isset($_GET['submit']))
	{
		$genderNotification="Select Gender";
	}
}
?>

<?php
$dateNoti="";
$flag=true;

	$a="";
	$b="";
	$c="";
	if (isset($_GET['date']))
	{
		$a=(int)$_GET['date'];
		if ($a>0 && $a<=31) 
		{

		}
		else
		{
			$flag=false;
		}
	}

	if (isset($_GET['month']))
	{
		$b=(int)$_GET['month'];
		if ($b>0 && $b<=12) 
		{

		}
		else
		{
			$flag=false;
		}
	}
	if (isset($_GET['year'])) 
	{
		$c=(int)$_GET['year'];
		if ($c>=1900 && $c<=2016) 
		{

		}
		else
		{
			$flag=false;
		}
	}
	if ($flag==false) 
	{
		$dateNoti="Enter Valid date";
	}

?>
<?php
$bgNoti="";
if (!isset($_GET['bg'])) {
	$bgNoti="Select a blood type";
}
?>

<?php
$degreeNoti="";
	if (isset($_GET['a']) || isset($_GET['b']) || isset($_GET['c']) || isset($_GET['d'])) 
	{
			
	}
else
{
	if (isset($_GET['submit'])) {
		# code...
		$degreeNoti="Please Select a Degree";
	}
}
?>
<?php
$profileNoti="";
if (isset($_GET['upload'])) 
{
	$a=$_GET['upload'];
	if(empty($a)) 
	{
		$profileNoti="Select a file";
	}
}
?>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form>
		<table border="1" width="500px" height="300px">
			<tr>
				<td colspan="3" align="center" height="30%"><h1> PERSON PROFILE</h1>
				</td>			
			</tr>
			<tr>
				<td  width="20%">Name
				</td>
				<td width="30px">
					<input type="text" name="Name" size="30px" height="100" width="100"><?php echo $name?>
				</td>
				<td width="5%">
				</td>
			</tr>
			<tr>
				<td>Email
				</td>
				<td>
					<input type="email" name="email" size="30px"><?php echo $email?>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>Gender
				</td>
				<td>
					<input type="radio" name="gender" value="Male" >  Male 
				<input type="radio" name="gender" value="Female" > Female
				<input type="radio" name="gender" value="Other" > Other
				<?php echo $genderNotification?>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>Date of Birth
				</td>
				<td>
					<input type="text" name="date"size="5px">/
					<input type="text" name="month"size="5px">/
					<input type="text" name="year"size="5px">   <i>(dd/mm/yyyy)</i>
					<?php echo $dateNoti?>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>Blood Group
				</td>
				<td>
					<select name="bg">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
			</select>
			<?php echo $bgNoti?>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>Degree
				</td>
				<td>
					<input type="checkbox" name="a"> SSC
					<input type="checkbox" name="b"> HSC
					<input type="checkbox" name="c"> BSc.
					<input type="checkbox" name="d"> MSc.
					<?php echo $degreeNoti?>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>Photo
				</td>
				<td colspan="2">
					<input type="file" name="upload">
					<?php echo $profileNoti?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center" height="30px">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<input type="submit" name="submit" value="Submit"> 
			<input type="reset" name="" value="Clear"> 
				</td>
			</tr>
		</table>
	</form>
</body>