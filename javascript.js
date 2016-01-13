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
if(r==true)location.href = "filter1.php";
    return true;
}
}