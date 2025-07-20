<?php include "../library.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/facture_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <script src="../JavaScript/client.js"></script>
    <title>ShotballShop - Facture</title>
</head>
<body>
    <div id="page">
        <header id="header">
            <div id="header1">
                <div id="logo" class="mini-header1" onclick="top_page()"></div>
                <div id="research" class="mini-header1">
                    <form action="" id="rech">
                        <div id="rech-filter" onclick="toogle_filter()"></div>
                        <div id="rech-input">
                            <input onkeyup="show_art_byrech(this.value)" type="text" name="rech-txt" id="rech-txt">
                        </div>
                        <div id="rech-submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </form>
                </div>
                <div id="account" class="mini-header1" onclick="login()">
                    <i class="fa-solid fa-user" id="usericon"></i>
                    <p id="username"><?php username(); ?></p>
                </div>
                <div id="cart" class="mini-header1" name="<?php echo show_cart(); ?>" onclick="show_cart()">
                    <i class="fa-solid fa-cart-shopping" id="usercart"></i>
                    <p></p>
                </div>
            </div>
            <div id="header2">
            </div>
        </header>
        <br />
    <table border="4" bordercolor="#FF71FA">
	<tr>
        <td>
    <div class="corps">
        <div class="facture-container">
            <div class="top">
                <div class="top-left">
                    <h1 class="main">Facture</h1>
                    <span class="code">#141582</span>
                </div>
                <div class="top-right">
                    <div class="date">Date:18/04/2023</div>
                    <div class="date">Date Due:29/04/2023</div>
                </div>
            </div>
            <div class="facture-box">
                <div class="left">
                    <div class="text">Facture de:</div>
                    <div class="title">ShotBallShop:</div>
                    <div class="address">Route d'Eljadida, KM 7, CASABLANCA, Maroc</div>
                </div>
                <div class="right">
                    <div class="text">Facture pour:</div>
                    <div class="title">Asaad FETHALLAH:</div>
                    <div class="address">Ain Sebaa,DOHA 1, CASABLANCA, Maroc</div>
                </div>
            </div>
            <div class="table-bill">
                <table class="table-service">
                    <thead>
                        <th class="quantité">Quantité</th>
                        <th>Service</th>
                        <th class="prix">Prix</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bayern Munich Kit</td>
                            <td class="prix">98 DHS</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Barcelona Kit</td>
                            <td class="prix">96 DHS</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Real Madrid Kit</td>
                            <td class="prix">99 DHS</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="total">
                            <td>                        </td>
                            <td class="name">Total:</td>
                            <td colspan="2" class="number">293 DHS</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="actions">
                <button class="button">Print</button>
                <button class="button">Pay NOW</button>
            </div>
            <div class="note">
                <p>Merci pour votre coopération!</p>
                <p>ShotballShop.com</p>
            </div>
    </div></td>
    </tr>
    </table>
</body>
</html>
