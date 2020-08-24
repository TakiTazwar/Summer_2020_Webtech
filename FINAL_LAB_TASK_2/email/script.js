function val()
{
	var email=document.getElementById('email').value;
	if(email!="")
	{
		if(email.split("@").length>=2)
		{
			emailsplit=email.split("@");
			if(emailsplit[1].split(".").length>=2)
			{
				//alert(emailsplit[1].split(".").length);
				return true;
			}
			else
			{
				document.getElementById('msg').innerHTML="Please enter valid email. .com is missing";
				return false;
			}
		}
		else
		{
			document.getElementById('msg').innerHTML="Please enter valid email";
			return false;
		}
	}
	else
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
}
function remover()
{
	var email =document.getElementById('email').value;
	if(email!="")
	{
		document.getElementById('msg').innerHTML="";
	}
}