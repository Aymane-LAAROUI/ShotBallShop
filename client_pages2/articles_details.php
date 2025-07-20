<?php
include "../library.php";
$index=$_REQUEST["index"];
    $article=new table("localhost","root","","website","articles");
    $row=$article->load_table("code_article='$index'","detail");
?>
<div id="article-details">
    <div id="article">
        <div id="fav">
           <!-- <i class="fa-solid fa-heart"></i> -->
           <i class="fa-regular fa-heart"></i>
        </div>
        <br>
        <div id="article-body">
            <div id="photo-article">
                <img src="<?php echo '../images/' . $row['image_article']; ?>" alt="image">
                <br>
                <?php /*echo "<a href=\"https://wa.me/0649122899?text=je veux acheter ce produit :" . $row['nom_article'] ."  \"  id='whatsapp'>
                            <i class=\"fa-brands fa-whatsapp whatsapp\"></i> Whatsapp </a><a href=\"https://wa.me/0649122899?text=je veux acheter ce produit :" . $row['nom_article'] ."  \"  id='whatsapp'>
                            <i class=\"fa-brands fa-whatsapp whatsapp\"></i> Facebook </a><a href=\"https://wa.me/0649122899?text=je veux acheter ce produit :" . $row['nom_article'] ."  \"  id='whatsapp'>
                            <i class=\"fa-brands fa-whatsapp whatsapp\"></i> Instagram </a>";*/
                       
                ?>
            </div>
            <div id="operation-article">
               <?php
                    $etat="";
                    if($row["stock_article"] > 0) $etat="Disponible";
                    else $etat="Epuisée!";
                    $equipe = $row["equipe_article"];
                    if($equipe!=" -" && $equipe!="") $equipe="equipe: " . $equipe;
                    else $equipe = "";
                    echo " <p id=\"nom-article\">" . $row["nom_article"] ."</p>
                    <br>
                    <p id=\"prix-article\">Prix:" . $row["prix_ht_article"] * (100 + $row["tva_article"])/100 . "Dhs</p>
                    <br>
                    <p id=\"etat-article\">Catégorie:" . $row["categorie_article"] ."</p>
                    <p id=\"marque-article\">Marque:" . $row["marque_article"] ."</p>
                    <p id=\"etat-article\">" . $equipe ."</p><br>
                    <p id=\"etat-article\">Etat:" . $etat ."</p><br>
                    ";
                    if($etat=="Epuisée!") echo "<p id='article-exist'>Bientôt sera disponible</p>";
                    else if(isexist($row['code_article'])) echo "<p id='article-exist'>Ajoutée au panier</p>";
                    else echo "<button id=\"achat-article\" onclick=\"ajout_panier('" . $row["code_article"] ."','1') ; ajout_panier('" . $row["code_article"] ."','1')\">Ajouter au panier</button>";
               ?>
                    
            </div>
        </div>
    </div>
</div>