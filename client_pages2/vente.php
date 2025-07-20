<?php
    include "../library.php";
    include "../mail.php";
    if(isset($_SESSION["usercode"]) && $_SESSION["usercode"]!=""){
        $client=new table("localhost","root","","website","clients");
        if(!$client->isexist("*","code_client='" . $_SESSION["usercode"] . "' and verify_client='1'")){
            header("location:resend_code.php");
        }
        else{
            $panier=getcart();
            $code_clt=$_SESSION["usercode"];
            $date=date("Y/m/d h:i:s");
            $vente=new table("localhost","root","","website","ventes");
            $detail = $vente->load_elements("max(code_vente) as max","1","detail");
            $code_vente=$detail["max"] + 1;
            for($i=0;$i<count($panier[0]);$i++){
                $code_art=$panier[1][$i];
                $qte=$panier[0][$i];
                $article=new table("localhost","root","","website","articles");
                $article->update("code_article",$code_art,"stock_article=stock_article-$qte");
                $detail = $article->load_table("code_article=$code_art","detail");
                $prix_ht=$detail["prix_ht_article"];
                $tva=floatval($detail["tva_article"] * $prix_ht / 100);
                $total=floatval(($prix_ht + $tva) * $qte);
                $vente=new table("localhost","root","","website","ventes");
                $vente->insert("code_client_vente,code_article_vente,code_vente,quantite_vendu,prix_total_vente,date_vente,prix_ht_vente,tva_vente",
                "'$code_clt','$code_art','$code_vente','$qte','$total','$date','$prix_ht','$tva'");
                echo "WLYAAAAAAA $i!<br>";
            }
            delete_cookie();
            header("location:main_page.php");
        }
    }
    else{
        header("location:login.php");
    }
?>