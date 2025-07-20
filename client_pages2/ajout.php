<?php
    include "../library.php";
    @$sender=$_REQUEST["q"];
    @$index=$_REQUEST["index"];
    @$value=$_REQUEST["value"];
    $table_article=new table("localhost","root","","website","articles");
    if($sender=="ajoutnrech") $table_article->update("code_article",$index,"nombre_recherche_article = nombre_recherche_article + 1");
    else if($sender=="ajoutcart") echo ajout_cart($index,$value);
    else if($sender=="clearcart") echo delete_cookie();
    else if($sender=="delete_value"){
        echo delete_value($index);
        header("location:panier.php");
    } 
    // else if($sender=="artbyrech" && $index!="") $table_article->load_table("nom_article like '%$index%'","card");
    // else if($sender=="artbyrech" && $index=="") include "default_page.php";
    // else if($sender=="artbyfilt"){
    //     $filter=str_replace(["µ"],"+",$filter);
    //     $table_article->load_table("nom_article like '%$index%' $filter","card");
    // } 
    


?>