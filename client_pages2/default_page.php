<?php include "../library.php"; ?>
        <section id="categories">
            <div class="section_header">
                <p class="section_title">
                    Catégories
                </p>
            </div>
            <div class="container">
                <?php
                    $cat=new table("localhost","root","","website","categories");
                    $cat->load_table("1 order by nombre_rech_categorie desc limit 10","card");
                ?>      
            </div>  
        </section>
        <section id="popular_products">
            <div class="section_header">
                <p class="section_title">
                    Produits populaires
                </p>
            </div>
            <div class="container">
                <?php
                    $article=new table("localhost","root","","website","articles");
                    $article->load_table("1 order by nombre_recherche_article desc limit 10","card");
                ?>   
            </div>  
        </section>
        <section id="discover">
            <div class="section_header">
                <p class="section_title">
                    D&eacute;couvrir
                </p>
            </div>
            <div class="container">
                <?php
                    $article=new table("localhost","root","","website","articles");
                    $article->load_table("1 order by dimensions_article DESC limit 10","card");
                ?>      
            </div> 
        </section>
        <!-- <section id="pref_products">
            <div class="section_header">
                <p class="section_title">
                    Produirs préférés
                </p>
                <a href="#" class="section_more">voir plus</a>
            </div>
            <div class="container">
                <?php
                    //$article=new table("localhost","root","","website","articles");
                    // $article->load_table("1 limit 10","card");
                ?>
                For existing phone numbers: 
                    <a href="whatsapp://send?phone=0649122899&text=salam">click here</a>        
            </div> 
        </section> -->
        <section id="best_sells">
            <div class="section_header">
                <p class="section_title">
                    Meilleurs ventes
                </p>
            </div>
            <div class="container">
                <?php
                    $article=new table("localhost","root","","website","ventes");
                    $article->load_elements("code_article_vente,sum(quantite_vendu) as somme","1 group by code_article_vente order by somme desc limit 30","bestsells");
                ?>     
            </div> 
        </section>
        <section id="maps" class="section">
        <div class="section_header" id="header01">
            <p class="section_title">
                Maps
            </p>
        </div>
        <iframe id="map" src="https://maps.google.com/maps?q=superior%20school%20of%20technology&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </section>