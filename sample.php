<?php

function transfer_qty($new_qty ,$for){

$con = new mysqli("server29.000webhost.com","a7914922_root","1234asdf","a7914922_hotels");


$res = $con->query("select * from cart where item='$for'");
$row = $res->fetch_assoc();
$old_price = $row['tot_price'];
$old_qty = $row['qty'];
$new_price = ($old_price*$new_qty)/$old_qty;

$sql1 = "update cart set qty = $new_qty where item = '$for'";
$sql2 = "update cart set tot_price = $new_price where item = '$for'";

if ($con->query($sql1) === TRUE) {
    
} else {
    echo "updating record incomplete: ";
}
$con->query($sql2);


}




?>