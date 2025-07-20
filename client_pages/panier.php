<?php
include "../library.php";
    print_cart();
    if(show_cart()!=0) echo "<button onclick=\"vente()\">Acheter</button>
    <button onclick=\"vider_panier()\">Vider le panier</button>";
?>
