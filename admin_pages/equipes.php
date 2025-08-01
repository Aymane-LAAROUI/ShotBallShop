<?php
include "../library.php";
$_SESSION["page"]="equipes";
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
    <div id="edit_cont">
        <div id="edit">
            <a id="close_edit" onclick="close_cru()">fermer</a>
            <br>
            <form id="crud" method="post">
                Nom:<input type="text" name="name" id="name">
                <br>
                Logo:<input type="file" name="logo" id="logo">
                <br>
                Background:<input type="file" name="bg" id="bg">
                <br>
                <button id="ajouter_btn" onclick="cru_val(0)">ajouter</button>
                <button id="modifier_btn" onclick="cru_val(1)">modifier</button>
                <button id="suppr_btn" onclick="cru_val(2)">supprimer</button>
                <input type="hidden" name="operation" id="index">
            </form>
        </div>
    </div>
    <?php
        include "header.php";
    ?>
    <div id="container">
        <center>
            <p id="title">
                Equipes
            </p>
        </center>
        <header>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                <input type="text" name="rech" id="rech" value="<?php if(isset($rech)) echo $rech; ?>" onkeyup="search(this.value)">
                <input type="submit" value="rechercher">
                <span id="nbr_art">Equipe(s)</span>
                <span id="nbr_selec"></span>
                <a id="ajouter" onclick="show_cru()">Ajouter</a>
            </form>
        </header>
        <section>
            <form method="get" action="delete.php" id="minicontainer" class="section">
                <table class='class1'>
                    <thead>
                        <tr class="entete">
                            <td><a href="">Nom</a></td>
                            <td><a href="">Logo</a></td>
                            <td><a href="">Background</a></td>
                            <td></td>
                            <td></td>
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