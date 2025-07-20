<?php
include "../library.php";
    $index=$_GET['selected'];
    if($_SESSION["page"]=="articles" && isset($index)){
        $article=new table("localhost","root","","website","articles");
        $article->delete("code_article = '" . $index . "'");
        header("location:articles.php");
    }
    else if($_SESSION["page"]=="clients" && isset($index)){
        $article=new table("localhost","root","","website","clients");
        $article->delete("code_client = '" . $index . "'");
        header("location:clients.php");
    }
    else if($_SESSION["page"]=="fournisseurs" && isset($index)){
        $article=new table("localhost","root","","website","fournisseurs");
        $article->delete("code_fournisseur = '" . $index . "'");
        header("location:fournisseurs.php");
    }
    else if($_SESSION["page"]=="categories" && isset($index)){
        $article=new table("localhost","root","","website","categories");
        $article->delete("nom_categorie = '" . $index . "'");
        header("location:categories.php");
    }
    //nom_equipe
    else if($_SESSION["page"]=="equipes" && isset($index)){
        $article=new table("localhost","root","","website","equipes");
        $article->delete("nom_equipe = '" . $index . "'");
        header("location:equipes.php");
    }
?>