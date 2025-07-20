<?php
    include "../library.php";
$password=$_POST["password"];
$client=new table("localhost","root","","website","clients");
$client->update("gmail_client",$_SESSION["email"],"password_client='$password'");
header("location:login.php");
?>