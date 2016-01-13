<!DOCTYPE html>
<html>
south....
<?php
$arr=array('chinese','mexican','south','cafe','italian','seafood');
$host = "localhost";
$username="root";
$password="";
$database = "hotels";
$con = new mysqli($host,$username,$password,$database);
//check connection
if($con -> connect_error)
{
trigger_error('DB connection failed:'.$con -> connect_error,E_USER_ERROR);
}
$sql="insert into user values('username1','password1','email1','addr1')";
$res=$con->query($sql);
?>
</html>