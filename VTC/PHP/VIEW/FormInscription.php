<div class="Block Colonne Centre">
    <h2>Création de compte </h2>
    <h3>VOS IDENTIFIANTS :</h3>
    <form action="?page=ActionInscription" method="POST">
        <div class="Centre Colonne">
            <input type="text" name ="mailUser" placeholder="Adresse mail" require>  
            <div class="espaceH"></div>          
            <input type="password" name ="mdpUser" placeholder="Mot de passe" require>
            <div class="espaceH"></div>
            <div class="trait"></div>
            <h3>Vos informations personnelles :</h3>
            <input type="text" name ="prenomUser" placeholder="Prénom" require>
            <div class="espaceH"></div>
            <input type="text" name ="nomUser" placeholder="Nom de famille" require>
            <div class="espaceH"></div>
            <input type="text" name ="telUser" placeholder="Numero de téléphone" require>
            <div class="espaceH"></div>
            <button class="btn" type="submit">VALIDER</button>
        </div>
        
    </form>
</div>