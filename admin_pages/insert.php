<?php
include "../library.php";
    
    if($_SESSION["page"]=="articles"){
        $nom=$_POST["name"];
        $ht=$_POST["ht"];
        $tva=$_POST["tva"];
        $stock=$_POST["stock"];
        $image=$_POST["img_src"];
        $categorie=$_POST["categorie"];
        $marque=$_POST["marque"];
        $color=$_POST["color"];
        $poids=$_POST["poids"];
        $dimension=date("y-m-j h:i:s");
        $equipe=$_POST["equipe"];
        $article=new table("localhost","root","","website","articles");
        $article->insert("`code_article`, `image_article`,
         `stock_article`, `nom_article`, `nombre_recherche_article`,
          `admin_article`, `categorie_article`, `equipe_article`,
           `marque_article`, `couleur_article`, `poids_article`,
         `dimensions_article`,
         `description_article`, `prix_ht_article`, `tva_article`",
        "'NULL','$image','$stock','" . htmlspecialchars($nom) ."','0','" . $_SESSION['user'] . "'
        ,'$categorie','$equipe','$marque','$color','0','$dimension','','$ht','$tva'");
        header("location:articles.php");
    }
    else if($_SESSION["page"]=="clients"){
        $nom=$_POST["name"];
        $passw=$_POST["passw"];
        $tel=$_POST["tel"];
        $gmail=$_POST["gmail"];
        $ville=$_POST["ville"];
        $article=new table("localhost","root","","website","clients");
        $article->insert("code_client,nom_client,password_client,tel_client,gmail_client,adresse_client"
        ,"'NULL','$nom','$passw','$tel','$gmail','$ville'");
        header("location:clients.php");
    }
    else if($_SESSION["page"]=="fournisseurs"){
        $nom=$_POST["name"];
        $tel=$_POST["tel"];
        $gmail=$_POST["gmail"];
        $adresse=$_POST["adresse"];
        $ville=$_POST["ville"];
        $article=new table("localhost","root","","website","fournisseurs");
        $article->insert("code_fournisseur,nom_fournisseur,tel_fournisseur,gmail_fournisseur,adresse_fournisseur,ville_fournisseur"
        ,"'NULL','$nom','$tel','$gmail','$adresse','$ville'");
        header("location:fournisseurs.php");
    }
    else if($_SESSION["page"]=="categories"){
        $nom=$_POST["name"];
        $article=new table("localhost","root","","website","categories");
        $article->insert("nom_categorie,nom_admin_categorie,nombre_rech_categorie"
        ,"'$nom','" . $_SESSION['user'] . "','0'");
        header("location:categories.php");
    }
    else if($_SESSION["page"]=="equipes"){
        $nom=$_POST["name"];
        $logo=$_POST["logo"];
        $bg=$_POST["bg"];
        $article=new table("localhost","root","","website","equipes");
        $article->insert("nom_equipe,logo_equipe,background_equipe"
        ,"'$nom','$logo','$bg'");
        header("location:equipes.php");
    }
?>