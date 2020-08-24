function val()
{
	
	var a =document.getElementById('name').value;
	if(a=="")
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
	else
	{
		if(!((a[0]>='A' && a[0]<='Z') ||(a[0]>='a' && a[0]<='z')))
		{
			document.getElementById('msg').innerHTML="Name must start with a letter";
			return false;
		}
	}
}
function remover()
{
	var a =document.getElementById('name').value;
	if(a!="")
	{
		document.getElementById('msg').innerHTML="";
	}
}