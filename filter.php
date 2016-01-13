<!DOCTYPE html>
<html>
<head>
<style>
img{
margin:30px 30px 30px 30px;
padding: 10px 500px 10px 10px;
 border: 1px solid #0000ff;
 background:white;
 border-radius:20px;
}

</style>
</head>
<body bgcolor="#E6E6E6">
<form method="post" ation="">
<select name="cuisine">
  <option value="0" >Chinese</option>
  <option value="1" >Mexican</option>
  <option value="2" >South Indian</option>
  <option value="3" >Cafes</option>
  <option value="4" >Italian</option>
  <option value="5">Sea Food</option>
</select>
<input type="submit" value="Find restaurants"></input>
</form>
<br/>

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
else
{echo "<br/>";}

$res=$con->query("select * from hotel_1");
echo "<br>";
 $row=$res->fetch_assoc();

while($row)
{
?><br/><a href="<?php echo $row['onclick']; ?>"><img src="<?php echo $row['image']; ?>" style="width:500px;height:300px;"></a>
<?php
$row=$res->fetch_assoc();

}

?>
</body>
</html>
