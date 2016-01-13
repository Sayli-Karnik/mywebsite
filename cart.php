<?php
$rest_id=0;

class cart
{//$rest_id=0;
function add($item , $qty ,$price ,$res_name)
{
$con = new mysqli($host,$username,$password,$database);
$res=$con->query("insert into cart values($item,$qty,$price,$res_name)");

}

}
?>