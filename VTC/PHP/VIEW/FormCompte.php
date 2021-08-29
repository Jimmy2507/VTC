<?php
    if(!isset($_SESSION['AMVTC_utilisateur'])){
        header("location:?page=FormConnexion");
    }
    $utilisateur = $_SESSION["AMVTC_utilisateur"];
    $dis="disabled";
    echo'
    <div class="Block Colonne Centre">
        <h2>Detail du compte</h2>
        <label for="prenomUser">Prenom :</label>
        <input type ="text" name="prenomUser" placeholder="Prenom" value="'.$utilisateur->getPrenomUser().'" '.$dis.'>
        <label for="nomUser">Nom :</label>
        <input type ="text" name="nomUser" placeholder="Nom" value="'.$utilisateur->getNomUser().'" '.$dis.'> 
        <label for="mailUser">Adresse mail :</label>
        <input type ="text" name="mailUser" placeholder="Adresse mail" value="'.$utilisateur->getMailUser().'" '.$dis.'>
        <label for="mdpUser">Mot de passe :</label>
        <input type="password" name="mdpUser" placeholder="Mot de passe" value="'.$utilisateur->getMdpUser().'" '.$dis.'>
        <label for="telUser">Numero de téléphone :</label>
        <input type ="text" name="telUser" placeholder="Numero de telephone" value="'.$utilisateur->getTelUser().'" '.$dis.'>
        <a href="?page=Profil" class="Gris">Retour</a>
    </div>
    ';