function val()
{
	var id=document.getElementById('id').value;
	var file=document.getElementById('file').value;
	if(id!="" && file!="")
	{
		if(parseInt(id,10)>0)
		{
			return true;

		}
		else
		{
			document.getElementById('msg').innerHTML="Enter a positive Id";
			return false;
		}
	}
	else
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
}
