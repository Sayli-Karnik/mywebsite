<!DOCTYPE html>

<html>
<form method="post">
<input type='checkbox' name='name1' value='sayli'>
<input type='submit' name='submit'>
</form>
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['name1']))
echo "hello ".$_POST['name1'];
}
$password='12345678';
$password=str_replace("1","a",$password);
/*str_replace("1","b",$password);
str_replace("2","c",$password);
str_replace("3","d",$password);
str_replace("4","e",$password);
str_replace("5","f",$password);
str_replace("6","g",$password);
str_replace("7","h",$password);
str_replace("8","i",$password);
str_replace("9","j",$password);*/
echo $password;
?>
</html>