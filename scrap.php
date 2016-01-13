<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
table {
    border-collapse: collapse;
}

.det{
margin-left:112px;
background-color="#e6e6e6";
font-size:20px;
}
#out{

margin-left:1200px;
margin-top:5px;

}
</style>
<script>
$(document).ready(function(){
   $("#myid").click(function(){
        
		window.open("mailto:karniksayli1995@gmail.com?subject=Tomato Services&body=Thank you for ordering from Tomato.Confirmation code:5AC667");
    });
	});
</script>
</head>
<body bgcolor="#ff9999">
<?php
// the message
require 'temp.php';
echo "<div id='out'><form action='index.php'><input type='image' src='logout.png' name='logout'></form></div>";
if(isset($_POST['logout']))
{
$user_obj=new user();
$user_obj->logout();
}

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
//$con = new mysqli("localhost","root","","hotels");
$res = $con->query("select * from cart");

//$row = $res->fetch_assoc();
/*msg=
 "<br/><br/>".$row['username']." :<br/>".
 "<table border=1>".
 "<th>ITEM</th>"."<th>QTY</th>"."<th>PRICE</th>";
$uname=$row['username'];
 while($row)
{$row = $res->fetch_assoc();
$msg.= "<tr><td>".$row['item']."</td><td>".$row['qty']."</td><td>  ".$row['tot_price']."</td></tr>";
//echo "<br/>";
}
$msg.= "</table>";
$msg.= "\nThank you for ordering from TOMATO..\n";
$msg = wordwrap($msg,70);
// send email
$res=$con->query("select * from user where username='$uname'");
$row=$res->fetch_assoc();
$email = $row['email_id'];
//echo $email;
//$headers = 'From: ' .$email . "\r\n".'Reply-To: ' . $email. "\r\n".'X-Mailer: PHP/' . phpversion();
$headers = "MIME-Version:1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <karniksayli1995@tomato.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";*/
//mail("karniksayli1995@gmail.com","Order details","hiiiiiii");

//$con = new mysqli("localhost","root","","hotels");
//$res1=$con->query("");
$row1 = $res->fetch_assoc();$row1 = $res->fetch_assoc();
$res_id=$row1['res_id'];
//echo "Restaurant ID : ".$res_id;
$res = $con->query("select * from hotel_1 where id=$res_id");
if($res)
$row1=$res->fetch_assoc();
else echo " ( No items ordered )";
//$row=$res->fetch_assoc();
echo "<br><div class='det'>".$row1['name']."<br>";
$sum=0;
echo "order date : " . date("d/m/Y") . "<br>";
$res = $con->query("select * from cart");

$row = $res->fetch_assoc();

echo "Username : ".$row['username']." <br/></div>";
echo "<br><hr>";
echo "<br><br><div class='container'><table class='table table-striped'>";
echo "<th>ITEM</th>"."<th>QTY</th>"."<th>PRICE</th>";
while($row)
{
$row = $res->fetch_assoc();
echo "<tr>";
echo "<td>".$row['item']."</td><td>".$row['qty']."</td><td>  ".$row['tot_price']."</td></tr>";
$sum+=$row['tot_price'];
//echo "<br/>";
}
echo "<tr><td>Net sum</td><td></td><td>Rs. ".$sum."</td></tr>";
echo "</table></div>";

?><br><div class="det">Thank you for ordering from Tomato! Your order shall be processed shortly.</div>
<button type='button' id='myid' class='btn btn-info'>Get order confirmation.</button>
</body>
</html>