<?php
session_start();
    function clear_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = Strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function ajout_cart($index,$value){
        if(isexist($index)) update_value($index,$value);
        else{
            @$cookie=$_COOKIE["cart". @$_SESSION["usercode"]] . "$value/$index-";
            setcookie("cart" . @$_SESSION["usercode"],$cookie,time()+86400*30);
        }
        
        return show_cart();
    }
    function initialize_cookie(){
        setcookie("cart". @$_SESSION["usercode"],@$_COOKIE["cart".@$_SESSION["usercode"]] .@$_COOKIE["cart"],time()+86400*30);
        setcookie("cart","",time()-100000000);
    }
    function delete_cookie(){
        setcookie("cart" . @$_SESSION["usercode"],"",time()-50000);
    }
    function print_cookie($table){
        $cookie="";
        for($i=0;$i<count($table[0]);$i++){
            if($table[0][$i]=="" || $table[1][$i]=="") continue;
            $cookie .= $table[0][$i]."/".$table[1][$i]."-";
        }
       setcookie("cart" . @$_SESSION["usercode"],$cookie,time()+86400*30);
   }
    //             UPDATE FROM COOKIE            


    function update_value($index,$value){
         $result = getcart();
         for($i=0;$i<count($result[0]);$i++){
            if($result[1][$i]==$index){
                $result[0][$i] = $value;
                break;
            }     
        }
         print_cookie($result);
        }

//
    //         DELETE FROM COOKIE
//
    function delete_value($index){
        $result = getcart();
        for($i=0;$i<count($result[0]);$i++){
            if($result[1][$i]==$index){
                for($j=$i;$j<count($result[0]);$j++){
                    $k = $j;
                    if($j == count($result[0]) - 1){
                        $result[0][$j]="";
                        $result[1][$j]="";
                    }
                    @$result[0][$j] = $result[0][$j+1];
                    @$result[1][$k] = $result[1][$k+1];
                }
                break;
            }
        }
        print_cookie($result);
    }

    function search_qte($code){
        $result = getcart();
        for($i = 0; $i < count($result[0]); $i++){
            if($result[1][$i] == $code){
                $quantite = $result[0][$i];
            }
        }
        return $quantite;
    }

    function getcart() {
        if(@$_COOKIE["cart" . @$_SESSION["usercode"]]!=""){
            @$cookie=$_COOKIE["cart" . @$_SESSION["usercode"]];
            $s="";
            $i=$j=$k=0;
            $qte=$code=array();
            for($i=0;$i<strlen($cookie);$i++){
                if($cookie[$i]=='/'){
                    $resultat[0][$j++]=$s;
                    $s='';
                }
                else if($cookie[$i]=='-'){
                    $resultat[1][$k++]=$s;
                    $s='';
                }
                else{
                    $s.=$cookie[$i];
                }
            }
            return $resultat;
        }
        else return "dakchi 5awi";
    }

    function print_cart(){
        if(@$_COOKIE["cart" . @$_SESSION["usercode"]]!=""){
            $result=getcart();
            $query="code_article=".$result[1][0];
            for($i=1;$i<count($result[0]);$i++){
                $query.=" or code_article=".$result[1][$i];
            }
            $article = new table("localhost","root","","website","articles");
            $article->load_table($query,'cart-items');
        }

    }

    function show_cart(){
        if(isset($_COOKIE["cart" . @$_SESSION["usercode"]])){
            $cookie= getcart();
            $j=0;
            for($i=0;$i<count($cookie[0]);$i++){
                if($cookie[0][$i]=="")$cookie[0][$i]=0;
                $j+=$cookie[0][$i];
                // $j++;
            }
            return $j;
        }
        else return 0;
    }
    function isexist($code){
        $result = getcart();
        $etat=false;
        if($result=="dakchi 5awi"){
            return false;
        }
        else{
            for($i=0;$i<count($result[0]);$i++){
                if($result[1][$i] == $code){
                    $etat = true;
                    break;
                }
                else {
                    $etat = false;
                }
            }
            return $etat;
        }
    }
    function username(){
        if(isset($_SESSION["user"])) echo $_SESSION["user"];
         else echo "connexion";
    }
    function show_cards($row,$type){
        if($type=="articles")
        echo "
        <div class=\"card\" onclick='ajout_n_rech(\"" . $row["code_article"] . "\") ; show_article(\"" . $row["code_article"] . "\")'>
            <center>
            <div class=\"card-img\">
            <img src=\"../images/" . $row["image_article"] . "\">
            </div>
            </center>
            <div id=\"card-content\">
                <div class=\"card-info\">
                        <p class=\"text-title\">
                        " . $row["nom_article"] . "
                        </p>
                </div>
                <div class=\"card-footer\">
                    <span class=\"text-title\">
                    " . $row["prix_ht_article"] * (100 + $row["tva_article"])/100 . "
                    Dhs</span>
                </div>
            </div>
        </div>
        ";
        else if($type=="categories")
        
        echo "
        <div onclick='show_art_bycat(\"" . $row["nom_categorie"] . "\")' class=\"cat\">
                        <p class=\"cat-text\">
                        " . $row["nom_categorie"] . "
                        </p>
        </div>
        ";
        
    }
    function show_cart_items($row,$type){
        if($type=="articles")
        echo "
        <div class=\"card card2\">
            <center>
                <div class=\"card-img\">
                    <img src=\"../images/" . $row["image_article"] . "\">
                </div>
            </center>
            <div id=\"card-content\">
                <div class=\"card-info\">
                        <p class=\"text-title\">
                        " . $row["nom_article"] . "
                        </p>
                </div>
                <div class=\"card-footer\">
                    <span class=\"text-title\">
                    " . $row["prix_ht_article"] * (100 + $row["tva_article"])/100 . "
                    Dhs</span>
                    <input type='number' class='value' name ='value' id='value' value='" . search_qte($row["code_article"]) . "' min='1' max='" . $row["stock_article"] ."' onchange=\"ajout_panier('" . $row['code_article'] ."',this.value)\">
                    <button onclick='delete_value(" . $row["code_article"] . ")'>Supprimer</button>    
                </div>
            </div>
        </div>
        ";
    }
    function show_data($row,$type){
        if($type=="articles"){
            $ttc=floatval((100 + $row["tva_article"])/100) * floatval($row["prix_ht_article"]);
            echo "
            <tr id='row'>
            <td>" . $row["nom_article"] ."</td>
            <td>" . $ttc ."dh</td>
            <td>" . $row["prix_ht_article"] ."dh</td>
            <td>" . $row["tva_article"] ."%</td>
            <td>" . $row["stock_article"] ."</td>
            <td><img class='article_img_style1' src='../images/" . htmlspecialchars($row["image_article"]) ."'></td>
            <td>" . $row["categorie_article"] ."</td>
            <td>" . $row["equipe_article"] ."</td>
            <td>" . $row["marque_article"] ."</td>
            <td style='color:" . $row["couleur_article"] .";'>" . $row["couleur_article"] ."</td>
            
            <td>" . $row["dimensions_article"] ."</td>
            <td>" . $row["nombre_recherche_article"] ."</td>
            <td>" . $row["admin_article"] ."</td>
            <td><a onclick='get_index(" . $row["code_article"] .",\"" . $row["nom_article"] ."\"," . $row["prix_ht_article"] . "," . $row["tva_article"] .",\"" . $row["stock_article"] ."\",
            \"../images/" . $row["image_article"] ."\",\"" . $row["categorie_article"] ."\",\"" . $row["marque_article"] ."\",
            \"" . $row["couleur_article"] ."\",\"" . $row["poids_article"] ."\",
            \"" . $row["dimensions_article"] ."\",\"" . $row["nombre_recherche_article"] ."\",\"" . $row["admin_article"] ."\",\"" . $row["equipe_article"] ."\")' name='record[]' class='checkbox1' value='" . $row["code_article"] . "'><i class='fa-solid fa-pen'></i> Modifier</a></td>
            <td><a onclick='select(" . $row["code_article"] . ")' id='" . $row["code_article"] . "' href='#' value='" . $row["code_article"] . "'><i class='fa-solid fa-hexagon-minus'></i> Supprimer</a></td>
            </tr>
            ";
        }
        else if($type=="clients"){
            echo "
            <tr id='row'>
            <td>" . $row["nom_client"] ."</td>
            <td>" . $row["password_client"] ."</td>
            <td>" . $row["tel_client"] ."</td>
            <td>" . $row["gmail_client"] ."</td>
            <td>" . $row["adresse_client"] ."</td>
            <td><a onclick='get_index_c(" . $row["code_client"] .",\"" . $row["nom_client"] ."\",\"" . $row["password_client"] . "\",\"" . $row["tel_client"] ."\",\"" . $row["gmail_client"] ."\",\"" . $row["adresse_client"] . "\")' href='#' value='" . $row["code_client"] . "'><i class='fa-solid fa-pen'></i> Modifier</a></td>
            <td><a onclick='select(" . $row["code_client"] . ")' id='" . $row["code_client"] . "' href='#' value='" . $row["code_client"] . "'><i class='fa-solid fa-hexagon-minus'></i> Supprimer</a></td>
            </tr>
            ";
        }
        else if($type=="fournisseurs"){
            echo "
            <tr id='row'>
            <td>" . $row["nom_fournisseur"] ."</td>
            <td>" . $row["tel_fournisseur"] ."</td>
            <td>" . $row["gmail_fournisseur"] ."</td>
            <td>" . $row["adresse_fournisseur"] ."</td>
            <td>" . $row["ville_fournisseur"] ."</td>
            <td><a onclick='get_index_f(" . $row["code_fournisseur"] .",\"" . $row["nom_fournisseur"] ."\",\"" . $row["tel_fournisseur"] ."\",\"" . $row["gmail_fournisseur"] ."\",\"" . $row["adresse_fournisseur"] . "\",\"" . $row["ville_fournisseur"] ."\")' href='#' value='" . $row["code_fournisseur"] . "'><i class='fa-solid fa-pen'></i> Modifier</a></td>
            <td><a onclick='select(" . $row["code_fournisseur"] . ")' id='" . $row["code_fournisseur"] . "' href='#' value='" . $row["code_fournisseur"] . "'><i class='fa-solid fa-hexagon-minus'></i> Supprimer</a></td>
            </tr>
            ";
        }
        else if($type=="categories"){
            echo "
            <tr id='row'>
            <td>" . $row["nom_categorie"] ."</td>
            <td>" . $row["nom_admin_categorie"] ."</td>
            <td>" . $row["nombre_rech_categorie"] ."</td>
            <td><a onclick='get_index_cat(\"" . $row["nom_categorie"] ."\")' href='#' value='" . $row["nom_categorie"] . "'><i class='fa-solid fa-pen'></i> Modifier</a></td>
            <td><a onclick='select(\"" . $row["nom_categorie"] . "\")' id='" . $row["nom_categorie"] . "' href='#' value='" . $row["nom_categorie"] . "'><i class='fa-solid fa-hexagon-minus'></i> Supprimer</a></td>
            </tr>
            ";
        }
        else if($type=="equipes"){
            echo "
            <tr id='row'>
            <td>" . $row["nom_equipe"] ."</td>
            <td><img class='article_img_style1' src='../images/" . $row["logo_equipe"] ."'></td>
            <td><img class='article_img_style1' src='../images/" . $row["background_equipe"] ."'></td>
            <td><a onclick='get_index_equ(\"" . $row["nom_equipe"] ."\",\"" . $row["logo_equipe"] ."\",\"" . $row["background_equipe"] ."\")' href='#' value='" . $row["nom_equipe"] . "'><i class='fa-solid fa-pen'></i> Modifier</a></td>
            <td><a onclick='select(\"" . $row["nom_equipe"] . "\")' id='" . $row["nom_equipe"] . "' href='#' value='" . $row["nom_equipe"] . "'><i class='fa-solid fa-hexagon-minus'></i> Supprimer</a></td>
            </tr>
            ";
        }
        else if($type=="ventes"){
            $article=new table("localhost","root","","website","articles");
            $art= $article->load_table("code_article = " . $row['code_article_vente'],"detail");
            $client=new table("localhost","root","","website","clients");
            $clt= $client->load_table("code_client = " . $row['code_client_vente'],"detail");
            echo "
            <tr id='row'>
            <td>" . $row["code_vente"] ."</td>
            <td>" . $row["quantite_vendu"] ."</td>
            <td>" . $art["nom_article"] ."</td>
            <td>" . $row["prix_ht_vente"] ."dh</td>
            <td>" . $row["tva_vente"] ."dh</td>
            <td>" . floatval($row["quantite_vendu"] * $row["prix_ht_vente"]) ."dh</td>
            <td>" . floatval($row["quantite_vendu"] * $row["tva_vente"]) ."dh</td>
            <td>" . $row["prix_total_vente"] ."dh</td>
            <td>" . @$clt["nom_client"] ."</td>
            <td>" . $row["date_vente"] ."</td>
            </tr>
            ";
        }
    }
    function show_option($row,$type){
        if($type=="categories"){
            echo "
            <option value='" . $row["nom_categorie"] ."'>" . $row["nom_categorie"] ."</option>
            ";
        }
        else if($type=="equipes"){
            echo "
            <option value='" . $row["nom_equipe"] ."'>" . $row["nom_equipe"] ."</option>
            ";
        }
        else if($type=="villes"){
            echo "
            <option value='" . $row["code_ville"] ."'>" . $row["nom_ville"] ."</option>
            ";
        }
    }

    class table{
        private $server_name;
        private $db_username;
        private $db_password;
        private $db_name;
        private $table_name;

        public function __construct($serv,$user,$passw,$db,$tabn){
            $this->server_name=$serv;
            $this->db_username=$user;
            $this->db_password=$passw;
            $this->db_name=$db;
            $this->table_name=$tabn;
        }
        public function load_table($cond,$type){
            $link=mysqli_connect($this->server_name,$this->db_username,$this->db_password,$this->db_name);
            if(mysqli_connect_errno()){
                printf("echec de la connection: %s\n",mysqli_connect_error());
                exit();
            }
            $query="select * from $this->table_name where $cond";
            //echo $query;
            $result=mysqli_query($link,$query);
            while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){
                if($type=="table") show_data($row,$this->table_name);
                else if ($type=="option") show_option($row,$this->table_name);
                else if ($type=="card") show_cards($row,$this->table_name);
                else if ($type=="cart-items") show_cart_items($row,$this->table_name);
                else if ($type=="detail") return $row;
            }
            mysqli_free_result($result);
            mysqli_close($link);
        }
        public function load_elements($elements,$cond,$type){
            $link=mysqli_connect($this->server_name,$this->db_username,$this->db_password,$this->db_name);
            if(mysqli_connect_errno()){
                printf("echec de la connection: %s\n",mysqli_connect_error());
                exit();
            }
            $query="select $elements from $this->table_name where $cond";
            $result=mysqli_query($link,$query);
            while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){
                if($type=="table") show_data($row,$this->table_name);
                else if ($type=="option") show_option($row,$this->table_name);
                else if ($type=="card") show_cards($row,$this->table_name);
                else if ($type=="cart-items") show_cart_items($row,$this->table_name);
                else if ($type=="detail") return $row;
                else if ($type=="bestsells"){
                    $article=new table("localhost","root","","website","articles");
                    $article->load_table("code_article=" . $row[0],"card");
                }
            }
            mysqli_free_result($result);
            mysqli_close($link);
        }
        public function delete($cond){
            $link=mysqli_connect($this->server_name,$this->db_username,$this->db_password,$this->db_name);
            if(mysqli_connect_errno()){
                printf("echec de la connection: %s\n",mysqli_connect_error());
                exit();
            }
            $query="DELETE FROM $this->table_name WHERE $cond";
            $_SESSION["query"]=$query;
            $result=mysqli_query($link,$query);
        }
        public function insert($parameters,$values){
            $link=mysqli_connect($this->server_name,$this->db_username,$this->db_password,$this->db_name);
            if(mysqli_connect_errno()){
                printf("echec de la connection: %s\n",mysqli_connect_error());
                return 0;
                exit();
            }
            $query="INSERT INTO `$this->table_name` ($parameters) VALUES ($values);";
            //echo "<br>" . $query . "<br>";
            $result=mysqli_query($link,$query);
            return 1;
        }
        public function update($index_name,$index,$requete){
            $link=mysqli_connect($this->server_name,$this->db_username,$this->db_password,$this->db_name);
            if(mysqli_connect_errno()){
                printf("echec de la connection: %s\n",mysqli_connect_error());
                return 0;
                exit();
            }
            $query="UPDATE `$this->table_name` SET $requete WHERE `$this->table_name`.`$index_name` ='$index';";
            //echo $query . "<br>";
            $result=mysqli_query($link,$query);
            return 1;
        }
        public function isexist($columns,$cond){
            $link=mysqli_connect($this->server_name,$this->db_username,$this->db_password,$this->db_name);
            if(mysqli_connect_errno()){
                printf("echec de la connection: %s\n",mysqli_connect_error());
                return false;
                exit();
            }
            $query="select $columns from $this->table_name where $cond";
            //echo $query;
            $result=mysqli_query($link,$query);
            if(mysqli_num_rows($result)){
                $row=mysqli_fetch_array($result,MYSQLI_BOTH);
                return true;
            }
            else{
                return false;
            }
        }
    }
?>