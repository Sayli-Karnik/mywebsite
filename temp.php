
<?php
class database{

function _construct(){

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
//$con = new mysqli("localhost","root","","hotels");
//check connection
if($con -> connect_error)
{
trigger_error('DB connection failed:'.$con -> connect_error,E_USER_ERROR);
}
}
function update_reg($username,$password,$email,$addr)
{$flag=0;
echo 'called';
//$con = new mysqli("localhost","root","","hotels");

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
$res=$con->query("select * from user");

$row=$res->fetch_assoc();
 while($row)
 {
 if($row['username'] == $username && $row['email_id']==$email)
 {$flag=1;
 echo "<script>alert('ALREADY REGISTERED!');</script>";
 break;
 }
 $row=$res->fetch_assoc();
 }
if($flag==0)
{ $password=str_replace("0","a",$password);
$password=str_replace("1","b",$password);
$password=str_replace("2","c",$password);
$password=str_replace("3","d",$password);
$password=str_replace("4","e",$password);
$password=str_replace("5","f",$password);
$password=str_replace("6","g",$password);
$password=str_replace("7","h",$password);
$password=str_replace("8","i",$password);
$password=str_replace("9","j",$password);
$sql="insert into user values('$username','$password','$addr','$email')";
$res=$con->query("insert into cart(username) values('$username')");

if($res=$con->query($sql))echo '';else echo 'wrong';}

}
/*function disp_res($i){

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
//$con = new mysqli("localhost","root","","hotels");
$arr=array('chinese','mexican','south','cafe','italian','seafood');

if($i==0)$res=$con->query("select * from hotel_1");
else
{$i--;
$res=$con->query("select * from hotel_1 where speciality='$arr[$i]'");}
echo "<br>";
$row=$res->fetch_assoc();

while($row)
{
?><br/><div><a href="<?php echo $row['onclick']; ?>"><img src="<?php echo $row['image']; ?>" style="width:500px;height:300px;"></a><?php echo "<br><font size=6>".$row['name']."</font><br>Location:".$row['area']."<br>Speciality:".$row['speciality']."<br>Rating:".$row['rating'];?></div>
<?php
$row=$res->fetch_assoc();
}
}//end of disp_res*/

function confirm($uname,$pwd){

$pwd=str_replace("0","a",$pwd);
$pwd=str_replace("1","b",$pwd);
$pwd=str_replace("2","c",$pwd);
$pwd=str_replace("3","d",$pwd);
$pwd=str_replace("4","e",$pwd);
$pwd=str_replace("5","f",$pwd);
$pwd=str_replace("6","g",$pwd);
$pwd=str_replace("7","h",$pwd);
$pwd=str_replace("8","i",$pwd);
$pwd=str_replace("9","j",$pwd);

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
//$con = new mysqli("localhost","root","","hotels");
$res = $con->query("select * from user");
$row=$res->fetch_assoc();
$flag=0;
while($row)
{
if($row['username'] == $uname && $row['password'] == $pwd)
{
$flag=1;
include 'user.php';
$user_obj=new user();
//$res1 = $con->query("insert into cart(username) values('$uname')");

$user_obj->login($uname);
break;
}
$row=$res->fetch_assoc();
}
//echo $flag."ggg";
if($flag==0)
{
echo "<script>alert('Username and Password do not match!');</script>";
header("refresh:0;url=first.php");
//include 'first.php';
}

}
}
?>