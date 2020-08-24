function val()
{
	var gender=document.myform.gender;
	for(var i=0;i<gender.length;i++)
	{
		if(gender[i].checked)
		{
			return true;
		}
	}
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
}