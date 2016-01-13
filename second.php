
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{

$con = new mysqli("localhost","root","","sayli");
//check connection
if($con -> connect_error)
{
trigger_error('DB connection failed:'.$con -> connect_error,E_USER_ERROR);
}
/*else
{echo "database connected successfully.";}
*/
$res=$con->query("select * from demotable");
echo "<br>";
 echo "<table border=1><tr><th>uid</th><th>username</th><th>password</th></tr>";
do
{
$row=$res->fetch_assoc();
if($_POST['username']==$row['username'] && $_POST['password']==$row['password'])
echo "<tr><td>".$row['uid']."</td><td>".$row['username']."</td><td>".$row['password']."</td></tr>";
}while($row);
echo "</table>";
}

?>

<html>
<head><title>admin</title></head>
<body>
<form action="second.php" method="post">
<input type='text' name="username" placeholder='username'></br></br>
<input type='password' name="password" placeholder='password'></br></br>
<input type='submit' name="loginButton" value='login'></br></br>
</form>
</body>
</html>
