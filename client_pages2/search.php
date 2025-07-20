<?php
    include "../library.php";
    @$sender=$_REQUEST["q"];
    @$filter=$_REQUEST["mot"];
    @$index=$_REQUEST["index"];
    $table_article=new table("localhost","root","","website","articles");
    if($sender=="artbycat") $table_article->load_table("categorie_article like '%$index%'","card");
    else if($sender=="artbyrech" && $index!="") $table_article->load_table("nom_article like '%$index%'","card");
    else if($sender=="artbyrech" && $index=="") include "default_page.php";
    else if($sender=="artbyfilt"){
        $filter=str_replace(["µ"],"+",$filter);
        $table_article->load_table("nom_article like '%$index%' $filter","card");
    } 
    


?>