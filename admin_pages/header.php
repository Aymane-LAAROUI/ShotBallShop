<nav>
        <div id="imagecadre">
            <center>
                <img src="../images/Shotballshop.png" id="icone" onclick="top_page()">
                <p>SESSION</p>
                <p id="name">
                    <?php echo $_SESSION["user"]; ?>
                </p>
            </center>
        </div>
        <ul>
            <li>
                <a href="home_admin.php">
                    <i class="fa-solid fa-solar-panel"></i>
                    <p>Tableau de bord</p>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class="fa-regular fa-rectangle-list"></i>
                    <p>Cat&eacute;gories</p>
                </a>
            </li>
            <li>
                <a href="equipes.php">
                    <i class="fa-solid fa-shield-halved"></i>
                    <!-- <i class="fa-solid fa-futbol"></i> -->
                    <p>Equipes</p>
                </a>
            </li>
            <li>
                <a href="articles.php">
                    <i class="fa-sharp fa-solid fa-shirt"></i>
                    <p>Liste des articles</p>
                </a>
            </li>
            <li>
                <a href="vente.php">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <p>Ventes</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <p>Achats</p>
                </a>
            </li>
           
            <li>
                <a href="clients.php">
                <i class="fa-sharp fa-solid fa-person"></i>
                    <p>Relev&eacute; client</p>
                </a>
            </li>
            <li>
                <a href="fournisseurs.php">
                    <i class="fa-solid fa-user-tie"></i>
                    <p>Relev&eacute; fournisseur</p>
                </a>
            </li>
            <li>
                <form action="logout.php" method="post">
                    <button id="logout"><i class="fa-solid fa-right-from-bracket"></i>Déconnexion</button>
                </form>
            </li>

        </ul>
    </nav>