<?php
class menu
{
public $rest_id;
function select_item(){
//echo 'hiii';
//echo "rest_id ".$this->rest_id;

//include 'submit2.php';
//$user_obj=new user();
$host = "server29.000webhost.com";
$username="a7914922_root";
$password="1234asdf";
$database = "a7914922_hotels";
$con = new mysqli($host,$username,$password,$database);
//$pbay_obj = new pbay();
//$rest_id = pbay_obj->getid();
//if($res_id ==0){$ccd_obj = new ccd();$rest_id = ccd_obj->getid();}
//$res = $con->query("delete from cart where res_id!=0");
if($this->rest_id == 1)
$res = $con->query("select * from menu where res_id=1");
else if($this->rest_id == 2)
$res = $con->query("select * from menu where res_id=2");
else if($this->rest_id == 3)
$res = $con->query("select * from menu where res_id=3");
else if($this->rest_id == 4)
$res = $con->query("select * from menu where res_id=4");
else if($this->rest_id == 5)
$res = $con->query("select * from menu where res_id=5");
else if($this->rest_id == 6)
$res = $con->query("select * from menu where res_id=6");
$row = $res->fetch_assoc();


while($row)
{
$no=$row['srno'];
$q=$_POST[$no];

 if($q != 0)
{$price=$q*$row['price'];
$res1 = $con->query("insert into cart values($this->rest_id,'".""."','".$row['item']."','".$q."','".$price."')");
}
//$upd=$con->query("update ccd_menu set qty=$q where srno=$i");
//$con->query("select * from ccd_menu");
$row=$res->fetch_assoc();
}
header( "refresh:0;url=order.php" );
//include 'order.php'; 
//header('location:http://www.google.com/');
}
function getid($rest_id)
{
$this->rest_id=$rest_id;
echo "RESTAURANT NUMBER : ".$this->rest_id;
}
}
?>