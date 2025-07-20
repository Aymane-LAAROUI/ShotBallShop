<?php
include "../library.php";
require "../mail.php";
    $username=clear_input($_POST["username"]);
    $email=clear_input($_POST["email"]);
    $password=clear_input($_POST["password"]);
    $password_again=clear_input($_POST["password-again"]);
    $Phone=clear_input($_POST["Phone"]);
    $Adress=clear_input($_POST["Adress"]);
    $recaptcha=clear_input($_POST["g-recaptcha-response"]);
    $client=new table("localhost","root","","website","clients");
    if($username=="") header("location:register.php?error=Username invalid!");
    else if($client->isexist("gmail_client","gmail_client='$email'")) header("location:register.php?error=Email already exists!");
    else if($password=="") header("location:register.php?error=Password invalid!");
    else if($password!=$password_again) header("location:register.php?error=Password invalid!");
    else if($Phone=="") header("location:register.php?error=Phone invalid!");
    else if($Adress=="") header("location:register.php?error=Adress invalid!");
    else if($recaptcha=="" || !isset($recaptcha)) header("location:register.php?error=Please try reCaptcha again!");
    else{
        $code=rand(10000,99999);
        $exp=time()+60;
        $client->insert("code_client,nom_client,password_client,tel_client,gmail_client,adresse_client,verify_client,code_activation_client,expiration_code_client",
    "'null','$username','$password','$Phone','$email','$Adress','0','$code','$exp'");
    //echo $code . "<br>" . $exp/3600;
    $_SESSION["email"]=$email;
    send_mail($email,"Votre code d'activation",$code);
    header("location:verify_page.php");
    }
?>