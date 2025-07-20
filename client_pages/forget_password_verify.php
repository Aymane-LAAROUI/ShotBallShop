<?php
include "../library.php";
require "../mail.php";
    $email=clear_input($_POST["email"]);
    $client=new table("localhost","root","","website","clients");
    if($client->isexist("gmail_client","gmail_client='$email'")){
        $code=rand(10000,99999);
        $exp=time()+60;
        $client->update("gmail_client",$_SESSION["email"],"code_activation_client='$code',expiration_code_client='$exp'");
        echo $code . "<br>" . $exp/3600;
    $_SESSION["email"]=$email;
    send_mail($email,"Votre code d'activation",$code);
    header("location:password_verify_page.php");
    }
?>