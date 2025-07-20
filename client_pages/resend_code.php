<?php
include "../library.php";
require "../mail.php";
$client=new table("localhost","root","","website","clients");
$code=rand(10000,99999);
$exp=time()+60;
$client->update("gmail_client",$_SESSION["email"],"code_activation_client='$code',expiration_code_client='$exp'");
send_mail($_SESSION["email"],"Votre code d'activation",$code);
header("location:verify_page.php");
 ?>