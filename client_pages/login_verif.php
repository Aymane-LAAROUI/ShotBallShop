<?php
include "../library.php";
    $username=$_POST["username"];
    $username=str_replace(["'"],"",$username);
    $username=str_replace(["/"],"",$username);
    $password=clear_input($_POST["password"]);
    $recaptcha=$_POST["g-recaptcha-response"];
    echo $recaptcha;
    if(isset($recaptcha) && $recaptcha!=""){
        if($username[0]=='&'){
            echo $username;
            $admin=new table("localhost","root","","website","admins");
            $username=str_replace(["&"],"",$username);
            //&Aymane' or '1'='1
            if($admin->isexist("*","name_admin='$username' and password_admin='$password'")){
                $_SESSION["user"]=$username;
                header("location:../admin_pages/home_admin.php");
            }
            else{
                header("location:login.php?&error=**Username ou Password invalide**");
            }
        }
        else{
            $client=new table("localhost","root","","website","clients");
            //$username=str_replace(["&"],"",$username);
            //&Aymane' or '1'='1
            if($client->isexist("*","nom_client='$username' and password_client='$password'")){
                $detail = $client->load_table("nom_client='$username'","detail");
                $_SESSION["user"]=$username;
                $_SESSION["usercode"]=$detail["code_client"];
                initialize_cookie();
                if($detail["verify_client"]==1) header("location:main_page.php");
                else header("location:main_page.php");
            }
            else{
                header("location:login.php?error=Username ou Password invalide**");
            }
        }
    }
    else header("location:login.php?error=**Réessayer reCaptcha**");
?>