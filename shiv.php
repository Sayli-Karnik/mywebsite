<!DOCTYPE html>
<html>
<body background="south.jpg">
<style>
div{
 border: 1px solid #0000ff;
  border-radius:20px;
  padding:20px;
  opacity:0.6;
  background-color:white;
}
#colour{
color:black;
}

</style>
<?php
ob_start();
$i=1;
require 'menu.php';
$menu_obj = new menu();
$menu_obj->getid(1);
//$rest_id = 1;
$arr=array('south indian','pav bhaji','sandwich','pizza','punjabi','roti','rice');


include 'restaurant.php';
$r_obj = new restaurant();
$r_obj->display_menu($arr,7,1);
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
for($i=0;$i<7;$i++){
$res=$con->query("select * from menu where res_id=1 and foodtype='$arr[$i]'");
echo "<br>";
 $row=$res->fetch_assoc();?>
 <div id="colour">
 <?php
echo "<strong>".$arr[$i]."<br/>";echo "<hr/>";
while($row)
{
?><form method="POST"><input type="number" name="<?php echo $row['srno']?>" min="0" max="50"><?php echo " ".$row['item']."<br/><br/>";
$row=$res->fetch_assoc();
}?></strong>
</div><?php
}*/
?>
<br><br>
<input type="image" src="button.jpe" name='sub'>
<?php if(isset($_POST['sub_x'],$_POST['sub_y']))
{
//require 'menu.php';
//$menu_obj = new menu();
$menu_obj->select_item();
//include 'order.php';
//disp_order();
}
?>
</form>
</body>
</html>