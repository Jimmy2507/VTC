<?php $reserv = reservationManager::getListEnCour();
    $nbReserv = count($reserv);
?>
<div class="Colonne">
    <div class="EspaceH"></div>
    <div class="Ligne">
        <div class="Radius BgcBleu Blanc Centre Colonne">
            <h3>Votre profil</h3>
            <div class="EspaceH3"></div>
            <div class="Historique"><a href="?page=ListeHistorique" class="Blanc">Historique de vos reservations</a></div>
            <?php 
            if(isset($_SESSION["AMVTC_utilisateur"])){
                if($_SESSION["AMVTC_utilisateur"]->getIdRole()!=2){
                    echo '
                    <div class="EspaceH1"></div>
                    <div class="Course"><a href="?page=ListeReservation" class="Blanc">Reservation en attente</a></div>
                    ';
                }
                if($_SESSION["AMVTC_utilisateur"]->getIdRole()==1){
                    echo '
                    <div class="EspaceH1"></div>
                    <div><a href="?page=GestionAdmin" class="Blanc">Gestion Admin</a></div>
                    ';
                }
            }
            ?>
            <div class="EspaceH1"></div>
            <div class="Info"><a href="?page=FormCompte" class="Blanc">Informations personnel</a></div>
            <div class="EspaceH3"></div>
        </div>
        <div class="flex4">
            <div></div>
            <div class="BgcBleu Blanc Colonne Radius">
                <div class="Ligne">
                    <div></div>
                    <h3>Vos reservations :</h3>
                    <div></div> 
                </div>
                <div class="Ligne">
                    <div></div> 
                    <div class="flex3">Vous avez : <?=$nbReserv?> réservation(s) en cours</div> 
                    <div></div>
                </div>
                <a><button class="btn2">Details</button></a>
            </div>
            <div></div>
        </div>   
        <div></div>             
    </div>
</div>
