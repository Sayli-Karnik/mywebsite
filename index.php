<!DOCTYPE html>
<html>
<head>
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="first.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="jquery.cycle.all.js"></script>

<script type="text/javascript">

$(document).ready(function(){
$(function(){$('#panel').hide();})
    $("#login").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function(){
$(function(){$('#panel1').hide();})
    $("#reg").click(function(){
        $("#panel1").slideToggle("slow");
    });
});


</script>
<script type="text/javascript">
$('#slider').cycle({ 
    fx:     'scrollLeft', 
    speed:  'slow', 
    next:   '#next', 
    prev:   '#prev' 
});
    var uname=document.frm1.uname.value;
    var pwd=document.frm1.pwd.value;

</script>
</head>
<body bgcolor="#ffff99">

<div id="bar">

<div id="login">LOGIN</div>
<div id="reg">NOT REGISTERED?</div>
<div id="panel">
<form action="submit2.php"  name="frm1" method="post">
Username: <input type="text" name="uname"><br>
Password: <input type="password" name="pwd"><br>
<input type="submit" name="go">
</form>
</div>
<div id="panel1">
<?php 
include 'user.php';
$user_obj=new user();
$user_obj->register();
?>

</div>
</div>
<!--<div class="wrapper">

<div id="slider">
<img id="1" src="1.jpeg">
<img id="2" src="2.jpeg">
<img id="3" src="3.jpeg">
</div>
-->

<div id="container">
<div class="controller" id="prev"></div>
<div id="slider">
<img id="11"  src="11.jpg" height="600px" width="900px">
<img id="12" src="south.jpg"  height="600px" width="900px">
<img id="13" src="13.jpg"  height="600px" width="900px">
</div>
<div class="controller" id="next"></div>
</div>
<!--
<script src="C:\Users\Ankita\Desktop\wt proj\jquery.js"></script>
<script src="C:\Users\Ankita\Desktop\wt proj\slider.js"></script>
-->

<?php

$con = new mysqli("","a7914922_root","1234asdf","a7914922_hotels");
$res = $con->query("delete from cart where 1");

?></body>
</html>