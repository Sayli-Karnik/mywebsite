<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
 <!--<meta charset="UTF-8">
<link rel="stylesheet" href="dialog.css">
<script src="dialog.js"></script>
  -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( ".someclass" ).click(function() {
      $( "#dialog" ).dialog( "open" );
	  
/*$.ajax({type:"post",url:sample.php,data:dataString,cache:false,
success:function(html){$('msg').html(html);}
       });*/
	  
    });
  });
  
  $(document).ready(function(){
   $("#myid").click(function(){
        
		window.open("mailto:karniksayli1995@gmail.com?subject=Tomato Services&body=Thank you for ordering from Tomato.Confirmation code:5AC667");
    });
	});
  </script>
<style>
table {
    border-collapse: collapse;
}
#del{
margin-bottom:50px;
}

.btn-primary {
    background: #0099cc;
    color: #ffffff;
}
.custom{
width:150px;
color:black;
}
#re{
margin-left:190px;
}
</style>

</head>
<body bgcolor="#ff9999">
<?php
$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
$res=$con->query("select * from cart");
$row=$res->fetch_assoc();$row=$res->fetch_assoc();
//echo $row['item'];
$i1=0;$options=array();
while($row)
{$for = $row['item'];
$options[$i1]="<option value='$for'>".$row['item']."</option> ";$i1++;
$row=$res->fetch_assoc();
}

?>

<div id="dialog" title="Edit">
  <p>Enter new quantity:</p>
  <form method="post"><input type="text" name="new_qty" ><br><br><select name='for'><?php echo implode(" ", $options); ?></select><br><br>
  <input type="submit" name='sub_prompt'></form>
</div>

<button type="button" class='btn btn-info'name="confirm_cart" onclick="document.location.href='scrap.php'">CONFIRM CART</button>

</body>
<?php
ob_start();
$sub="Tomato services";
$body="Thank you for ordering from Tomato.";
class someclass
{}
function func1($rest_id){
if(isset($_POST['reorder']))  
{/*
if($rest_id==1){header( "refresh:0;url=shiv.php" );}
if($rest_id==2)header( "refresh:0;url=tbell.php" );
if($rest_id==3){header( "refresh:0;url=pbay.php" );}
if($rest_id==4){header( "refresh:0;url=ccd.php" );}
if($rest_id==5){header( "refresh:0;url=cgate.php" );}
if($rest_id==6){header( "refresh:0;url=fishy.php" );}
//header( "refresh:0;url=fishy.php" );*/
}
} 

function func($i){
$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");  
if(isset($_POST['delete']))
{
  while($i != 0)
{
$i--;
//echo "ttt ".$_POST[$i];
if(isset($_POST[$i]))
{
//echo 'n = '.$n;
$food=$_POST[$i];
//echo $n." ".$food;
$con->query("delete from cart where item='$food'");
header( "refresh:0;url=order.php" );
}
}
}
}

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
$res=$con->query("select * from cart");
$row=$res->fetch_assoc();$row=$res->fetch_assoc();
//echo $row['item'];
$i1=0;$options=array();
while($row)
{$for = $row['item'];
$options[$i1]="<option value='$for'>".$row['item']."</option> ";$i1++;
$row=$res->fetch_assoc();
}

if(isset($_POST['sub_prompt']))
{
include 'sample.php';
transfer_qty($_POST['new_qty'],$_POST['for']);}
$rest_id=0;
function disp_order(){
$arr=array();

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");
$res = $con->query("select * from cart");
$res1 = $con-> query("select * from cart");
global $i,$j;
$i=0;
$row1 = $res1->fetch_assoc();
$row1 = $res1->fetch_assoc();
include 'cart.php';
$rest_id=$row1['res_id'];
$row = $res->fetch_assoc();

echo "<br/><br/>USERNAME : ".$row['username']." <br/>";
echo "<div class='container'><table class='table table-striped'>";
echo "<th>ITEM</th>"."<th>QTY</th>"."<th>PRICE</th>"."<th></th>";
while($row = $res->fetch_assoc())
{
//$row = $res->fetch_assoc();
echo "<tr>";
$arr[$i] = $row['item'];
$y=$row['item'];
echo "<td>".$row['item']."</td><td>".$row['qty']."</td><td>".$row['tot_price']."</td><td><button class='someclass btn btn-info' name='$y' value='$y'>Edit</button></td><td></td></tr>";
$i++;
}
$j=$i;
echo "</table></div><br/>";
//echo $arr[0]."arr[0]";
echo "<form method='post'>";
$k=0;

 echo " <div class='container'><button type='button' class='btn btn-info' data-toggle='collapse' data-target='#demo1' >Want to delete an item?</button><div id='demo1' class='collapse'>";
   while($k<$j)
{
echo "<input type='checkbox' name='$k' value='$arr[$k]'> ".$arr[$k]."<br><br>";
$k++;
}
echo "<input type='submit' name='delete' value='Delete selected item'></form></div></div><br>";
 
 echo " <div class='container'><button type='button' class='btn btn-info' data-toggle='collapse' data-target='#demo3' >Add an item?</button><div id='demo3' class='collapse'>";
 echo "<br>Press back to add more items..</div></div>";
 
if(isset($_POST['reorder']))
func1($rest_id);
//if($rest_id ==3) echo "<button type='button' name='re-order' onclick='document.location.href='pbay.php''>RE-ORDER</button>";
if(isset($_POST['delete']))
func($i);
}
 disp_order();
 //echo $rest_id." hello";
//include 'asdf.php';



?>

</html>