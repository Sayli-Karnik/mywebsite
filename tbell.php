
<!DOCTYPE html>
<html>
<body background="burr.jpg">
<style>
div{
 border: 1px solid #0000ff;
  border-radius:20px;
  padding:20px;
  background-color:white;
}
body{
opacity:0.7;

}
</style>
<?php
ob_start();
$i=1;
require 'menu.php';
$menu_obj = new menu();
$menu_obj->getid(2);

$arr=array('Taco','Nachos','Burrito','Quesadillas','Desserts and Sides');
include 'restaurant.php';
$r_obj = new restaurant();
$r_obj->display_menu($arr,5,2);

?><br><br>
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