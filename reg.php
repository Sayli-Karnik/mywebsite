<!DOCTYPE HTML>
<html>
  <head>
    <script>
	
function validate()
{ 
    var username=document.frm.username.value;
    var password=document.frm.password.value;
    var fname=document.frm.fname.value;
    var lname=document.frm.lname.value;
    var confirmpassword=document.frm.confirmpassword.value;
    var mobileno=document.frm.mobileno.value;
    var email=document.frm.email.value;
    var address=document.frm.add.value;
var accept=document.frm.accept.checked;
var str="";var err=false;

if(username==""|| password=="") 
{    str+=" Please fill all the details";err=true;
}
if(fname==""||lname=="")
{ str+="\nPlease enter your full name";err=true;
}
if(confirmpassword.length<8)
{ str+="\nLength of the password should be minimum 8 characters!";err=true;
}
if(password.length<8)
{str+="\n Length of the password should be minimum 8 characters!";err=true;
}
//if(confirmpassword!="" && password!="")
//{
if(confirmpassword!==password)
{str+="\npasswords do not match.";err=true;}
//}
if(mobileno=="")
{err=true;
   str+="\nPlease enter Mobile Number!!";
}
if((/^\+d$/.test(mobileno))){}else str+="\nphone no can contain numbers only. ";

if(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(email))
{}
else str+="invalid email id. ";

if(mobileno.length<10 || mobileno.length>10)
{err=true;
    str+="\nPlease enter a valid Mobile Number!!";
}

if(err)
{
    alert(str);
    return false;
}
else
{var r=confirm("Registration successful.Start ordering?");

    return true;
}
}
	
    </script>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="loginformatting.css">
  </head>
 
<body background="index.jpeg" style="background-repeat:no repeat;background-size:cover">

<h2>REGISTER HERE</h2>


<form name="frm" action="tomato.php" onsubmit="return validate()" method="post">
<table cellpadding="5" cellspacing="2" align="center">
<tr><td>Name:</td></tr>
<tr><td><input type="text" name="fname" id="fname" placeholder="First name">
<input type="text" name="lname" id="lname" placeholder="Last name"></td></tr>

<tr><td>Create your Username:</td></tr>
<tr><td><input type="text" name="username" id="username"></td></tr>

<tr><td>Create a Password:</td></tr>
<tr><td><input type="password" name="password" id="password"></td></tr>

<tr><td>Confirm your Password:</td></tr>
<tr><td><input type="password" name="confirmpassword" id="confirmpassword"></td></tr>

<tr><td>Mobile no:</td></tr>
<tr><td><input type="text" name="mobileno" id="mobileno"></td></tr>

<tr><td>Email-Id:</td></tr>
<tr><td><input type="email" name="email" id="email"></td></tr>

<tr><td>Address:</td></tr>
<tr><td><textarea rows="4" cols="50" name="add" id="add"></textarea></td></tr>

<tr><td><input type="checkbox" name="agree" value="accept" id="accept">I accept all the terms and conditions!!</td></tr>
<br><br>
<tr><td>
<input type="submit" name="submit1" value="Submit" onsubmit="return validate()">

</table>
</form> 
</body>
</html>