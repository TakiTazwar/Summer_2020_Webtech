function val()
{
	var userName=document.getElementById('name').value;
	if(userName=="")
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
	else
	{
		if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
		{
			if(userName.split(" ").length>=2)
			{
				var counter=0;
				while(counter<userName.length)
				{
					if(!((userName[counter]>='A' && userName[counter]<='Z') ||(userName[counter]>='a' && userName[counter]<='z') || userName[counter]=='.' || userName[counter]=='-' || userName[counter]==' '))
					{
						document.getElementById('msg').innerHTML="Name can only contain A-Z, a-z, . and -";
						return false;
					}
					counter=counter+1;
				}
				return true;
			}
			else
			{
				document.getElementById('msg').innerHTML="Name must contain 2 words";
				return false;
			}
		}
		else
		{
			document.getElementById('msg').innerHTML="Name must start with a letter";
			return false;
		}
	}
	return false;
}
function remover()
{
	var userName =document.getElementById('name').value;
	if(userName!="")
	{
		document.getElementById('msg').innerHTML="";
	}
}