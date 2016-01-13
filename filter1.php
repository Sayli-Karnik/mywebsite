<!DOCTYPE html>
<html>
<head>
<style>
div{
padding: 10px 10px 10px 10px;
 border: 1px solid black;
 background:white;
 border-radius:20px;
 margin-left:150px;
 margin-right:550px;

 }
img{
 border-radius:20px;
 border: 1px solid black;

}
</style>
</head>
<body bgcolor="#E6E6E6">

<form method="post" action="">
<select name="cuisine" >

  <option value="0" >Select cuisine</option>
  <option value="1" >Chinese</option>
  <option value="2" >Mexican</option>
  <option value="3" >South Indian</option>
  <option value="4" >Cafes</option>
  <option value="5" >Italian</option>
  <option value="6">Sea Food</option>
</select>
<input type="submit" name="find" value="Find restaurants"></input>
</form>
<br/>
<h2>Choose a restaurant.</h2>
<?php
require 'temp.php';    
//require ('first.php');    

if(isset($_POST['submit1'])){

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$addr=$_POST['add'];
$db=new database();
//$db->update_reg("xyz1","123456781","xyz@gmail.com1","rtyuv1");
$db->update_reg($username,$password,$email,$addr);
}
require 'user.php';
$db=new user();
if(isset($_POST['find'])){

switch($_POST['cuisine'])
{
case 0:$db->display_res(0);
break;
case 1:$db->display_res(1);
break;
case 2:$db->display_res(2);
break;
case 3:$db->display_res(3);
break;
case 4:$db->display_res(4);
break;
case 5:$db->display_res(5);
break;
case 6:$db->display_res(6);
break;
}
}
?>
</body>
</html>
