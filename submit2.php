<?php 

if (isset($_POST['go']))
{//echo 'fffffffff';
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];


$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
//$con = new mysqli("localhost","root","","hotels");
$res = $con->query("insert into cart(username) values('$uname')");

require 'temp.php' ;
$db=new database();
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$db->confirm($uname,$pwd);
}
?> 