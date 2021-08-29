<body class="Colonne">
    <header>
        <div class="Ligne">
            <div class="Centre">
                <h2><a href="?=pagedefaut" class="Titre Bleu Bold">AMVTC</a></h2>
            </div>
            <div>
                <nav class="Ligne">
                    <a href="#" class="Centre Gris">Informations</a>
                    <div class="petitEspace"></div>
                    <a href="#" class="Centre Gris">Offre entreprises</a>
                    <div class="petitEspace"></div>
                    <?php
                        if(isset($_SESSION["AMVTC_utilisateur"])){
                                echo "
                                <a href='?page=Profil' class='btn Centre'>Mon compte</a>
                                <div class='petitEspace'></div>
                                <a href='?page=ActionDeconnexion'class='Centre Gris'>Déconnexion</a>
                                ";
                        }else{
                            echo "                    
                            <a href='?page=FormConnexion' class='btn Centre'>Connexion</a>
                            <div class='petitEspace'></div>
                            <a href='?page=FormInscription' class='Centre Gris'>Inscription</a>
                            ";                            
                        }
                        ?>

                </nav>

            </div>
        </div>
    </header>