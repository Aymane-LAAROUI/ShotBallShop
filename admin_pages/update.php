<?php
include "../library.php";
    
    if($_SESSION["page"]=="articles"){
        $index=$_POST["operation"];
        $nom=$_POST["name"];
        $ht=$_POST["ht"];
        $tva=$_POST["tva"];
        $stock=$_POST["stock"];
        $image=$_POST["img_src"];
        $categorie=$_POST["categorie"];
        $marque=$_POST["marque"];
        $color=$_POST["color"];
        $poids=$_POST["poids"];
        $dimension=$_POST["dimensions"];
        $equipe=$_POST["equipe"];

        $article=new table("localhost","root","","website","articles");
        $article->update("code_article",$index,
        "`image_article` = '$image', `stock_article` = '$stock',
         `nom_article` = '" . htmlspecialchars($nom) ."',
          `admin_article` = '" . $_SESSION["user"] ."', `categorie_article` = '$categorie',
           `equipe_article` = '$equipe', `marque_article` = '$marque',
            `couleur_article` = '$color', `poids_article` = '$poids',
             `dimensions_article` = '$dimension', `description_article` = '',
              `prix_ht_article` = '$ht', `tva_article` = '$tva'");
        header("location:articles.php");
    }
    else if($_SESSION["page"]=="clients"){
        $index=$_POST["operation"];
        $nom=$_POST["name"];
        $passw=$_POST["passw"];
        $tel=$_POST["tel"];
        $gmail=$_POST["gmail"];
        $ville=$_POST["ville"];
        $article=new table("localhost","root","","website","clients");
        $article->update("code_client",$index,
        "nom_client='$nom',password_client='$passw',tel_client='$tel',gmail_client='$gmail',adresse_client='$ville'");
        header("location:clients.php");
    }
    else if($_SESSION["page"]=="fournisseurs"){
        $index=$_POST["operation"];
        $nom=$_POST["name"];
        $tel=$_POST["tel"];
        $gmail=$_POST["gmail"];
        $adresse=$_POST["adresse"];
        $ville=$_POST["ville"];
        $article=new table("localhost","root","","website","fournisseurs");
        $article->update("code_fournisseur",$index,
        "nom_fournisseur='$nom',tel_fournisseur='$tel',gmail_fournisseur='$gmail',adresse_fournisseur='$adresse',ville_fournisseur='$ville'");
        header("location:fournisseurs.php");
    }
    else if($_SESSION["page"]=="categories"){
        $index=$_POST["operation"];
        $nom=$_POST["name"];
        $article=new table("localhost","root","","website","categories");
        $article->update("nom_categorie",$index,
        "nom_categorie='$nom',nom_admin_categorie='". $_SESSION["user"] ."'");
        header("location:categories.php");
    }
    else if($_SESSION["page"]=="equipes"){
        $index=$_POST["operation"];
        $nom=$_POST["name"];
        $logo=$_POST["logo"];
        $bg=$_POST["bg"];
        //nom_equipe,logo_equipe,background_equipe
        $article=new table("localhost","root","","website","equipes");
        $article->update("nom_equipe",$index,
        "nom_equipe='$nom',logo_equipe='$logo',background_equipe='$bg'");
        header("location:equipes.php");
    }
?>