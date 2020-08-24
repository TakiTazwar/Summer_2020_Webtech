function val()
{
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if((day!="") && (month!="") && (year!=""))
	{
		if((parseInt(day,10)>0 && parseInt(day,10)<32) && (parseInt(month,10)>0 && parseInt(month,10)<13) && (parseInt(year,10)>1899 && parseInt(year,10)<2017))
		{
			return true;
		}
		else
		{
			document.getElementById('msg').innerHTML="Enter a valid date";
			return false;
		}
	}
	else
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
}
function remover1()
{
	var day=document.getElementById('day').value;
	if(day!="")
	{
		document.getElementById('msg').innerHTML="";
	}
}
function remover1()
{
	var month =document.getElementById('month').value;
	if(month!="")
	{
		document.getElementById('msg').innerHTML="";
	}
}
function remover1()
{
	var year =document.getElementById('year').value;
	if(year!="")
	{
		document.getElementById('msg').innerHTML="";
	}
}