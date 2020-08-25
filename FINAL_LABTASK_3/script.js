function val()
{
	var namevalid=false;
	var userName=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var gender=document.myform.gender;
	if(userName=="")
	{
		document.getElementById('namemsg').innerHTML="Field cannot be empty";
		namevalid=false;
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
						document.getElementById('namemsg').innerHTML="Name can only contain A-Z, a-z, . and -";
						namevalid=false;
					}
					counter=counter+1;
				}
				document.getElementById('namemsg').innerHTML="";
				namevalid=true;
			}
			else
			{
				document.getElementById('namemsg').innerHTML="Name must contain 2 words";
				namevalid=false;
			}
		}
		else
		{
			document.getElementById('namemsg').innerHTML="Name must start with a letter";
			namevalid=false;
		}
	}

	var emailvalid=false;
	if(email!="")
	{
		if(email.split("@").length>=2)
		{
			emailsplit=email.split("@");
			if(emailsplit[1].split(".").length>=2)
			{
				//alert(emailsplit[1].split(".").length);
				document.getElementById('emailmsg').innerHTML="";
				emailvalid=true;
			}
			else
			{
				document.getElementById('emailmsg').innerHTML="Please enter valid email. .com is missing";
				emailvalid=false;
			}
		}
		else
		{
			document.getElementById('emailmsg').innerHTML="Please enter valid email";
			emailvalid=false;
		}
	}
	else
	{
		document.getElementById('emailmsg').innerHTML="Field cannot be empty";
		emailvalid=false;
	}


	var gendervalid=false;
	for(var i=0;i<gender.length;i++)
	{
		document.getElementById('gendermsg').innerHTML="Field cannot be empty";		
		if(gender[i].checked)
		{
			document.getElementById('gendermsg').innerHTML="";
			gendervalid=true;
			break;
		}
	}

	var dobvalid=false;
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if((day!="") && (month!="") && (year!=""))
	{
		if((parseInt(day,10)>0 && parseInt(day,10)<32) && (parseInt(month,10)>0 && parseInt(month,10)<13) && (parseInt(year,10)>1899 && parseInt(year,10)<2017))
		{
			document.getElementById('dobmsg').innerHTML="";
			dobvalid=true;
		}
		else
		{
			document.getElementById('dobmsg').innerHTML="Enter a valid date";
			dobvalid=false;
		}
	}
	else
	{
		document.getElementById('dobmsg').innerHTML="Field cannot be empty";
		dobvalid=false;
	}

	var degreeValid=false;
	if(document.getElementById('ssc').checked || document.getElementById('hsc').checked || document.getElementById('bsc').checked)
	{
		document.getElementById('degreemsg').innerHTML="";
		degreeValid=true;
	}
	else
	{
		document.getElementById('degreemsg').innerHTML="Please choose an option";
		degreeValid=false;
	}

	var pictureValid=false;
	var file=document.getElementById('file').value;
	if(file!="")
	{
		document.getElementById('picmsg').innerHTML="";
		pictureValid=true;
	}
	else
	{
		document.getElementById('picmsg').innerHTML="Select a picture";
		pictureValid=false;
	}

	if(namevalid && emailvalid && gendervalid && dobvalid && degreeValid && pictureValid)
	{
		return true;
	}
	else
	{
		return false;
	}
}