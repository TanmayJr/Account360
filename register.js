function formvalidation()
{
    
    var n=document.registration.name;
    var e=document.registration.email;
    var p=document.registration.pwd1;
    var cp=document.registration.pwd2;
    
    if(name_validation(n,4,20))
    {  
		if(email_validation())	
		{   		
			if(password_validation(p,8,15))
			{
			}
		}
    }
	return false;
}


function password_validation(p,mx,mn)

{
    var len=document.registration.pwd1.value.length;
    if( (len==null)||(len<mx)||(len>mn) )
    {
	alert("Enter a strong Password of more than 8 characters.");
	return false;
    }
		alert("Successfully Registered");
    return true;                
 } 
  

function name_validation(n,mx,my)
{
    var uid_len=n.value.length;
    if((uid_len==null)||(uid_len>=my)||(uid_len<mx))
    { 
	alert("User ID should not be empty or length between "+mx+" to "+my);
        n.focus();
        return false;
    }
    return true;                
}   


function email_validation()  
{  
var x=document.registration.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if ( (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)	)
	{  
  	alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  	return false;  
  	}
return true;  
}  


var check = function()
{
  if (document.getElementById('pwd1').value ==
   document.getElementById('pwd2').value) 
	{
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  	} 
  else 
	{
    document.getElementById('message').style.color = 'red';
   document.getElementById('message').innerHTML = 'Not matching';
	}
 
}

  