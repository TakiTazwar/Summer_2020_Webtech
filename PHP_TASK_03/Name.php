<?php
if(isset($_GET['Name']))
{
	$Name=$_GET['Name'];
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
						echo "Invalid Name";
						break;
					}
					elseif ($Name[$i]>'Z') 
					{
						if($Name[$i]<'a')
						{
							echo "Invalid Name";
							break;
						}
						elseif ($Name[$i]>'z') {
							echo "Invalid Name";
							break;
						}
					}
					$i=$i+1;
					//echo "pokpok<br>";
				}
			
			}
			else
			{
				echo "Invalid Name";
			}
		}
		else
		{
			echo "Invalid Name";
		}
		//echo str_word_count($Name);
	}
	else
	{
		echo "Invalid Name";
	}
	/*if(($_GET['Name']>='A' && $_GET['Name']<='Z')){
			$_GET['Name'][0];
		}
	/*if($_GET['Name']=="")
	{
		echo "invalid input";
	}
	}*/
}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
		Name<br>
		<input type="text" name="Name"><br>
		<input type="submit" name="Submit">
	</form>
</body>
</html>