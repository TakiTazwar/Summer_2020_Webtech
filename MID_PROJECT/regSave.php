<?php
if(isset($_REQUEST['name']))
{
	$Name=$_REQUEST['name'];
	if(strlen($Name)>0)
	{
		if(str_word_count($Name)>=2)
		{
			if(($Name[0]>='A' && $Name[0]<='Z') || ($Name[0]>='a' && $Name[0]<='z'))
			{
				//echo "pokpok";
				$i=0;
				while($i<strlen($Name))
				{
					if($Name[$i]<'A' && $Name[$i]!=' ' && $Name[$i]!='.' && $Name[$i]!='-')
					{
						$Name="Invalid Name";
						break;
					}
					elseif ($Name[$i]>'Z') 
					{
						if($Name[$i]<'a')
						{
							$Name="Invalid Name";
							break;
						}
						elseif ($Name[$i]>'z') {
							$Name="Invalid Name";
							break;
						}
					}
					$i=$i+1;
					//echo "pokpok<br>";
				}
			
			}
			else
			{
				$Name="Invalid Name";
			}
		}
		else
		{
			$Name="Invalid Name";
		}
	}
	else
	{
		$Name="Invalid Name";
	}
	if($Name!="Invalid Name")
	{

		if (isset($_POST['submit'])) 
		{
			if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmpassword']) && !empty($_POST['usertype']) && !empty($_POST['username']))
			{
				echo "worked";
				# code...
				$conn = mysqli_connect('127.0.0.1', 'root', '', 'foodDeliverManagementSystem');
				$sql= 'select * from registration where username="'.$_POST['username'].'"';
				$result = mysqli_query($conn,$sql);
				$data = mysqli_fetch_assoc($result);
				if (empty($data)) 
				{
					# code...
					if ($_POST['password'] == $_POST['confirmpassword'])
					{
						# code...
						$sql1="INSERT INTO registration (name, email, username, password, gender, dateofbirth, usertype) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['date']."', '".$_POST['usertype']."')";
						mysqli_query($conn,$sql1);
						header("location: login.html");
					}
					else
					{
						echo "Password doesn't match";
					}
					mysqli_close($conn);
					}
				}
				else
				{
					echo "Empty Values Cannot be entered".'<a href="registration.html"><u>Home</a>';
				}
			}
	}
	else
	{
		echo "Name Must be in A-Z or a-z";
	}
}
else
{
	header("location: registration.html");
}


?>

