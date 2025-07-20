<?php
include "../library.php";
$_SESSION["page"]="ventes";
@$rech=$_GET["rech"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/admin_style.css">
    <link rel="shortcut icon" href="../images/Shotballshop.png" type="image/x-icon">
    <script src="../JavaScript/admin.js"></script>
    <title>Shotballshop - Administration</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <center>
            <p id="title">
                Ventes
            </p>
        </center>
        <header>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                <input type="text" name="rech" id="rech" value="<?php if(isset($rech)) echo $rech; ?>" onkeyup="search(this.value)">
                <input type="submit" value="rechercher">
                <span id="nbr_art">article(s)</span>
                <span id="nbr_selec"></span>
            </form>
        </header>
        <section>
            <form method="get" action="delete.php" id="minicontainer">
                <table class='class1'>
                    <thead>
                        <tr class="entete">
                            <td><a href="">Code facture</a></td>
                            <td><a href="">Quantité</a></td>
                            <td><a href="">Désignation</a></td>
                            <td><a href="">Prix unitaire ht</a></td>
                            <td><a href="">TVA unitaire</a></td>
                            <td><a href="">Prix total ht</a></td>
                            <td><a href="">TVA</a></td>
                            <td><a href="">prix total ttc</a></td>
                            <td><a href="">Nom client</a></td>
                            <td><a href="">Date de vente</a></td>
                        </tr>
                    </thead>
                    <tbody id="class1">
                        
                    </tbody>
                </table>
                <input type="hidden" name="selected" id="selected">
            </form>
        </section>
    </div>
</body>
</html>