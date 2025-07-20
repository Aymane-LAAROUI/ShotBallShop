<?php
$rech=$_REQUEST["q"];
include "../library.php";
$sender=$_SESSION["page"];
$index="";

if($sender=="articles") $index="nom_article";
if($sender=="clients") $index="nom_client";
if($sender=="fournisseurs") $index="nom_fournisseur";
if($sender=="categories") $index="nom_categorie";
if($sender=="equipes") $index="nom_equipe";
if($sender=="ventes") $index="code_vente";

$table_article=new table("localhost","root","","website",$sender);

if(isset($rech)) $table_article->load_table("$index like '%$rech%' order by '$rech'","table");
else $table_article->load_table("1 order by $index","table");
?>