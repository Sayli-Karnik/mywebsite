<!DOCTYPE html>
<body>
<style>
div{
 border:1px solid white;
  border-radius:20px;
  padding:20px;
}
</style>


<?php
class restaurant{

function display_menu($arr,$size,$r_id){

$host = "localhost";
$username="root";
$password="";
$database = "hotels";

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
if($con -> connect_error)
{
trigger_error('DB connection failed:'.$con -> connect_error,E_USER_ERROR);
}
else
{echo "<br/>";}

for($i=0;$i<$size;$i++){
$res=$con->query("select * from menu where res_id=$r_id and foodtype='$arr[$i]'");
echo "<br>";
 $row=$res->fetch_assoc();
 echo "<div><strong>";
 
echo $arr[$i]."<br/>";echo "<hr/>";
while($row)
{
?><form method="POST"><input type="number" name="<?php echo $row['srno']?>" min="0" max="50"><?php echo $row['item'].". . . . .Rs.".$row['price']."<br/><br/>";
$row=$res->fetch_assoc();
}?></strong>
</div><?php
}
}
}//end of rest
?><br><br>

</body>
</html>

