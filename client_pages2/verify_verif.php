<?php
    include "../library.php";
    $code=$_POST["num"];
    $client=new table("localhost","root","","website","clients");
    $user=$client->load_table("gmail_client='". $_SESSION["email"] . "'","detail");
    $user_code=$user["code_activation_client"];
    $user_exp=$user["expiration_code_client"];
    if($user_exp<time()) header("location:verify_page.php?error=code expired!");
    else if($code!=$user_code) header("location:verify_page.php?error=code invalid!");
    else{
        $client->update("gmail_client",$_SESSION["email"],"verify_client='1'");
        header("location:login.php");
    } 
?>