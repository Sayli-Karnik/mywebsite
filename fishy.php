<!DOCTYPE html>
<html>
<body background="fish1.jpg">
<style>
div{
background-color: #DFFFBF;
opacity: 0.6;
 border: 1px solid #0000ff;
  border-radius:20px;
  padding:20px;
}
</style>
<?php
ob_start();
$i=1;
require 'menu.php';
$menu_obj = new menu();
$menu_obj->getid(6);
//$rest_id = 6;

$arr=array('Salads','Soups','Appetizers','Main Course','Indian Breads','Desserts');

include 'restaurant.php';
$r_obj = new restaurant();
$r_obj->display_menu($arr,6,6);
/*
$host = "localhost";
$username="root";
$password="";
$database = "hotels";
$con = new mysqli($host,$username,$password,$database);

if($con -> connect_error)
{
trigger_error('DB connection failed:'.$con -> connect_error,E_USER_ERROR);
}
else
{echo "<br/>";}
for($i=0;$i<6;$i++){
$res=$con->query("select * from menu where res_id=6 and foodtype='$arr[$i]'");
echo "<br>";
$row=$res->fetch_assoc();
echo "<div>";

echo "<strong>".$arr[$i]."<br/>";echo "<hr/>";
while($row)
{$sr = $row['srno'];
echo "<form method='POST'><input type='number' name='$sr' min='0' max='50'>";
echo $row['item']."------".$row['price']."<br/><br/>";
$row=$res->fetch_assoc();
}
echo "</strong></div>";
}*/
echo "<br><br>";
echo "<input type='image' src='button.jpe' name='sub'></form>";
if(isset($_POST['sub_x'],$_POST['sub_y']))
{//echo "entered";
//require 'menu.php';
//$menu_obj = new menu();
$menu_obj->select_item();
//include 'order.php';
//disp_order();
}
?></body>
</html>