<?php
/*require("class.phpmailer.php");
$mail = new PHPMailer(); 
$mail->IsSMTP(); // send via SMTP
//IsSMTP(); // send via SMTP
//$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "karniksayli1995@gmail.com"; // SMTP username
$mail->Password = "saylikarnik16031995"; // SMTP password
$webmaster_email = "karniksayli1995@gmail.com"; //Reply to this email ID
$email="karniksayli1995@gmail.com"; // Recipients email ID
$name="name"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Webmaster";
$mail->AddAddress($email,$name);
//$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(true); // send as HTML
$mail->Subject = "This is the subject";
$mail->SMTPDebug = 1;
$mail->Body = "Hi,
This is the HTML BODY "; //HTML Body
$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}*/
$con = new mysqli("localhost","root","","hotels");
$res=$con->query("select * from cart");
$row=$res->fetch_assoc();$row=$res->fetch_assoc();
echo $row['item'];
$i=0;$options=array();
while($row)
{$for = $row['item'];
$options[$i++]="<option value='$for'>".$row['item']."</option>";
$row=$res->fetch_assoc();
}

?>
<select name='articles'>
<?php echo implode("\n", $options); ?>
</select>





