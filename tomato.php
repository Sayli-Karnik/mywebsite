<!doctype html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
.container{
margin:5px 5px 5px 5px;
}
body{
opacity:0.5;
height:100%;
width:100%;


}
#container1{
width:100%
height:150px;
background-color:black;
}

#nav{
text-align:right;
padding:12px;
height:30px;
width:100%;
background-color:white;

}
#name{
height:150px;
width:1100px;
text-align:center;
font-size:50px;
color:red;
font-style:italic;
}

#image{
float:left;
widht:150px;
height:150px;
}

#order{
padding:10px;
font-family:Arial,Helvetica,sans-serif;

font-size:30px;
text-align:center;
}

#about{
border-radius:15px;
width:950px;
height:400px;
margin-left:150px;
}

a{
font-family:Arial,Helvetica,sans-serif;
font-size:20px;
background:white;
padding:12px 24px;
color:black;
margin-right:10px;
text-decoration:none;
}

h2{
text-align:center;
color: 	#0000CD;
font-size:60px;
font-family:calibri;
}
.custom{
width:150px;
color:black;
}

marquee
{color:red;
background-color:white;
border: 1px solid black;

}
.col{
width:1500px;
background-color:white;
margin-left="50px";
border: 1px solid black;

}

.btn-primary {
    background: #0099cc;
    color: #ffffff;
}
img.pos{
margin-left="50px";

}
#but{
color:white;

}
</style>
<body background="13.jpg" width="1400">
<div id="container1">
<div id="image">
<img src="logo.jpg" height="150" width="160">
</div>
<div id="name">
<b>TOMATO</b>
</div> 
</div>

<!--<div id="nav">
   
        <a href='#'>ABOUT</a>   
        <a href='#'>CONTACT</a>
        <a href='#'>TEAM</a>
       
       
</div>-->
</div>

<div id="order">
<marquee scrollamount="4" direction="right" height="100%">
<p color="red">
HUNGRY ??? ORDER FOOD ONLINE...
</p></marquee>
<!--<form action="filter1.php">
<input type="submit" style=" font-size: 30px; background-color:red; color:black;" value="start ordering"></form>-->
<div id="but"><button type="button" class="btn btn-info custom" onclick="window.location.href='filter1.php'"><font color="white">START ORDERING</font></button></div>
</div>
<div id="about">
</div>

<div class="col"><br>
<div class="container">
  
  <button type="button" class="btn btn-info custom" data-toggle="collapse" data-target="#demo1" >ABOUT  </button>
  <div id="demo1" class="collapse">
    <strong><font size="5">Our mission is to ensure nobody has a bad meal !!Helping people discover new and good places for food around them.<br>We are making dining easier and enjoyable with online ordering.<br>Keep ordering from TOMATO! </font></strong>
  </div></div>
  <br>
  <div class="container">
  
  <button type="button" class="btn btn-info custom" data-toggle="collapse" data-target="#demo2" width="50px">CONTACT</button>
  <div id="demo2" class="collapse">
    <strong><font size="5">We would like to hear from you.<br>Tel:02228210826</font></strong>
  </div></div>
  <br>
  <div class="container">
  
  <button type="button" class="btn btn-info custom" data-toggle="collapse" data-target="#demo3" width="50px">TEAM      </button>
  <div id="demo3" class="collapse">
    <strong><font size="5">Ankita Narvekar<br>Sayli Karnik<br>Sharayu Kurne</font></strong>
  </div></div>
  <br>
  </div>
  <br>
 
  <img class="pos" src="instruct.png" border="2px solid" height="100" width="800"><br>
<?php
include 'temp.php';
if(isset($_POST['submit1'])){
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$addr=$_POST['add'];
$db=new database();
//$db->update_reg("xyz1","123456781","xyz@gmail.com1","rtyuv1");
$db->update_reg($username,$password,$email,$addr);
}  
?>
</body>
</html>
