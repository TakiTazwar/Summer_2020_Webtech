function val()
{
	var bg=document.getElementById('bg').value;
	if(bg!="")
	{
		return true;
	}
	else
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
}
