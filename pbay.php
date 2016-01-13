<!--<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php function fun(){
echo "jsxsmk";
}
?>
<form onsubmit="fun()">
<input type="number" name="1" min="0" max="50">
<input type="submit" name="sub">
</form>
<p id="no"></p>
</body>
</html>-->



<!DOCTYPE html>
<html>
<body background="pizza.jpg">
<style>
div{
 border: 1px solid #0000ff;
  border-radius:20px;
  padding:20px;
  background-color:white;
opacity:0.5;
  }
body{
}
</style>
<?php
ob_start();
$i=1;
require 'menu.php';
$menu_obj = new menu();
$menu_obj->getid(3);

$arr=array('pizza','salad');

include 'restaurant.php';
$r_obj = new restaurant();
$r_obj->display_menu($arr,2,3);

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