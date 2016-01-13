<?php
class user{
//public $uname;
function _contruct()
{

}
function login($uname)
{
include 'tomato.php';
$this->uname=$uname;
//$con = new mysqli("localhost","root","","hotels");

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
$res = $con->query("insert into cart(username) values('$uname')");

}
function register(){
echo '<br><br><form action="reg.php"><input type="submit" name="reg1" value="REGISTER"></form>';
}
function logout()
{
include 'filter1.php';
}

function display_res($i){
//$con = new mysqli("localhost","root","","hotels");

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
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
}
function confirm_cart()
{
include 'scrap.php';
}
function confirm_order()
{
logout();
}


}

?>