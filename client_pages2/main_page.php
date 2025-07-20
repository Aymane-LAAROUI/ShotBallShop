<?php include "../library.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    <script src="../JavaScript/client.js"></script>
    <title>ShotballShop - Welcome!</title>
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
        <div id="page-body">
            
        </div>
    </div>
    
    <div id="filter">
        <div id="filter-body">
            <form method="get" id="form-filter">
                <table>
                    <tr>
                        <td><label for="prix_min">Prix Mininmale</label></td>
                        <td><input  onkeyup="minifiltre(this.value,0)" type="number" name="prix_min" value="<?php if(isset($_GET['prix_min'])) echo $_GET['prix_min'];?>"><br></td>
                    </tr>
                    <tr>
                        <td><label for="prix_max">Prix Maximale</label></td>
                        <td><input  onkeyup="minifiltre(this.value,1)" type="number" name="prix_max" value="<?php if(isset($_GET['prix_max'])) echo $_GET['prix_max'];?>"><br></td>
                    </tr>
                    <tr>
                        <td><label for="categories">Categorie</label></td>
                        <td><select name="categories" id="categorie" onchange="minifiltre(this.value,2)">
                        <option value=""> --Tous--</option>
                        <?php
                            $equipe=new table("localhost","root","","website","categories");
                            $equipe->load_table("1","option");
                        ?>
                    </select></td>
                    </tr>
                    <tr>
                        <td><label for="equipes">Equipe</label></td>
                        <td><select name="equipe" id="equipe" onchange="minifiltre(this.value,3)">
                        <option value=""> --Tous--</option>
                        <?php
                            $equipe=new table("localhost","root","","website","equipes");
                            $equipe->load_table("1","option");
                        ?>

                    </select></td>
                    </tr>
                </table>               
            </form>
            <button name="filter" onclick="filtre() ; toogle_filter()">Apply Filter</button>
        </div>
    </div>
    <div id="loader">
        <div class="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
    </div>
    <div class="foot">
        <footer>
            <div class="row">
                <div class="col">
                    <img src="../images/Shotballshop.png" class="logo">
                    <p>Welcome to our shop <span class="span">Shotballshop</span> where you can find all sort of products of your favorite football clubs and more.</p>
                </div>
                <div class="col">
                    <h3>Office</h3>
                    <p>Ecole Superieure de Technologie,</p>
                    <p>Route Eljadida,KM 7</p>
                    <p>Casablanca Maroc</p>
                    <p class="email-id">shotballshop@gmail.com</p>
                    <h4>+212 612345678</h4>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">Contacts</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Contact Us</h3>
                    <form>
                        <span><a href="https://wa.me/0649122899?text=hello there">Send us your feedback via whatsapp</a></span>
                        <i class="fa-brands fa-whatsapp"></i>
                        <!-- <textarea rows="4"></textarea> -->
                    </form>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>